<div class="col6-item">
    <div class="col_title">Proof of ID</div>
    <form method="post" action="" enctype="multipart/form-data" class="box has-advanced-upload">
        <div class="box__input">
            <input hidden type="file" accept=".gif,.png,.jpg,.jpeg,.txt" name="files[]" id="file" class="box__file">
            <label for="file"><span>Drag a document here or click to choose a file</span></label>
            <div class="box__uploading">Uploading…</div>
            <div class="box__success">Upload successful <i class="fa fa-check pull-right" aria-hidden="true"></i></div>
            <div class="box__error">Error!</div>
        </div>
        <button type="submit" class="button blue small-btn regular">UPLOAD FILE</button>
        <input type="hidden" name="ajax" value="1">
    </form>
    <div class="col_title">Proof of Address</div>
    <form method="post" action="https://css-tricks.com/examples/DragAndDropFileUploading//?submit-on-demand" enctype="multipart/form-data" class="box has-advanced-upload">
        <div class="box__input">
            <input hidden type="file" accept=".gif,.png,.jpg,.jpeg,.txt" name="files[]" id="file1" class="box__file">
            <label for="file"><span>Drag a document here or click to choose a file</span></label>
            <div class="box__uploading">Uploading…</div>
            <div class="box__success">Upload successful <i class="fa fa-check pull-right" aria-hidden="true"></i></div>
            <div class="box__error">Error!</div>
        </div>
        <button type="submit" class="button blue small-btn regular">UPLOAD FILE</button>
        <input type="hidden" name="ajax" value="1">
    </form>
    <div class="col_title">Proof of Payment</div>
    <form method="post" action="https://css-tricks.com/examples/DragAndDropFileUploading//?submit-on-demand" enctype="multipart/form-data" class="box has-advanced-upload is-success">
        <div class="box__input">
            <input hidden type="file" accept=".gif,.png,.jpg,.jpeg,.txt" name="files[]" id="file2" class="box__file">
            <label for="file"><span>Drag a document here or click to choose a file</span></label>
            <div class="box__uploading">Uploading…</div>
            <div class="box__success">Upload successful <i class="fa fa-check pull-right" aria-hidden="true"></i></div>
            <div class="box__error">Error!</div>
        </div>
        <button type="submit" class="button blue small-btn regular">UPLOAD FILE</button>
        <input type="hidden" name="ajax" value="1">
    </form>
</div>


<div class="col6-item">
    <div class="col_title">Uploaded Documents</div>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Upload Date</th>
                    <th>Type</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>25 Nov 2017, 05:12:57</td>
                    <td>Proof of ID</td>
                    <td><span class='gray'>Processing</span></td>
                </tr>
                <tr>
                    <td>25 Nov 2017, 05:12:57</td>
                    <td>Proof of Address</td>
                    <td><span class='green'>Approved</span></td>
                </tr>
                <tr>
                    <td>25 Nov 2017, 05:12:57</td>
                    <td>Proof of Payment</td>
                    <td><span class='red'>Rejected</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
