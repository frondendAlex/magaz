document.addEventListener('DOMContentLoaded', () => {
    'use strict';

    const cardChecked = document.querySelectorAll('.card_checked');
    
    cardChecked.forEach(check => {
        check.addEventListener('change', (e) => {
            const idCard = e.target.dataset.id;
            const isChecked = e.target.checked ? 1 : 0;
            fetch('function/viewProduct.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    id: idCard,
                    view: isChecked,
                })
            })
        })
    });

});