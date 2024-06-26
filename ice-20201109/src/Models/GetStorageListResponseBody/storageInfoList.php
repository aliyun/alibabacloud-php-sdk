<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetStorageListResponseBody;

use AlibabaCloud\Tea\Model;

class storageInfoList extends Model
{
    /**
     * @example app-****
     *
     * @var string
     */
    public $appId;

    /**
     * @example 2024-06-06T01:55:07Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example true
     *
     * @var bool
     */
    public $defaultStorage;

    /**
     * @example false
     *
     * @var bool
     */
    public $editingTempFileStorage;

    /**
     * @example 2024-06-06T03:07:07Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @example your-path/
     *
     * @var string
     */
    public $path;

    /**
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @example your-bucket
     *
     * @var string
     */
    public $storageLocation;

    /**
     * @example vod_oss_bucket
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return storageInfoList
     */
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
