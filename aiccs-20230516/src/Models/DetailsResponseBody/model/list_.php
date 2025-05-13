<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models\DetailsResponseBody\model;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $batchId;

    /**
     * @var string
     */
    public $callDesc;

    /**
     * @var string
     */
    public $callId;

    /**
     * @var int
     */
    public $callStatus;

    /**
     * @var int
     */
    public $callType;

    /**
     * @var string
     */
    public $importTime;

    /**
     * @var string
     */
    public $interceptReason;

    /**
     * @var string
     */
    public $number;

    /**
     * @var string
     */
    public $numberDesc;

    /**
     * @var string
     */
    public $numberMD5;

    /**
     * @var int
     */
    public $numberStatus;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var int
     */
    public $taskId;
    protected $_name = [
        'batchId' => 'BatchId',
        'callDesc' => 'CallDesc',
        'callId' => 'CallId',
        'callStatus' => 'CallStatus',
        'callType' => 'CallType',
        'importTime' => 'ImportTime',
        'interceptReason' => 'InterceptReason',
        'number' => 'Number',
        'numberDesc' => 'NumberDesc',
        'numberMD5' => 'NumberMD5',
        'numberStatus' => 'NumberStatus',
        'tag' => 'Tag',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchId) {
            $res['BatchId'] = $this->batchId;
        }

        if (null !== $this->callDesc) {
            $res['CallDesc'] = $this->callDesc;
        }

        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }

        if (null !== $this->callStatus) {
            $res['CallStatus'] = $this->callStatus;
        }

        if (null !== $this->callType) {
            $res['CallType'] = $this->callType;
        }

        if (null !== $this->importTime) {
            $res['ImportTime'] = $this->importTime;
        }

        if (null !== $this->interceptReason) {
            $res['InterceptReason'] = $this->interceptReason;
        }

        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }

        if (null !== $this->numberDesc) {
            $res['NumberDesc'] = $this->numberDesc;
        }

        if (null !== $this->numberMD5) {
            $res['NumberMD5'] = $this->numberMD5;
        }

        if (null !== $this->numberStatus) {
            $res['NumberStatus'] = $this->numberStatus;
        }

        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['BatchId'])) {
            $model->batchId = $map['BatchId'];
        }

        if (isset($map['CallDesc'])) {
            $model->callDesc = $map['CallDesc'];
        }

        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }

        if (isset($map['CallStatus'])) {
            $model->callStatus = $map['CallStatus'];
        }

        if (isset($map['CallType'])) {
            $model->callType = $map['CallType'];
        }

        if (isset($map['ImportTime'])) {
            $model->importTime = $map['ImportTime'];
        }

        if (isset($map['InterceptReason'])) {
            $model->interceptReason = $map['InterceptReason'];
        }

        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }

        if (isset($map['NumberDesc'])) {
            $model->numberDesc = $map['NumberDesc'];
        }

        if (isset($map['NumberMD5'])) {
            $model->numberMD5 = $map['NumberMD5'];
        }

        if (isset($map['NumberStatus'])) {
            $model->numberStatus = $map['NumberStatus'];
        }

        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
