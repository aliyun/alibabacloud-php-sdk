<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models\DescribeNisInspectionReportCheckItemsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Nis\V20211216\Models\DescribeNisInspectionReportCheckItemsResponseBody\checkItemList\checkResultList;
use AlibabaCloud\SDK\Nis\V20211216\Models\DescribeNisInspectionReportCheckItemsResponseBody\checkItemList\recommendationList;

class checkItemList extends Model
{
    /**
     * @var string
     */
    public $categoryCode;

    /**
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
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'categoryCode' => 'CategoryCode',
        'checkItemCode' => 'CheckItemCode',
        'checkItemName' => 'CheckItemName',
        'checkResultList' => 'CheckResultList',
        'description' => 'Description',
        'recommendationList' => 'RecommendationList',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
        if (\is_array($this->checkResultList)) {
            Model::validateArray($this->checkResultList);
        }
        if (\is_array($this->recommendationList)) {
            Model::validateArray($this->recommendationList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->checkResultList)) {
                $res['CheckResultList'] = [];
                $n1 = 0;
                foreach ($this->checkResultList as $item1) {
                    $res['CheckResultList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->recommendationList) {
            if (\is_array($this->recommendationList)) {
                $res['RecommendationList'] = [];
                $n1 = 0;
                foreach ($this->recommendationList as $item1) {
                    $res['RecommendationList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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
                $n1 = 0;
                foreach ($map['CheckResultList'] as $item1) {
                    $model->checkResultList[$n1] = checkResultList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['RecommendationList'])) {
            if (!empty($map['RecommendationList'])) {
                $model->recommendationList = [];
                $n1 = 0;
                foreach ($map['RecommendationList'] as $item1) {
                    $model->recommendationList[$n1] = recommendationList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
