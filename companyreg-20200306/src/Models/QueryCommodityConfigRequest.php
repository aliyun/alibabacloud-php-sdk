<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20200306\Models;

use AlibabaCloud\Tea\Model;

class QueryCommodityConfigRequest extends Model
{
    /**
     * @example esp.beian_assist
     *
     * @var string
     */
    public $bizType;

    /**
     * @example companyreg_icpbutler_public_cn
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @var bool
     */
    public $queryModule;
    protected $_name = [
        'bizType'       => 'BizType',
        'commodityCode' => 'CommodityCode',
        'queryModule'   => 'QueryModule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->queryModule) {
            $res['QueryModule'] = $this->queryModule;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryCommodityConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['QueryModule'])) {
            $model->queryModule = $map['QueryModule'];
        }

        return $model;
    }
}
