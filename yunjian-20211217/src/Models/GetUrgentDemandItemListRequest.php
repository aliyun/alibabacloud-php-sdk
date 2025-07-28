<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yunjian\V20211217\Models;

use AlibabaCloud\Tea\Model;

class GetUrgentDemandItemListRequest extends Model
{
    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @example ecs/yundisk
     *
     * @var string
     */
    public $commodityTypeCode;

    /**
     * @example 1
     *
     * @var int
     */
    public $current;

    /**
     * @var int
     */
    public $planId;

    /**
     * @var string
     */
    public $region;

    /**
     * @example 10
     *
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $zone;
    protected $_name = [
        'commodityCode' => 'commodityCode',
        'commodityTypeCode' => 'commodityTypeCode',
        'current' => 'current',
        'planId' => 'planId',
        'region' => 'region',
        'size' => 'size',
        'zone' => 'zone',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityCode) {
            $res['commodityCode'] = $this->commodityCode;
        }
        if (null !== $this->commodityTypeCode) {
            $res['commodityTypeCode'] = $this->commodityTypeCode;
        }
        if (null !== $this->current) {
            $res['current'] = $this->current;
        }
        if (null !== $this->planId) {
            $res['planId'] = $this->planId;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->zone) {
            $res['zone'] = $this->zone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUrgentDemandItemListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commodityCode'])) {
            $model->commodityCode = $map['commodityCode'];
        }
        if (isset($map['commodityTypeCode'])) {
            $model->commodityTypeCode = $map['commodityTypeCode'];
        }
        if (isset($map['current'])) {
            $model->current = $map['current'];
        }
        if (isset($map['planId'])) {
            $model->planId = $map['planId'];
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['zone'])) {
            $model->zone = $map['zone'];
        }

        return $model;
    }
}
