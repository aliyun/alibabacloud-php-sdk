<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yunjian\V20211217\Models\SaveUrgentDemandItemRequest;

use AlibabaCloud\Tea\Model;

class urgentDemandEcsRequest extends Model
{
    /**
     * @example ecs.sn2ne.6xlarge
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @example 2
     *
     * @var int
     */
    public $commodityNum;

    /**
     * @example ecs
     *
     * @var string
     */
    public $commodityTypeCode;

    /**
     * @example 111222
     *
     * @var int
     */
    public $itemId;

    /**
     * @example 2
     *
     * @var int
     */
    public $vCpuCount;
    protected $_name = [
        'commodityCode' => 'commodityCode',
        'commodityNum' => 'commodityNum',
        'commodityTypeCode' => 'commodityTypeCode',
        'itemId' => 'itemId',
        'vCpuCount' => 'vCpuCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityCode) {
            $res['commodityCode'] = $this->commodityCode;
        }
        if (null !== $this->commodityNum) {
            $res['commodityNum'] = $this->commodityNum;
        }
        if (null !== $this->commodityTypeCode) {
            $res['commodityTypeCode'] = $this->commodityTypeCode;
        }
        if (null !== $this->itemId) {
            $res['itemId'] = $this->itemId;
        }
        if (null !== $this->vCpuCount) {
            $res['vCpuCount'] = $this->vCpuCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return urgentDemandEcsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commodityCode'])) {
            $model->commodityCode = $map['commodityCode'];
        }
        if (isset($map['commodityNum'])) {
            $model->commodityNum = $map['commodityNum'];
        }
        if (isset($map['commodityTypeCode'])) {
            $model->commodityTypeCode = $map['commodityTypeCode'];
        }
        if (isset($map['itemId'])) {
            $model->itemId = $map['itemId'];
        }
        if (isset($map['vCpuCount'])) {
            $model->vCpuCount = $map['vCpuCount'];
        }

        return $model;
    }
}
