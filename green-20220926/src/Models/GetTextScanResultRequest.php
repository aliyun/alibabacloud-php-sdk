<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;

class GetTextScanResultRequest extends Model
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
    public $pageSize;

    /**
     * @var string[]
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
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'endDate' => 'EndDate',
        'pageSize' => 'PageSize',
        'query' => 'Query',
        'regionId' => 'RegionId',
        'sort' => 'Sort',
        'startDate' => 'StartDate',
    ];

    public function validate()
    {
        if (\is_array($this->query)) {
            Model::validateArray($this->query);
        }
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

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->query) {
            if (\is_array($this->query)) {
                $res['Query'] = [];
                foreach ($this->query as $key1 => $value1) {
                    $res['Query'][$key1] = $value1;
                }
            }
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

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Query'])) {
            if (!empty($map['Query'])) {
                $model->query = [];
                foreach ($map['Query'] as $key1 => $value1) {
                    $model->query[$key1] = $value1;
                }
            }
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

        return $model;
    }
}
