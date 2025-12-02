<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;

class GetJobNameListRequest extends Model
{
    /**
     * @var string
     */
    public $endDate;

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
    protected $_name = [
        'endDate' => 'EndDate',
        'query' => 'Query',
        'regionId' => 'RegionId',
        'sort' => 'Sort',
        'startDate' => 'StartDate',
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
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
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

        return $model;
    }
}
