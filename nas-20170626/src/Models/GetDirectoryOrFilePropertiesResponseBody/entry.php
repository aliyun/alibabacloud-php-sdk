<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\GetDirectoryOrFilePropertiesResponseBody;

use AlibabaCloud\Tea\Model;

class entry extends Model
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
    public $MTime;

    /**
     * @var string
     */
    public $ATime;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $CTime;

    /**
     * @var string
     */
    public $storageType;

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
    protected $_name = [
        'type'                    => 'Type',
        'hasInfrequentAccessFile' => 'HasInfrequentAccessFile',
        'MTime'                   => 'MTime',
        'ATime'                   => 'ATime',
        'size'                    => 'Size',
        'CTime'                   => 'CTime',
        'storageType'             => 'StorageType',
        'name'                    => 'Name',
        'retrieveTime'            => 'RetrieveTime',
        'inode'                   => 'Inode',
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
        if (null !== $this->MTime) {
            $res['MTime'] = $this->MTime;
        }
        if (null !== $this->ATime) {
            $res['ATime'] = $this->ATime;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->CTime) {
            $res['CTime'] = $this->CTime;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['HasInfrequentAccessFile'])) {
            $model->hasInfrequentAccessFile = $map['HasInfrequentAccessFile'];
        }
        if (isset($map['MTime'])) {
            $model->MTime = $map['MTime'];
        }
        if (isset($map['ATime'])) {
            $model->ATime = $map['ATime'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['CTime'])) {
            $model->CTime = $map['CTime'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
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

        return $model;
    }
}
