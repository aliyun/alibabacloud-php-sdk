<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;

class GetStockOssCheckTasksListRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var bool
     */
    public $isInc;

    /**
     * @var int
     */
    public $mediaType;

    /**
     * @var int
     */
    public $pageSize;

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
    public $startTime;

    /**
     * @var string
     */
    public $taskType;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'endTime' => 'EndTime',
        'isInc' => 'IsInc',
        'mediaType' => 'MediaType',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'sort' => 'Sort',
        'startTime' => 'StartTime',
        'taskType' => 'TaskType',
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

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->isInc) {
            $res['IsInc'] = $this->isInc;
        }

        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
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

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['IsInc'])) {
            $model->isInc = $map['IsInc'];
        }

        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
