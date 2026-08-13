<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20251111\Models;

use AlibabaCloud\Dara\Model;

class ListCampaignsRequest extends Model
{
    /**
     * @var string
     */
    public $actualStartTimeFrom;

    /**
     * @var string
     */
    public $actualStartTimeTo;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

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
    public $plannedStartTimeFrom;

    /**
     * @var string
     */
    public $plannedStartTimeTo;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'actualStartTimeFrom' => 'ActualStartTimeFrom',
        'actualStartTimeTo' => 'ActualStartTimeTo',
        'instanceId' => 'InstanceId',
        'name' => 'Name',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'plannedStartTimeFrom' => 'PlannedStartTimeFrom',
        'plannedStartTimeTo' => 'PlannedStartTimeTo',
        'state' => 'State',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actualStartTimeFrom) {
            $res['ActualStartTimeFrom'] = $this->actualStartTimeFrom;
        }

        if (null !== $this->actualStartTimeTo) {
            $res['ActualStartTimeTo'] = $this->actualStartTimeTo;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->plannedStartTimeFrom) {
            $res['PlannedStartTimeFrom'] = $this->plannedStartTimeFrom;
        }

        if (null !== $this->plannedStartTimeTo) {
            $res['PlannedStartTimeTo'] = $this->plannedStartTimeTo;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (isset($map['ActualStartTimeFrom'])) {
            $model->actualStartTimeFrom = $map['ActualStartTimeFrom'];
        }

        if (isset($map['ActualStartTimeTo'])) {
            $model->actualStartTimeTo = $map['ActualStartTimeTo'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PlannedStartTimeFrom'])) {
            $model->plannedStartTimeFrom = $map['PlannedStartTimeFrom'];
        }

        if (isset($map['PlannedStartTimeTo'])) {
            $model->plannedStartTimeTo = $map['PlannedStartTimeTo'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
