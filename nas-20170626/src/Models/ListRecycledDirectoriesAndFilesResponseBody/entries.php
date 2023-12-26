<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\ListRecycledDirectoriesAndFilesResponseBody;

use AlibabaCloud\Tea\Model;

class entries extends Model
{
    /**
     * @description The time when the file or directory was last accessed.
     *
     * @example 2019-10-30T10:08:08Z
     *
     * @var string
     */
    public $ATime;

    /**
     * @description The time when the metadata was last modified.
     *
     * @example 2019-10-30T10:08:08Z
     *
     * @var string
     */
    public $CTime;

    /**
     * @description The time when the file or directory was deleted.
     *
     * @example 2021-05-30T10:08:08Z
     *
     * @var string
     */
    public $deleteTime;

    /**
     * @description The IDs of the files or directories.
     *
     * @example 04***08
     *
     * @var string
     */
    public $fileId;

    /**
     * @description The inode of the file or directory.
     *
     * @example 04***08
     *
     * @var string
     */
    public $inode;

    /**
     * @description The time when the file or directory was last modified.
     *
     * @example 2019-10-30T10:08:08Z
     *
     * @var string
     */
    public $MTime;

    /**
     * @description The name of the file or directory before it was deleted.
     *
     * @example test001
     *
     * @var string
     */
    public $name;

    /**
     * @description The size of the file. Unit: bytes.
     *
     * The value 0 is returned for this parameter if Directory is returned for the Type parameter.
     * @example 1073741824
     *
     * @var int
     */
    public $size;

    /**
     * @description The type of the returned object. Valid values:
     *
     *   File
     *   Directory
     *
     * @example File
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'ATime'      => 'ATime',
        'CTime'      => 'CTime',
        'deleteTime' => 'DeleteTime',
        'fileId'     => 'FileId',
        'inode'      => 'Inode',
        'MTime'      => 'MTime',
        'name'       => 'Name',
        'size'       => 'Size',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return entries
     */
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
