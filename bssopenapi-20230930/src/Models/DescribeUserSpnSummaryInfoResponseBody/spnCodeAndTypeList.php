<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeUserSpnSummaryInfoResponseBody;

use AlibabaCloud\Tea\Model;

class spnCodeAndTypeList extends Model
{
    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $spnCommodityCode;

    /**
     * @var string
     */
    public $spnType;

    /**
     * @var string
     */
    public $spnTypeName;
    protected $_name = [
        'productCode' => 'ProductCode',
        'spnCommodityCode' => 'SpnCommodityCode',
        'spnType' => 'SpnType',
        'spnTypeName' => 'SpnTypeName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->spnCommodityCode) {
            $res['SpnCommodityCode'] = $this->spnCommodityCode;
        }
        if (null !== $this->spnType) {
            $res['SpnType'] = $this->spnType;
        }
        if (null !== $this->spnTypeName) {
            $res['SpnTypeName'] = $this->spnTypeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return spnCodeAndTypeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['SpnCommodityCode'])) {
            $model->spnCommodityCode = $map['SpnCommodityCode'];
        }
        if (isset($map['SpnType'])) {
            $model->spnType = $map['SpnType'];
        }
        if (isset($map['SpnTypeName'])) {
            $model->spnTypeName = $map['SpnTypeName'];
        }

        return $model;
    }
}
