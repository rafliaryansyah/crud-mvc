<div class="container mt-5">

    <h2>List Students</h2>

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <a href="#" class="btn btn-info" data-toggle="modal" data-target="#formModal">Add Student</a>

    <table class="table mt-3">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Fullname</th>
                <th scope="col">NIPD</th>
                <th scope="col">Email</th>
                <th scope="col">Majors</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 0; ?>
                <?php foreach($data['student'] as $student) : ?>
                <tr>
                    <th scope="row"><?= ++$i; ?></th>
                    <td><?= $student['name']; ?></td>
                    <td><?= $student['nipd']; ?></td>
                    <td><?= $student['email']; ?></td>
                    <td><?= $student['majors']; ?></td>
                    <td>
                        <a href="<?= base_url ?>/student/edit/<?= $student['id']; ?>" class="badge badge-success">Edit</a>
                        <a href="<?= base_url ?>/student/delete/<?= $student['id']; ?>" class="badge badge-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</table>

</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Add Student</h5>
      </div>
      <form action="<?= base_url; ?>/student/add" method="POST">
      <div class="modal-body">
        <div class="form-group">
            <label for="name">Fullname</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="ex: Ivih Lutfiah">
        </div>
        <div class="form-group">
            <label for="nipd">NIPD</label>
            <input type="number" class="form-control" id="nipd" name="nipd" placeholder="ex: 171...">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="ex: ivihlutfiah@gm...">
        </div>
        <div class="form-group">
            <label for="majors">Majors</label>
            <select class="form-control" id="majors" name="majors">
            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
            <option value="Teknik Komputer & Jaringan">Teknik Komputer & Jaringan</option>
            <option value="Multimedia">Multimedia</option>
            </select>
        </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
      </form>
    </div>
  </div>
</div>