<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetTrafficControlTargetResponseBody\splitParts;

class GetTrafficControlTargetResponseBody extends Model
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
    public $gmtCreateTime;

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
    public $requestId;

    /**
     * @var splitParts
     */
    public $splitParts;

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
    public $trafficControlTargetId;

    /**
     * @var float
     */
    public $value;
    protected $_name = [
        'endTime' => 'EndTime',
        'event' => 'Event',
        'gmtCreateTime' => 'GmtCreateTime',
        'itemConditionArray' => 'ItemConditionArray',
        'itemConditionExpress' => 'ItemConditionExpress',
        'itemConditionType' => 'ItemConditionType',
        'name' => 'Name',
        'newProductRegulation' => 'NewProductRegulation',
        'recallName' => 'RecallName',
        'requestId' => 'RequestId',
        'splitParts' => 'SplitParts',
        'startTime' => 'StartTime',
        'statisPeriod' => 'StatisPeriod',
        'status' => 'Status',
        'toleranceValue' => 'ToleranceValue',
        'trafficControlTargetId' => 'TrafficControlTargetId',
        'value' => 'Value',
    ];

    public function validate()
    {
        if (null !== $this->splitParts) {
            $this->splitParts->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->event) {
            $res['Event'] = $this->event;
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
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

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->splitParts) {
            $res['SplitParts'] = null !== $this->splitParts ? $this->splitParts->toArray($noStream) : $this->splitParts;
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

        if (null !== $this->trafficControlTargetId) {
            $res['TrafficControlTargetId'] = $this->trafficControlTargetId;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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

        if (isset($map['Event'])) {
            $model->event = $map['Event'];
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
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

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SplitParts'])) {
            $model->splitParts = splitParts::fromMap($map['SplitParts']);
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

        if (isset($map['TrafficControlTargetId'])) {
            $model->trafficControlTargetId = $map['TrafficControlTargetId'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
