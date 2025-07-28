<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yunjian\V20211217\Models\GetUrgentDemandItemListResponseBody\data\records;

use AlibabaCloud\Tea\Model;

class urgentDemandEcsRequest extends Model
{
    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var int
     */
    public $commodityNum;

    /**
     * @var string
     */
    public $commodityTypeCode;

    /**
     * @var int
     */
    public $itemId;

    /**
     * @var int
     */
    public $vcpuCount;
    protected $_name = [
        'commodityCode' => 'commodityCode',
        'commodityNum' => 'commodityNum',
        'commodityTypeCode' => 'commodityTypeCode',
        'itemId' => 'itemId',
        'vcpuCount' => 'vcpuCount',
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
        if (null !== $this->vcpuCount) {
            $res['vcpuCount'] = $this->vcpuCount;
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
        if (isset($map['vcpuCount'])) {
            $model->vcpuCount = $map['vcpuCount'];
        }

        return $model;
    }
}
