<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Dara\Model;

class UpdatePolarDBXInstanceNodeRequest extends Model
{
    /**
     * @var string
     */
    public $addDNSpec;

    /**
     * @var int
     */
    public $CNNodeCount;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var int
     */
    public $DNNodeCount;

    /**
     * @var int
     */
    public $dbInstanceNodeCount;

    /**
     * @var string
     */
    public $deleteDNIds;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $storagePoolName;
    protected $_name = [
        'addDNSpec' => 'AddDNSpec',
        'CNNodeCount' => 'CNNodeCount',
        'clientToken' => 'ClientToken',
        'DBInstanceName' => 'DBInstanceName',
        'DNNodeCount' => 'DNNodeCount',
        'dbInstanceNodeCount' => 'DbInstanceNodeCount',
        'deleteDNIds' => 'DeleteDNIds',
        'regionId' => 'RegionId',
        'storagePoolName' => 'StoragePoolName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
