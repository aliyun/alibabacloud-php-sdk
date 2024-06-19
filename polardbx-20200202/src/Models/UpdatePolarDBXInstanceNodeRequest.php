<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Tea\Model;

class UpdatePolarDBXInstanceNodeRequest extends Model
{
    /**
     * @var string
     */
    public $addDNSpec;

    /**
     * @example 2
     *
     * @var string
     */
    public $CNNodeCount;

    /**
     * @example FEA5DC20-6D8A-5979-97AA-FC57546ADC20
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description This parameter is required.
     *
     * @example pxc-hzjasdyuoo
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @example 2
     *
     * @var string
     */
    public $DNNodeCount;

    /**
     * @example 3
     *
     * @var string
     */
    public $dbInstanceNodeCount;

    /**
     * @var string
     */
    public $deleteDNIds;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $storagePoolName;
    protected $_name = [
        'addDNSpec'           => 'AddDNSpec',
        'CNNodeCount'         => 'CNNodeCount',
        'clientToken'         => 'ClientToken',
        'DBInstanceName'      => 'DBInstanceName',
        'DNNodeCount'         => 'DNNodeCount',
        'dbInstanceNodeCount' => 'DbInstanceNodeCount',
        'deleteDNIds'         => 'DeleteDNIds',
        'regionId'            => 'RegionId',
        'storagePoolName'     => 'StoragePoolName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addDNSpec) {
            $res['AddDNSpec'] = $this->addDNSpec;
        }
        if (null !== $this->CNNodeCount) {
            $res['CNNodeCount'] = $this->CNNodeCount;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->DNNodeCount) {
            $res['DNNodeCount'] = $this->DNNodeCount;
        }
        if (null !== $this->dbInstanceNodeCount) {
            $res['DbInstanceNodeCount'] = $this->dbInstanceNodeCount;
        }
        if (null !== $this->deleteDNIds) {
            $res['DeleteDNIds'] = $this->deleteDNIds;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->storagePoolName) {
            $res['StoragePoolName'] = $this->storagePoolName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePolarDBXInstanceNodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddDNSpec'])) {
            $model->addDNSpec = $map['AddDNSpec'];
        }
        if (isset($map['CNNodeCount'])) {
            $model->CNNodeCount = $map['CNNodeCount'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['DNNodeCount'])) {
            $model->DNNodeCount = $map['DNNodeCount'];
        }
        if (isset($map['DbInstanceNodeCount'])) {
            $model->dbInstanceNodeCount = $map['DbInstanceNodeCount'];
        }
        if (isset($map['DeleteDNIds'])) {
            $model->deleteDNIds = $map['DeleteDNIds'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StoragePoolName'])) {
            $model->storagePoolName = $map['StoragePoolName'];
        }

        return $model;
    }
}
