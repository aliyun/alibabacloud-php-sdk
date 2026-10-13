<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models;

use AlibabaCloud\Dara\Model;

class ListMetaProfilingSkillJobPageRequest extends Model
{
    /**
     * @var int[]
     */
    public $componentIds;

    /**
     * @var int
     */
    public $dsId;

    /**
     * @var string
     */
    public $dsName;

    /**
     * @var string
     */
    public $dsType;

    /**
     * @var string
     */
    public $groupBy;

    /**
     * @var bool
     */
    public $isDisplaySystemTask;

    /**
     * @var int
     */
    public $jobId;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var bool
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
    protected $_name = [
        'componentIds' => 'componentIds',
        'dsId' => 'dsId',
        'dsName' => 'dsName',
        'dsType' => 'dsType',
        'groupBy' => 'groupBy',
        'isDisplaySystemTask' => 'isDisplaySystemTask',
        'jobId' => 'jobId',
        'jobName' => 'jobName',
        'needTotalCount' => 'needTotalCount',
        'orderBy' => 'orderBy',
        'orderDirection' => 'orderDirection',
        'pageIndex' => 'pageIndex',
        'pageSize' => 'pageSize',
    ];

    public function validate()
    {
        if (\is_array($this->componentIds)) {
            Model::validateArray($this->componentIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentIds) {
            if (\is_array($this->componentIds)) {
                $res['componentIds'] = [];
                $n1 = 0;
                foreach ($this->componentIds as $item1) {
                    $res['componentIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dsId) {
            $res['dsId'] = $this->dsId;
        }

        if (null !== $this->dsName) {
            $res['dsName'] = $this->dsName;
        }

        if (null !== $this->dsType) {
            $res['dsType'] = $this->dsType;
        }

        if (null !== $this->groupBy) {
            $res['groupBy'] = $this->groupBy;
        }

        if (null !== $this->isDisplaySystemTask) {
            $res['isDisplaySystemTask'] = $this->isDisplaySystemTask;
        }

        if (null !== $this->jobId) {
            $res['jobId'] = $this->jobId;
        }

        if (null !== $this->jobName) {
            $res['jobName'] = $this->jobName;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['componentIds'])) {
            if (!empty($map['componentIds'])) {
                $model->componentIds = [];
                $n1 = 0;
                foreach ($map['componentIds'] as $item1) {
                    $model->componentIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['dsId'])) {
            $model->dsId = $map['dsId'];
        }

        if (isset($map['dsName'])) {
            $model->dsName = $map['dsName'];
        }

        if (isset($map['dsType'])) {
            $model->dsType = $map['dsType'];
        }

        if (isset($map['groupBy'])) {
            $model->groupBy = $map['groupBy'];
        }

        if (isset($map['isDisplaySystemTask'])) {
            $model->isDisplaySystemTask = $map['isDisplaySystemTask'];
        }

        if (isset($map['jobId'])) {
            $model->jobId = $map['jobId'];
        }

        if (isset($map['jobName'])) {
            $model->jobName = $map['jobName'];
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

        return $model;
    }
}
