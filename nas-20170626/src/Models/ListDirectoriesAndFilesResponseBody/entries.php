<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\ListDirectoriesAndFilesResponseBody;

use AlibabaCloud\Tea\Model;

class entries extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var bool
     */
    public $hasInfrequentAccessFile;

    /**
     * @var string
     */
    public $ctime;

    /**
     * @var string
     */
    public $mtime;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var string
     */
    public $atime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $retrieveTime;

    /**
     * @var string
     */
    public $inode;

    /**
     * @var string
     */
    public $fileId;
    protected $_name = [
        'type'                    => 'Type',
        'hasInfrequentAccessFile' => 'HasInfrequentAccessFile',
        'ctime'                   => 'Ctime',
        'mtime'                   => 'Mtime',
        'size'                    => 'Size',
        'storageType'             => 'StorageType',
        'atime'                   => 'Atime',
        'name'                    => 'Name',
        'retrieveTime'            => 'RetrieveTime',
        'inode'                   => 'Inode',
        'fileId'                  => 'FileId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->hasInfrequentAccessFile) {
            $res['HasInfrequentAccessFile'] = $this->hasInfrequentAccessFile;
        }
        if (null !== $this->ctime) {
            $res['Ctime'] = $this->ctime;
        }
        if (null !== $this->mtime) {
            $res['Mtime'] = $this->mtime;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->atime) {
            $res['Atime'] = $this->atime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->retrieveTime) {
            $res['RetrieveTime'] = $this->retrieveTime;
        }
        if (null !== $this->inode) {
            $res['Inode'] = $this->inode;
        }
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['HasInfrequentAccessFile'])) {
            $model->hasInfrequentAccessFile = $map['HasInfrequentAccessFile'];
        }
        if (isset($map['Ctime'])) {
            $model->ctime = $map['Ctime'];
        }
        if (isset($map['Mtime'])) {
            $model->mtime = $map['Mtime'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['Atime'])) {
            $model->atime = $map['Atime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RetrieveTime'])) {
            $model->retrieveTime = $map['RetrieveTime'];
        }
        if (isset($map['Inode'])) {
            $model->inode = $map['Inode'];
        }
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        return $model;
    }
}
