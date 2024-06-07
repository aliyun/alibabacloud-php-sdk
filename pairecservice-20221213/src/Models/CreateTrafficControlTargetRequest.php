<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class CreateTrafficControlTargetRequest extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $event;

    /**
     * @var string
     */
    public $itemConditionArray;

    /**
     * @var string
     */
    public $itemConditionExpress;

    /**
     * @var string
     */
    public $itemConditionType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $newProductRegulation;

    /**
     * @var string
     */
    public $recallName;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $statisPeriod;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $toleranceValue;

    /**
     * @var string
     */
    public $trafficControlTaskId;

    /**
     * @var float
     */
    public $value;
    protected $_name = [
        'endTime'              => 'EndTime',
        'event'                => 'Event',
        'itemConditionArray'   => 'ItemConditionArray',
        'itemConditionExpress' => 'ItemConditionExpress',
        'itemConditionType'    => 'ItemConditionType',
        'name'                 => 'Name',
        'newProductRegulation' => 'NewProductRegulation',
        'recallName'           => 'RecallName',
        'startTime'            => 'StartTime',
        'statisPeriod'         => 'StatisPeriod',
        'status'               => 'Status',
        'toleranceValue'       => 'ToleranceValue',
        'trafficControlTaskId' => 'TrafficControlTaskId',
        'value'                => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->event) {
            $res['Event'] = $this->event;
        }
        if (null !== $this->itemConditionArray) {
            $res['ItemConditionArray'] = $this->itemConditionArray;
        }
        if (null !== $this->itemConditionExpress) {
            $res['ItemConditionExpress'] = $this->itemConditionExpress;
        }
        if (null !== $this->itemConditionType) {
            $res['ItemConditionType'] = $this->itemConditionType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->newProductRegulation) {
            $res['NewProductRegulation'] = $this->newProductRegulation;
        }
        if (null !== $this->recallName) {
            $res['RecallName'] = $this->recallName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->statisPeriod) {
            $res['StatisPeriod'] = $this->statisPeriod;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->toleranceValue) {
            $res['ToleranceValue'] = $this->toleranceValue;
        }
        if (null !== $this->trafficControlTaskId) {
            $res['TrafficControlTaskId'] = $this->trafficControlTaskId;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTrafficControlTargetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Event'])) {
            $model->event = $map['Event'];
        }
        if (isset($map['ItemConditionArray'])) {
            $model->itemConditionArray = $map['ItemConditionArray'];
        }
        if (isset($map['ItemConditionExpress'])) {
            $model->itemConditionExpress = $map['ItemConditionExpress'];
        }
        if (isset($map['ItemConditionType'])) {
            $model->itemConditionType = $map['ItemConditionType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NewProductRegulation'])) {
            $model->newProductRegulation = $map['NewProductRegulation'];
        }
        if (isset($map['RecallName'])) {
            $model->recallName = $map['RecallName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StatisPeriod'])) {
            $model->statisPeriod = $map['StatisPeriod'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ToleranceValue'])) {
            $model->toleranceValue = $map['ToleranceValue'];
        }
        if (isset($map['TrafficControlTaskId'])) {
            $model->trafficControlTaskId = $map['TrafficControlTaskId'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
