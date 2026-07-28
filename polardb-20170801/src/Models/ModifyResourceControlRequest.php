<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class ModifyResourceControlRequest extends Model
{
    /**
     * @var int
     */
    public $cpuCount;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var int
     */
    public $maxCpu;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceControlName;
    protected $_name = [
        'cpuCount' => 'CpuCount',
        'DBClusterId' => 'DBClusterId',
        'maxCpu' => 'MaxCpu',
        'regionId' => 'RegionId',
        'resourceControlName' => 'ResourceControlName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpuCount) {
            $res['CpuCount'] = $this->cpuCount;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->maxCpu) {
            $res['MaxCpu'] = $this->maxCpu;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceControlName) {
            $res['ResourceControlName'] = $this->resourceControlName;
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
        if (isset($map['CpuCount'])) {
            $model->cpuCount = $map['CpuCount'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['MaxCpu'])) {
            $model->maxCpu = $map['MaxCpu'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceControlName'])) {
            $model->resourceControlName = $map['ResourceControlName'];
        }

        return $model;
    }
}
