<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class QueryAuthUserConnectDurationListRequest extends Model
{
    /**
     * @var string
     */
    public $comparisonOperator;

    /**
     * @var string
     */
    public $dataDate;

    /**
     * @var bool
     */
    public $isAdUser;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $statisticType;

    /**
     * @var int
     */
    public $threshold;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var bool
     */
    public $withDetail;
    protected $_name = [
        'comparisonOperator' => 'ComparisonOperator',
        'dataDate' => 'DataDate',
        'isAdUser' => 'IsAdUser',
        'nextToken' => 'NextToken',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'statisticType' => 'StatisticType',
        'threshold' => 'Threshold',
        'userName' => 'UserName',
        'withDetail' => 'WithDetail',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comparisonOperator) {
            $res['ComparisonOperator'] = $this->comparisonOperator;
        }

        if (null !== $this->dataDate) {
            $res['DataDate'] = $this->dataDate;
        }

        if (null !== $this->isAdUser) {
            $res['IsAdUser'] = $this->isAdUser;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->statisticType) {
            $res['StatisticType'] = $this->statisticType;
        }

        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        if (null !== $this->withDetail) {
            $res['WithDetail'] = $this->withDetail;
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
        if (isset($map['ComparisonOperator'])) {
            $model->comparisonOperator = $map['ComparisonOperator'];
        }

        if (isset($map['DataDate'])) {
            $model->dataDate = $map['DataDate'];
        }

        if (isset($map['IsAdUser'])) {
            $model->isAdUser = $map['IsAdUser'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['StatisticType'])) {
            $model->statisticType = $map['StatisticType'];
        }

        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        if (isset($map['WithDetail'])) {
            $model->withDetail = $map['WithDetail'];
        }

        return $model;
    }
}
