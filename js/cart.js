window.onload = function(){
    var cartTable = document.getElementById('cartTable')
    var priceTotal = document.getElementById('priceTotal')
    var selectedTotal = document.getElementById('selectedTotal')

    var tr = cartTable.children[1].rows
    function getSubtotal(tr){
        var price = tr.cells[2]
        var countInput = tr.getElementsByTagName('input')[1]
        var subtotal = parseFloat(price.innerHTML) * parseInt(countInput.value)
        tr.cells[4].innerHTML = subtotal
    }

    function getTotal(){
        var selectd = 0
        var price = 0
        for(let i = 0; i < tr.length;i++){
            if(tr[i].getElementsByTagName('input')[0].checked){
                selectd += parseInt(tr[i].getElementsByTagName('input')[1].value)
                price += parseFloat(tr[i].cells[4].innerHTML)
            }
        }
        selectedTotal.innerHTML = selectd
        priceTotal.innerHTML = price.toFixed(2)


    }
    var checkInputs = document.querySelectorAll('.check')
    var checkAll = document.querySelector('.check-all')
    // 勾选商品
    for(var i = 0; i < checkInputs.length;i++){
        checkInputs[i].onclick = function(){
            // 如果选中了全选按钮，让所有按钮状态和他保持一致
            if(this.className.indexOf('check-all') >= 0){
                for(var j = 0; j < checkInputs.length;j++){
                    checkInputs[j].checked = this.checked
                }
            }
            // 如果没有选中则让他为空
            if(!this.checked){
                checkAll.checked = false
            }
            // 计算总数
            getTotal()
        }
    }

    // 增减和删除
    for(var i = 0; i < tr.length;i++){
        tr[i].onclick = function(e){
            var countInput = this.getElementsByTagName('input')[1]
            var value = parseInt(countInput.value)

            var cls = e.target.className
            switch(cls){
                //加
                case 'add' :
                    countInput.value = value + 1
                    getSubtotal(this)
                    break
                //减
                case 'reduce' :
                    if(value > 1){
                        countInput.value = value - 1
                        getSubtotal(this)
                    }
                    break
                //删除
                case 'delete' :
                    var conf = confirm('确定删除此商品吗？')
                    if(conf){
                        this.parentNode.removeChild(this)
                    }
                    break
            }
        }
    }

}
// 提交
// var Tjiao = document.querySelector('.submit');
// var submitMessage = document.getElementById('submitMessage');

// Tjiao.addEventListener('click', function() {

//     显示提交成功提示框
//     submitMessage.classList.remove('hidden');

//     延迟3秒钟后隐藏提示框
//     setTimeout(function() {
//         submitMessage.classList.add('hidden');
//     }, 3000);
// });

