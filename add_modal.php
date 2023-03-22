<!-- Modal edit -->
<div class="modal fade" tabindex="-1" role="dialog" id="editModal<?php echo $res->id;?>">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
    <div class="modal-header">
        <h5 class="modal-title">Изменить запись</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="?id=<?php echo $res->id;?>" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="name" value=
                "<?php echo $res->name;?>" placeholder="Имя" required>
        <br>
                <input type="email" class="form-control" name="email" value=
                "<?php echo $res->email;?>" placeholder="Почта" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
        <br>
                <input type="tel" class="form-control" name="tel" value=
                "<?php echo $res->tel;?>" placeholder="Телефон" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
            </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
        <button type="submit" name="edit" class="btn btn-primary">Сохранить</button>
    </div>
        </form>
    </div>
</div>
</div>
<!-- Modal edit -->
<!-- Modal delete -->
<div class="modal fade" tabindex="-1" role="dialog" id="deleteModal<?php echo $res->id;?>">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
    <div class="modal-header">
        <h5 class="modal-title">Удаление записи</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <span>Подтвердить удаление?</span>
    </div>
        <form action="?id=<?php echo $res->id;?>" method="post">
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
                <button type="submit" name="delete" class="btn btn-primary">Удалить</button>
            </div>
        </form>
    </div>
</div>
</div>
<!-- Modal delete -->
<!-- Modal info -->
<div class="modal fade" tabindex="-1" role="dialog" id="ModalInfo<?php echo $res->id;?>">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
    <div class="modal-header">
        <h5 class="modal-title">Запись № <?php echo $res->id;?></h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="?id=<?php echo $res->id;?>" method="post">
            <div class="form-group">
                <span>Имя: "<?php echo $res->name;?>"</span>
            <br>
                <span>E-mail: "<?php echo $res->email;?>"</span>
            <br>
                <span>Телефон: "<?php echo $res->tel;?>"</span>
            </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ok</button>
    </div>
        </form>
    </div>
</div>
</div>
<!-- Modal info -->