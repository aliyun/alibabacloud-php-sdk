<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceProvisionsResponseBody\serviceProvisions;

use AlibabaCloud\Tea\Model;

class commodityProvisions extends Model
{
    /**
     * @description Commodity Code
     *
     * @example acs_postpaid_public_cn
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description Product activation link.
     *
     * @example https://common-buy.aliyun.com/?commodityCode=acs_postpaid_public_cn
     *
     * @var string
     */
    public $enableURL;

    /**
     * @description Cloud service activation status.
     *
     * @example Disabled
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'commodityCode' => 'CommodityCode',
        'enableURL' => 'EnableURL',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->enableURL) {
            $res['EnableURL'] = $this->enableURL;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commodityProvisions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['EnableURL'])) {
            $model->enableURL = $map['EnableURL'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
