<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class GetRumOcuStatisticDataShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $filterShrink;

    /**
     * @var string
     */
    public $groupShrink;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $queryType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime' => 'EndTime',
        'filterShrink' => 'Filter',
        'groupShrink' => 'Group',
        'page' => 'Page',
        'pageSize' => 'PageSize',
        'queryType' => 'QueryType',
        'regionId' => 'RegionId',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->filterShrink) {
            $res['Filter'] = $this->filterShrink;
        }

        if (null !== $this->groupShrink) {
            $res['Group'] = $this->groupShrink;
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->queryType) {
            $res['QueryType'] = $this->queryType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Filter'])) {
            $model->filterShrink = $map['Filter'];
        }

        if (isset($map['Group'])) {
            $model->groupShrink = $map['Group'];
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['QueryType'])) {
            $model->queryType = $map['QueryType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
