<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Tea\Model;

class AlignStoragePrimaryAzoneRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $storageInstanceName;

    /**
     * @var string
     */
    public $switchTime;

    /**
     * @var string
     */
    public $switchTimeMode;
    protected $_name = [
        'DBInstanceName'      => 'DBInstanceName',
        'regionId'            => 'RegionId',
        'storageInstanceName' => 'StorageInstanceName',
        'switchTime'          => 'SwitchTime',
        'switchTimeMode'      => 'SwitchTimeMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->storageInstanceName) {
            $res['StorageInstanceName'] = $this->storageInstanceName;
        }
        if (null !== $this->switchTime) {
            $res['SwitchTime'] = $this->switchTime;
        }
        if (null !== $this->switchTimeMode) {
            $res['SwitchTimeMode'] = $this->switchTimeMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AlignStoragePrimaryAzoneRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StorageInstanceName'])) {
            $model->storageInstanceName = $map['StorageInstanceName'];
        }
        if (isset($map['SwitchTime'])) {
            $model->switchTime = $map['SwitchTime'];
        }
        if (isset($map['SwitchTimeMode'])) {
            $model->switchTimeMode = $map['SwitchTimeMode'];
        }

        return $model;
    }
}
