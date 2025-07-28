<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yunjian\V20211217\Models\GetUrgentDemandItemListResponseBody\data\records;

use AlibabaCloud\Tea\Model;

class urgentDemandEbsRequest extends Model
{
    /**
     * @example cloud_essd
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @example 1
     *
     * @var int
     */
    public $commodityNum;

    /**
     * @example yundisk
     *
     * @var string
     */
    public $commodityTypeCode;

    /**
     * @example 1
     *
     * @var int
     */
    public $dataDiskSize;

    /**
     * @example 111222
     *
     * @var int
     */
    public $itemId;

    /**
     * @example 1
     *
     * @var int
     */
    public $performanceLevel;
    protected $_name = [
        'commodityCode' => 'commodityCode',
        'commodityNum' => 'commodityNum',
        'commodityTypeCode' => 'commodityTypeCode',
        'dataDiskSize' => 'dataDiskSize',
        'itemId' => 'itemId',
        'performanceLevel' => 'performanceLevel',
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
        if (null !== $this->dataDiskSize) {
            $res['dataDiskSize'] = $this->dataDiskSize;
        }
        if (null !== $this->itemId) {
            $res['itemId'] = $this->itemId;
        }
        if (null !== $this->performanceLevel) {
            $res['performanceLevel'] = $this->performanceLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return urgentDemandEbsRequest
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
        if (isset($map['dataDiskSize'])) {
            $model->dataDiskSize = $map['dataDiskSize'];
        }
        if (isset($map['itemId'])) {
            $model->itemId = $map['itemId'];
        }
        if (isset($map['performanceLevel'])) {
            $model->performanceLevel = $map['performanceLevel'];
        }

        return $model;
    }
}
