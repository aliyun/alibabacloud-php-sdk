<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\ListRecycledDirectoriesAndFilesResponseBody;

use AlibabaCloud\Tea\Model;

class entries extends Model
{
    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $deleteTime;

    /**
     * @var string
     */
    public $inode;

    /**
     * @var string
     */
    public $ATime;

    /**
     * @var string
     */
    public $MTime;

    /**
     * @var string
     */
    public $CTime;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'fileId'     => 'FileId',
        'type'       => 'Type',
        'name'       => 'Name',
        'deleteTime' => 'DeleteTime',
        'inode'      => 'Inode',
        'ATime'      => 'ATime',
        'MTime'      => 'MTime',
        'CTime'      => 'CTime',
        'size'       => 'Size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->deleteTime) {
            $res['DeleteTime'] = $this->deleteTime;
        }
        if (null !== $this->inode) {
            $res['Inode'] = $this->inode;
        }
        if (null !== $this->ATime) {
            $res['ATime'] = $this->ATime;
        }
        if (null !== $this->MTime) {
            $res['MTime'] = $this->MTime;
        }
        if (null !== $this->CTime) {
            $res['CTime'] = $this->CTime;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return entries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['DeleteTime'])) {
            $model->deleteTime = $map['DeleteTime'];
        }
        if (isset($map['Inode'])) {
            $model->inode = $map['Inode'];
        }
        if (isset($map['ATime'])) {
            $model->ATime = $map['ATime'];
        }
        if (isset($map['MTime'])) {
            $model->MTime = $map['MTime'];
        }
        if (isset($map['CTime'])) {
            $model->CTime = $map['CTime'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
