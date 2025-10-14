<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Dara\Model;

class CreateStoragePoolRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $storagePoolDNList;

    /**
     * @var string
     */
    public $storagePoolName;
    protected $_name = [
        'DBInstanceName' => 'DBInstanceName',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'storagePoolDNList' => 'StoragePoolDNList',
        'storagePoolName' => 'StoragePoolName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->storagePoolDNList) {
            $res['StoragePoolDNList'] = $this->storagePoolDNList;
        }

        if (null !== $this->storagePoolName) {
            $res['StoragePoolName'] = $this->storagePoolName;
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
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['StoragePoolDNList'])) {
            $model->storagePoolDNList = $map['StoragePoolDNList'];
        }

        if (isset($map['StoragePoolName'])) {
            $model->storagePoolName = $map['StoragePoolName'];
        }

        return $model;
    }
}
