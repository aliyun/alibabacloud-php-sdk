<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\GetDirectoryOrFilePropertiesResponseBody;

use AlibabaCloud\Dara\Model;

class entry extends Model
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
     * @var bool
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
    public $MTime;

    /**
     * @var string
     */
    public $name;

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
        'ATime' => 'ATime',
        'CTime' => 'CTime',
        'hasArchiveFile' => 'HasArchiveFile',
        'hasInfrequentAccessFile' => 'HasInfrequentAccessFile',
        'inode' => 'Inode',
        'MTime' => 'MTime',
        'name' => 'Name',
        'retrieveTime' => 'RetrieveTime',
        'size' => 'Size',
        'storageType' => 'StorageType',
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
