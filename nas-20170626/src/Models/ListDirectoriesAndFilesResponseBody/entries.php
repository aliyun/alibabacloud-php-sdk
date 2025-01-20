<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\ListDirectoriesAndFilesResponseBody;

use AlibabaCloud\Dara\Model;

class entries extends Model
{
    /**
     * @var string
     */
    public $atime;
    /**
     * @var string
     */
    public $ctime;
    /**
     * @var string
     */
    public $fileId;
    /**
     * @var string
     */
    public $hasArchiveFile;
    /**
     * @var bool
     */
    public $hasInfrequentAccessFile;
    /**
     * @var string
     */
    public $inode;
    /**
     * @var string
     */
    public $mtime;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $owner;
    /**
     * @var string
     */
    public $retrieveTime;
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
    public $type;
    protected $_name = [
        'atime'                   => 'Atime',
        'ctime'                   => 'Ctime',
        'fileId'                  => 'FileId',
        'hasArchiveFile'          => 'HasArchiveFile',
        'hasInfrequentAccessFile' => 'HasInfrequentAccessFile',
        'inode'                   => 'Inode',
        'mtime'                   => 'Mtime',
        'name'                    => 'Name',
        'owner'                   => 'Owner',
        'retrieveTime'            => 'RetrieveTime',
        'size'                    => 'Size',
        'storageType'             => 'StorageType',
        'type'                    => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->atime) {
            $res['Atime'] = $this->atime;
        }

        if (null !== $this->ctime) {
            $res['Ctime'] = $this->ctime;
        }

        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        if (null !== $this->hasArchiveFile) {
            $res['HasArchiveFile'] = $this->hasArchiveFile;
        }

        if (null !== $this->hasInfrequentAccessFile) {
            $res['HasInfrequentAccessFile'] = $this->hasInfrequentAccessFile;
        }

        if (null !== $this->inode) {
            $res['Inode'] = $this->inode;
        }

        if (null !== $this->mtime) {
            $res['Mtime'] = $this->mtime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->retrieveTime) {
            $res['RetrieveTime'] = $this->retrieveTime;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
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
        if (isset($map['Atime'])) {
            $model->atime = $map['Atime'];
        }

        if (isset($map['Ctime'])) {
            $model->ctime = $map['Ctime'];
        }

        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        if (isset($map['HasArchiveFile'])) {
            $model->hasArchiveFile = $map['HasArchiveFile'];
        }

        if (isset($map['HasInfrequentAccessFile'])) {
            $model->hasInfrequentAccessFile = $map['HasInfrequentAccessFile'];
        }

        if (isset($map['Inode'])) {
            $model->inode = $map['Inode'];
        }

        if (isset($map['Mtime'])) {
            $model->mtime = $map['Mtime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['RetrieveTime'])) {
            $model->retrieveTime = $map['RetrieveTime'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
