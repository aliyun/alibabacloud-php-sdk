<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yunjian\V20211217\Models\GetUrgentDemandItemListResponseBody\data\records;

use AlibabaCloud\Dara\Model;

class urgentDemandEbsRequest extends Model
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
    public $dataDiskSize;

    /**
     * @var int
     */
    public $itemId;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
