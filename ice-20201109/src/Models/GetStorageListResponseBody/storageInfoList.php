<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetStorageListResponseBody;

use AlibabaCloud\Dara\Model;

class storageInfoList extends Model
{
    /**
     * @var string
     */
    public $appId;
    /**
     * @var string
     */
    public $creationTime;
    /**
     * @var bool
     */
    public $defaultStorage;
    /**
     * @var bool
     */
    public $editingTempFileStorage;
    /**
     * @var string
     */
    public $modifiedTime;
    /**
     * @var string
     */
    public $path;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $storageLocation;
    /**
     * @var string
     */
    public $storageType;
    protected $_name = [
        'appId'                  => 'AppId',
        'creationTime'           => 'CreationTime',
        'defaultStorage'         => 'DefaultStorage',
        'editingTempFileStorage' => 'EditingTempFileStorage',
        'modifiedTime'           => 'ModifiedTime',
        'path'                   => 'Path',
        'status'                 => 'Status',
        'storageLocation'        => 'StorageLocation',
        'storageType'            => 'StorageType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->defaultStorage) {
            $res['DefaultStorage'] = $this->defaultStorage;
        }

        if (null !== $this->editingTempFileStorage) {
            $res['EditingTempFileStorage'] = $this->editingTempFileStorage;
        }

        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->storageLocation) {
            $res['StorageLocation'] = $this->storageLocation;
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['DefaultStorage'])) {
            $model->defaultStorage = $map['DefaultStorage'];
        }

        if (isset($map['EditingTempFileStorage'])) {
            $model->editingTempFileStorage = $map['EditingTempFileStorage'];
        }

        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StorageLocation'])) {
            $model->storageLocation = $map['StorageLocation'];
        }

        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        return $model;
    }
}
