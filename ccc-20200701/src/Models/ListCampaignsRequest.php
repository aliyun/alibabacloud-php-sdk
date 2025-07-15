<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class ListCampaignsRequest extends Model
{
    /**
     * @example 2021-10-14 20:59:59
     *
     * @var string
     */
    public $actualStartTimeFrom;

    /**
     * @example 2021-10-14 20:59:59
     *
     * @var string
     */
    public $actualStartTimeTo;

    /**
     * @description This parameter is required.
     *
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example test-campaign
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 2021-10-14 00:00:00
     *
     * @var string
     */
    public $planedStartTimeFrom;

    /**
     * @example 2021-10-14 20:59:59
     *
     * @var string
     */
    public $planedStartTimeTo;

    /**
     * @example skillgroup@ccc-test
     *
     * @var string
     */
    public $queueId;

    /**
     * @example Draft
     *
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
        'planedStartTimeFrom' => 'PlanedStartTimeFrom',
        'planedStartTimeTo' => 'PlanedStartTimeTo',
        'queueId' => 'QueueId',
        'state' => 'State',
    ];

    public function validate() {}

    public function toMap()
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
        if (null !== $this->planedStartTimeFrom) {
            $res['PlanedStartTimeFrom'] = $this->planedStartTimeFrom;
        }
        if (null !== $this->planedStartTimeTo) {
            $res['PlanedStartTimeTo'] = $this->planedStartTimeTo;
        }
        if (null !== $this->queueId) {
            $res['QueueId'] = $this->queueId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCampaignsRequest
     */
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
        if (isset($map['PlanedStartTimeFrom'])) {
            $model->planedStartTimeFrom = $map['PlanedStartTimeFrom'];
        }
        if (isset($map['PlanedStartTimeTo'])) {
            $model->planedStartTimeTo = $map['PlanedStartTimeTo'];
        }
        if (isset($map['QueueId'])) {
            $model->queueId = $map['QueueId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
