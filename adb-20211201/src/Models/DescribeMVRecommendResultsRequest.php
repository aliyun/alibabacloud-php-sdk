<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class DescribeMVRecommendResultsRequest extends Model
{
    /**
     * @var string
     */
    public $actionInner;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $from;

    /**
     * @var string
     */
    public $orderBy;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $subQueryId;

    /**
     * @var int
     */
    public $subtaskId;

    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'actionInner' => 'ActionInner',
        'DBClusterId' => 'DBClusterId',
        'from' => 'From',
        'orderBy' => 'OrderBy',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'subQueryId' => 'SubQueryId',
        'subtaskId' => 'SubtaskId',
        'taskName' => 'TaskName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionInner) {
            $res['ActionInner'] = $this->actionInner;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->from) {
            $res['From'] = $this->from;
        }

        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->subQueryId) {
            $res['SubQueryId'] = $this->subQueryId;
        }

        if (null !== $this->subtaskId) {
            $res['SubtaskId'] = $this->subtaskId;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
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
        if (isset($map['ActionInner'])) {
            $model->actionInner = $map['ActionInner'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['From'])) {
            $model->from = $map['From'];
        }

        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SubQueryId'])) {
            $model->subQueryId = $map['SubQueryId'];
        }

        if (isset($map['SubtaskId'])) {
            $model->subtaskId = $map['SubtaskId'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
