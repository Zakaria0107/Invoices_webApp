<form action="./includes/newInvoice.inc.php" method="POST">
    <button type="button" id="back" class="body_1"><img src="public/img/icon-arrow-left.svg" alt="">Go back</button>
    <h1>New Invoice</h1>
    <h4>Bill From</h4>
    <div class="bill_from">
        <div class="full_size">
            <label class="body_1">Street Address</label>
            <input type="text" name="senderAdress[]">
        </div>
        <div>
            <label class="body_1">City</label>
            <input type="text" name="senderAdress[]">
        </div>
        <div>
            <label class="body_1">Post Code</label>
            <input type="text" name="senderAdress[]">
        </div>
        <div>
            <label class="body_1">Country</label>
            <input type="text" name="senderAdress[]">
        </div>
    </div>
    <h4>Bill To</h4>
    <div class="bill_to">
        <div class="full_size">
            <label class="body_1">Client’s Name</label>
            <input type="text" name="clientName">
        </div>
        <div class="full_size">
            <label class="body_1">Client’s Email</label>
            <input type="email" name="clientEmail">
        </div>
        <div class="full_size">
            <label for="" class="body_1">Street Address</label>
            <input type="text" name="clientAdress[]">
        </div>
        <div>
            <label class="body_1">City</label>
            <input type="text" name="clientAdress[]">
        </div>
        <div>
            <label class="body_1">Post Code</label>
            <input type="text" name="clientAdress[]">
        </div>
        <div>
            <label class="body_1">Country</label>
            <input type="text" name="clientAdress[]">
        </div>
        <div class="full_size two_pieces">
            <div class="half_size">
                <label class="body_1">Invoice Date</label>
                <input type="date" name="createdAT">
            </div>
            <div class="half_size">
                <label class="body_1">Payment Terms</label>
                <select name="paymentTerme">
                    <option value="1">Net 1 Day</option>
                    <option value="7">Net 7 Days</option>
                    <option value="14">Net 14 Days</option>
                    <option value="30">Net 30 Days</option>
                </select>
            </div>
        </div>
        <div class="full_size">
            <label class="body_1">Project Description</label>
            <input type="text" name="description">
        </div>
    </div>
    <h2>Item List</h2>
    <div class="items_list">
        <div class="form_table">
            <div class="header">
                <p class="body_1">Item Name</p>
                <p class="body_1">Qty.</p>
                <p class="body_1">Price</p>
                <p class="body_1">Total</p>
                <p class="body_1"></p>
            </div>
            <div class="item">
                <div class="item_name "> 
                    <label for="" class="body_1 ">Item Name</label>
                    <input type="text" name="itemName[]">
                </div>
                <div>
                    <label for="" class="body_1">Qty.</label>
                    <input type="text" name="quantity[]" class="quantity">
                </div>
                <div>
                    <label for="" class="body_1">Price</label>
                    <input type="text" name="price[]" class="price">
                </div>
                <div>
                    <label for="" class="body_1">Total</label>
                    <p class="body_1"></p>
                </div>
                <button type="button" class="delete_item"><img src="public/img/icon-delete.svg" alt=""></button>
            </div>
        </div>
        <button type="button" class="btn btn_3 " id="add_item">+ Add New Item</button>
    </div>
    <div class="btns">
        <button type="button" class="btn btn_3" id="descard_cancel">discard</button>
        <button type="submit" name ="saveAsDraft" class="btn btn_4" >save as draft</button>
        <button type="submit" name="saveAndSend" class="btn btn_2">save & send</button>
    </div>
</form>