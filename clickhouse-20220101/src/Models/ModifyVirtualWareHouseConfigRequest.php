<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20220101\Models;

use AlibabaCloud\SDK\Clickhouse\V20220101\Models\ModifyVirtualWareHouseConfigRequest\configChanges;
use AlibabaCloud\Tea\Model;

class ModifyVirtualWareHouseConfigRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var configChanges[]
     */
    public $configChanges;

    /**
     * @example cc-bp1qx68m06981****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description This parameter is required.
     *
     * @example vw-uf62965t8lt50****
     *
     * @var string
     */
    public $virtualWareHouseId;
    protected $_name = [
        'configChanges'      => 'ConfigChanges',
        'DBClusterId'        => 'DBClusterId',
        'regionId'           => 'RegionId',
        'virtualWareHouseId' => 'VirtualWareHouseId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configChanges) {
            $res['ConfigChanges'] = [];
            if (null !== $this->configChanges && \is_array($this->configChanges)) {
                $n = 0;
                foreach ($this->configChanges as $item) {
                    $res['ConfigChanges'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->virtualWareHouseId) {
            $res['VirtualWareHouseId'] = $this->virtualWareHouseId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyVirtualWareHouseConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigChanges'])) {
            if (!empty($map['ConfigChanges'])) {
                $model->configChanges = [];
                $n                    = 0;
                foreach ($map['ConfigChanges'] as $item) {
                    $model->configChanges[$n++] = null !== $item ? configChanges::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VirtualWareHouseId'])) {
            $model->virtualWareHouseId = $map['VirtualWareHouseId'];
        }

        return $model;
    }
}
