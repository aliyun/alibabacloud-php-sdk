<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models\DescribeNisInspectionReportCheckItemsResponseBody;

use AlibabaCloud\SDK\Nis\V20211216\Models\DescribeNisInspectionReportCheckItemsResponseBody\checkItemList\checkResultList;
use AlibabaCloud\SDK\Nis\V20211216\Models\DescribeNisInspectionReportCheckItemsResponseBody\checkItemList\recommendationList;
use AlibabaCloud\Tea\Model;

class checkItemList extends Model
{
    /**
     * @example stability
     *
     * @var string
     */
    public $categoryCode;

    /**
     * @example item_nat_water_level_check
     *
     * @var string
     */
    public $checkItemCode;

    /**
     * @var string
     */
    public $checkItemName;

    /**
     * @var checkResultList[]
     */
    public $checkResultList;

    /**
     * @var string
     */
    public $description;

    /**
     * @var recommendationList[]
     */
    public $recommendationList;

    /**
     * @example NAT
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'categoryCode'       => 'CategoryCode',
        'checkItemCode'      => 'CheckItemCode',
        'checkItemName'      => 'CheckItemName',
        'checkResultList'    => 'CheckResultList',
        'description'        => 'Description',
        'recommendationList' => 'RecommendationList',
        'resourceType'       => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryCode) {
            $res['CategoryCode'] = $this->categoryCode;
        }
        if (null !== $this->checkItemCode) {
            $res['CheckItemCode'] = $this->checkItemCode;
        }
        if (null !== $this->checkItemName) {
            $res['CheckItemName'] = $this->checkItemName;
        }
        if (null !== $this->checkResultList) {
            $res['CheckResultList'] = [];
            if (null !== $this->checkResultList && \is_array($this->checkResultList)) {
                $n = 0;
                foreach ($this->checkResultList as $item) {
                    $res['CheckResultList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->recommendationList) {
            $res['RecommendationList'] = [];
            if (null !== $this->recommendationList && \is_array($this->recommendationList)) {
                $n = 0;
                foreach ($this->recommendationList as $item) {
                    $res['RecommendationList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return checkItemList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryCode'])) {
            $model->categoryCode = $map['CategoryCode'];
        }
        if (isset($map['CheckItemCode'])) {
            $model->checkItemCode = $map['CheckItemCode'];
        }
        if (isset($map['CheckItemName'])) {
            $model->checkItemName = $map['CheckItemName'];
        }
        if (isset($map['CheckResultList'])) {
            if (!empty($map['CheckResultList'])) {
                $model->checkResultList = [];
                $n                      = 0;
                foreach ($map['CheckResultList'] as $item) {
                    $model->checkResultList[$n++] = null !== $item ? checkResultList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RecommendationList'])) {
            if (!empty($map['RecommendationList'])) {
                $model->recommendationList = [];
                $n                         = 0;
                foreach ($map['RecommendationList'] as $item) {
                    $model->recommendationList[$n++] = null !== $item ? recommendationList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
