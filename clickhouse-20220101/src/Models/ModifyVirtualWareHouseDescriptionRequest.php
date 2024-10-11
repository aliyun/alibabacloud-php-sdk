<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20220101\Models;

use AlibabaCloud\Tea\Model;

class ModifyVirtualWareHouseDescriptionRequest extends Model
{
    /**
     * @example cc-bp108z124a8o7****
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
     * @example test
     *
     * @var string
     */
    public $virtualWareHouseDescription;

    /**
     * @description This parameter is required.
     *
     * @example vw-bp1w2728d535t****
     *
     * @var string
     */
    public $virtualWareHouseId;
    protected $_name = [
        'DBClusterId'                 => 'DBClusterId',
        'regionId'                    => 'RegionId',
        'virtualWareHouseDescription' => 'VirtualWareHouseDescription',
        'virtualWareHouseId'          => 'VirtualWareHouseId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->virtualWareHouseDescription) {
            $res['VirtualWareHouseDescription'] = $this->virtualWareHouseDescription;
        }
        if (null !== $this->virtualWareHouseId) {
            $res['VirtualWareHouseId'] = $this->virtualWareHouseId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyVirtualWareHouseDescriptionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VirtualWareHouseDescription'])) {
            $model->virtualWareHouseDescription = $map['VirtualWareHouseDescription'];
        }
        if (isset($map['VirtualWareHouseId'])) {
            $model->virtualWareHouseId = $map['VirtualWareHouseId'];
        }

        return $model;
    }
}
