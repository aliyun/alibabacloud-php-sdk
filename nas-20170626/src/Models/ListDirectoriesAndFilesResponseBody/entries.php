<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\ListDirectoriesAndFilesResponseBody;

use AlibabaCloud\Tea\Model;

class entries extends Model
{
    /**
     * @description The time when the file was queried.
     *
     * This parameter is returned and valid only if the value of the Type parameter is File.
     * @example 2021-02-01T10:08:08Z
     *
     * @var string
     */
    public $atime;

    /**
     * @description The time when the raw data was modified.
     *
     * This parameter is returned and valid only if the value of the Type parameter is File.
     * @example 2021-02-11T10:08:10Z
     *
     * @var string
     */
    public $ctime;

    /**
     * @description The ID of the directory or file.
     *
     * @example 66
     *
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $hasArchiveFile;

    /**
     * @description Indicates whether the directory contains files stored in the IA storage medium.
     *
     * Valid values:
     *
     *   true: The directory contains files stored in the IA storage medium.
     *   false: The directory does not contain files stored in the IA storage medium.
     *
     * @example true
     *
     * @var bool
     */
    public $hasInfrequentAccessFile;

    /**
     * @description The file or directory inode.
     *
     * @example 66
     *
     * @var string
     */
    public $inode;

    /**
     * @description The time when the file was modified.
     *
     * This parameter is returned and valid only if the value of the Type parameter is File.
     * @example 2021-02-11T10:08:08Z
     *
     * @var string
     */
    public $mtime;

    /**
     * @description The name of the file or directory.
     *
     * @example file.txt
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the portable account. This parameter is returned and valid only if the value of the ProtocolType parameter is SMB and RAM-based access control is enabled.
     *
     * @example 37862c****
     *
     * @var string
     */
    public $owner;

    /**
     * @description The time when the last data retrieval task was run.
     *
     * This parameter is returned and valid only if the value of the Type parameter is File.
     * @example 2021-02-11T10:08:08Z
     *
     * @var string
     */
    public $retrieveTime;

    /**
     * @description The size of the file.
     *
     * This parameter is returned and valid only if the value of the Type parameter is File.
     * @example 1024
     *
     * @var int
     */
    public $size;

    /**
     * @description The storage type of the file.
     *
     * Valid values:
     *
     *   InfrequentAccess: IA storage medium
     *
     * @example InfrequentAccess
     *
     * @var string
     */
    public $storageType;

    /**
     * @description The type of the query result.
     *
     * Valid values:
     *
     *   File
     *   Directory
     *
     * @example Directory
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return entries
     */
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
