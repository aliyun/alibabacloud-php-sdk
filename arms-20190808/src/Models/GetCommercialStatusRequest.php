<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GetCommercialStatusRequest extends Model
{
    /**
     * @description The product code.
     *
     *   arms_app_post
     *   arms_web_post
     *   arms_promethues_public_cn
     *   prometheus_pay_public_cn
     *   xtrace
     *   arms_serverless_public_cn
     *   arms_rumserverless_public_cn
     *   prometheus_serverless_public_cn
     *   xtrace_serverless_public_cn
     *
     * This parameter is required.
     * @example arms_app_post
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'commodityCode' => 'CommodityCode',
        'regionId'      => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCommercialStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
