<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;

class ListOssCheckResultRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var int
     */
    public $finishNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $sort;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'endDate' => 'EndDate',
        'finishNum' => 'FinishNum',
        'pageSize' => 'PageSize',
        'query' => 'Query',
        'regionId' => 'RegionId',
        'sort' => 'Sort',
        'startDate' => 'StartDate',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->sort)) {
            Model::validateArray($this->sort);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->finishNum) {
            $res['FinishNum'] = $this->finishNum;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->sort) {
            if (\is_array($this->sort)) {
                $res['Sort'] = [];
                foreach ($this->sort as $key1 => $value1) {
                    $res['Sort'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['FinishNum'])) {
            $model->finishNum = $map['FinishNum'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Sort'])) {
            if (!empty($map['Sort'])) {
                $model->sort = [];
                foreach ($map['Sort'] as $key1 => $value1) {
                    $model->sort[$key1] = $value1;
                }
            }
        }

        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
