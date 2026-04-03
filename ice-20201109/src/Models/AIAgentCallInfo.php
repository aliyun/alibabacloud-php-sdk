<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class AIAgentCallInfo extends Model
{
    /**
     * @var int
     */
    public $callDuration;

    /**
     * @var string
     */
    public $callEndTime;

    /**
     * @var string
     */
    public $callStartTime;

    /**
     * @var string
     */
    public $calleeNumber;

    /**
     * @var string
     */
    public $callerNumber;

    /**
     * @var int
     */
    public $hangupRole;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'callDuration' => 'CallDuration',
        'callEndTime' => 'CallEndTime',
        'callStartTime' => 'CallStartTime',
        'calleeNumber' => 'CalleeNumber',
        'callerNumber' => 'CallerNumber',
        'hangupRole' => 'HangupRole',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callDuration) {
            $res['CallDuration'] = $this->callDuration;
        }

        if (null !== $this->callEndTime) {
            $res['CallEndTime'] = $this->callEndTime;
        }

        if (null !== $this->callStartTime) {
            $res['CallStartTime'] = $this->callStartTime;
        }

        if (null !== $this->calleeNumber) {
            $res['CalleeNumber'] = $this->calleeNumber;
        }

        if (null !== $this->callerNumber) {
            $res['CallerNumber'] = $this->callerNumber;
        }

        if (null !== $this->hangupRole) {
            $res['HangupRole'] = $this->hangupRole;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CallDuration'])) {
            $model->callDuration = $map['CallDuration'];
        }

        if (isset($map['CallEndTime'])) {
            $model->callEndTime = $map['CallEndTime'];
        }

        if (isset($map['CallStartTime'])) {
            $model->callStartTime = $map['CallStartTime'];
        }

        if (isset($map['CalleeNumber'])) {
            $model->calleeNumber = $map['CalleeNumber'];
        }

        if (isset($map['CallerNumber'])) {
            $model->callerNumber = $map['CallerNumber'];
        }

        if (isset($map['HangupRole'])) {
            $model->hangupRole = $map['HangupRole'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
