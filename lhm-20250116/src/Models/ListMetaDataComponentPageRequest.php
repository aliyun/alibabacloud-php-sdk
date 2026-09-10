<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models;

use AlibabaCloud\Dara\Model;

class ListMetaDataComponentPageRequest extends Model
{
    /**
     * @var string
     */
    public $categoryType;

    /**
     * @var int
     */
    public $componentType;

    /**
     * @var string
     */
    public $dsName;

    /**
     * @var int[]
     */
    public $dsStatus;

    /**
     * @var string
     */
    public $dsType;

    /**
     * @var string[]
     */
    public $dsTypeList;

    /**
     * @var string
     */
    public $groupBy;

    /**
     * @var string
     */
    public $needTotalCount;

    /**
     * @var string
     */
    public $orderBy;

    /**
     * @var string
     */
    public $orderDirection;

    /**
     * @var int
     */
    public $pageIndex;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $srcComponentId;
    protected $_name = [
        'categoryType' => 'categoryType',
        'componentType' => 'componentType',
        'dsName' => 'dsName',
        'dsStatus' => 'dsStatus',
        'dsType' => 'dsType',
        'dsTypeList' => 'dsTypeList',
        'groupBy' => 'groupBy',
        'needTotalCount' => 'needTotalCount',
        'orderBy' => 'orderBy',
        'orderDirection' => 'orderDirection',
        'pageIndex' => 'pageIndex',
        'pageSize' => 'pageSize',
        'srcComponentId' => 'srcComponentId',
    ];

    public function validate()
    {
        if (\is_array($this->dsStatus)) {
            Model::validateArray($this->dsStatus);
        }
        if (\is_array($this->dsTypeList)) {
            Model::validateArray($this->dsTypeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryType) {
            $res['categoryType'] = $this->categoryType;
        }

        if (null !== $this->componentType) {
            $res['componentType'] = $this->componentType;
        }

        if (null !== $this->dsName) {
            $res['dsName'] = $this->dsName;
        }

        if (null !== $this->dsStatus) {
            if (\is_array($this->dsStatus)) {
                $res['dsStatus'] = [];
                $n1 = 0;
                foreach ($this->dsStatus as $item1) {
                    $res['dsStatus'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dsType) {
            $res['dsType'] = $this->dsType;
        }

        if (null !== $this->dsTypeList) {
            if (\is_array($this->dsTypeList)) {
                $res['dsTypeList'] = [];
                $n1 = 0;
                foreach ($this->dsTypeList as $item1) {
                    $res['dsTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->groupBy) {
            $res['groupBy'] = $this->groupBy;
        }

        if (null !== $this->needTotalCount) {
            $res['needTotalCount'] = $this->needTotalCount;
        }

        if (null !== $this->orderBy) {
            $res['orderBy'] = $this->orderBy;
        }

        if (null !== $this->orderDirection) {
            $res['orderDirection'] = $this->orderDirection;
        }

        if (null !== $this->pageIndex) {
            $res['pageIndex'] = $this->pageIndex;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->srcComponentId) {
            $res['srcComponentId'] = $this->srcComponentId;
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
        if (isset($map['categoryType'])) {
            $model->categoryType = $map['categoryType'];
        }

        if (isset($map['componentType'])) {
            $model->componentType = $map['componentType'];
        }

        if (isset($map['dsName'])) {
            $model->dsName = $map['dsName'];
        }

        if (isset($map['dsStatus'])) {
            if (!empty($map['dsStatus'])) {
                $model->dsStatus = [];
                $n1 = 0;
                foreach ($map['dsStatus'] as $item1) {
                    $model->dsStatus[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['dsType'])) {
            $model->dsType = $map['dsType'];
        }

        if (isset($map['dsTypeList'])) {
            if (!empty($map['dsTypeList'])) {
                $model->dsTypeList = [];
                $n1 = 0;
                foreach ($map['dsTypeList'] as $item1) {
                    $model->dsTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['groupBy'])) {
            $model->groupBy = $map['groupBy'];
        }

        if (isset($map['needTotalCount'])) {
            $model->needTotalCount = $map['needTotalCount'];
        }

        if (isset($map['orderBy'])) {
            $model->orderBy = $map['orderBy'];
        }

        if (isset($map['orderDirection'])) {
            $model->orderDirection = $map['orderDirection'];
        }

        if (isset($map['pageIndex'])) {
            $model->pageIndex = $map['pageIndex'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['srcComponentId'])) {
            $model->srcComponentId = $map['srcComponentId'];
        }

        return $model;
    }
}
