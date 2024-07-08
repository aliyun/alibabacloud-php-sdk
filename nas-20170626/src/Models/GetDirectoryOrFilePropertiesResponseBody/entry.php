<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\GetDirectoryOrFilePropertiesResponseBody;

use AlibabaCloud\Tea\Model;

class entry extends Model
{
    /**
     * @description The time when the file was queried.
     *
     * This parameter is returned only if the value of the Type parameter is File.
     * @example 2021-02-01T10:08:08Z
     *
     * @var string
     */
    public $ATime;

    /**
     * @description The time when the raw data was modified.
     *
     * This parameter is returned only if the value of the Type parameter is File.
     * @example 2021-02-11T10:08:10Z
     *
     * @var string
     */
    public $CTime;

    /**
     * @description Indicates whether the directory contains files stored in the Archive storage class.
     *
     * Valid values:
     *
     *   true: The directory contains files stored in the Archive storage class.
     *   false: The directory does not contain files stored in the Archive storage class.
     *
     * @example false
     *
     * @var bool
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
     * @example 40
     *
     * @var string
     */
    public $inode;

    /**
     * @description The time when the file was modified.
     *
     * This parameter is returned only if the value of the Type parameter is File.
     * @example 2021-02-11T10:08:08Z
     *
     * @var string
     */
    public $MTime;

    /**
     * @description The name of the file or directory.
     *
     * @example file.txt
     *
     * @var string
     */
    public $name;

    /**
     * @description The time when the last data retrieval task was run.
     *
     * This parameter is returned only if the value of the Type parameter is File.
     * @example 2021-02-11T10:08:08Z
     *
     * @var string
     */
    public $retrieveTime;

    /**
     * @description The size of the file.
     *
     * This parameter is returned only if the value of the Type parameter is File.
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
     *   standard: General-purpose NAS file system
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
     * @example File
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'ATime'                   => 'ATime',
        'CTime'                   => 'CTime',
        'hasArchiveFile'          => 'HasArchiveFile',
        'hasInfrequentAccessFile' => 'HasInfrequentAccessFile',
        'inode'                   => 'Inode',
        'MTime'                   => 'MTime',
        'name'                    => 'Name',
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
        if (null !== $this->ATime) {
            $res['ATime'] = $this->ATime;
        }
        if (null !== $this->CTime) {
            $res['CTime'] = $this->CTime;
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
        if (null !== $this->MTime) {
            $res['MTime'] = $this->MTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
     * @return entry
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
        if (isset($map['HasArchiveFile'])) {
            $model->hasArchiveFile = $map['HasArchiveFile'];
        }
        if (isset($map['HasInfrequentAccessFile'])) {
            $model->hasInfrequentAccessFile = $map['HasInfrequentAccessFile'];
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
