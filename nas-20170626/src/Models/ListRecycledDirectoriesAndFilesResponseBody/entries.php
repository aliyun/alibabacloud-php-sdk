<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\ListRecycledDirectoriesAndFilesResponseBody;

use AlibabaCloud\Dara\Model;

class entries extends Model
{
    /**
     * @var string
     */
    public $ATime;

    /**
     * @var string
     */
    public $CTime;

    /**
     * @var string
     */
    public $deleteTime;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $inode;

    /**
     * @var string
     */
    public $MTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'ATime' => 'ATime',
        'CTime' => 'CTime',
        'deleteTime' => 'DeleteTime',
        'fileId' => 'FileId',
        'inode' => 'Inode',
        'MTime' => 'MTime',
        'name' => 'Name',
        'size' => 'Size',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ATime) {
            $res['ATime'] = $this->ATime;
        }

        if (null !== $this->CTime) {
            $res['CTime'] = $this->CTime;
        }

        if (null !== $this->deleteTime) {
            $res['DeleteTime'] = $this->deleteTime;
        }

        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        if (null !== $this->inode) {
            $res['Inode'] = $this->inode;
        }

        if (null !== $this->MTime) {
            $res['MTime'] = $this->MTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ATime'])) {
            $model->ATime = $map['ATime'];
        }

        if (isset($map['CTime'])) {
            $model->CTime = $map['CTime'];
        }

        if (isset($map['DeleteTime'])) {
            $model->deleteTime = $map['DeleteTime'];
        }

        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        if (isset($map['Inode'])) {
            $model->inode = $map['Inode'];
        }

        if (isset($map['MTime'])) {
            $model->MTime = $map['MTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
