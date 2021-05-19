<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scsp\V20200702\Models;

use AlibabaCloud\Tea\Model;

class ExecuteActivityRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $ticketId;

    /**
     * @var int
     */
    public $operatorId;

    /**
     * @var string
     */
    public $activityCode;

    /**
     * @var string
     */
    public $activityForm;
    protected $_name = [
        'clientToken'  => 'ClientToken',
        'instanceId'   => 'InstanceId',
        'ticketId'     => 'TicketId',
        'operatorId'   => 'OperatorId',
        'activityCode' => 'ActivityCode',
        'activityForm' => 'ActivityForm',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ticketId) {
            $res['TicketId'] = $this->ticketId;
        }
        if (null !== $this->operatorId) {
            $res['OperatorId'] = $this->operatorId;
        }
        if (null !== $this->activityCode) {
            $res['ActivityCode'] = $this->activityCode;
        }
        if (null !== $this->activityForm) {
            $res['ActivityForm'] = $this->activityForm;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecuteActivityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TicketId'])) {
            $model->ticketId = $map['TicketId'];
        }
        if (isset($map['OperatorId'])) {
            $model->operatorId = $map['OperatorId'];
        }
        if (isset($map['ActivityCode'])) {
            $model->activityCode = $map['ActivityCode'];
        }
        if (isset($map['ActivityForm'])) {
            $model->activityForm = $map['ActivityForm'];
        }

        return $model;
    }
}
