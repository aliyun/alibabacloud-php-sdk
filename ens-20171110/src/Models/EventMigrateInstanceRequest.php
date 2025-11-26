<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class EventMigrateInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $dataPolicy;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $opsType;

    /**
     * @var string
     */
    public $password;

    /**
     * @var int
     */
    public $planTime;

    /**
     * @var string
     */
    public $resourceId;
    protected $_name = [
        'dataPolicy' => 'DataPolicy',
        'eventId' => 'EventId',
        'opsType' => 'OpsType',
        'password' => 'Password',
        'planTime' => 'PlanTime',
        'resourceId' => 'ResourceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataPolicy) {
            $res['DataPolicy'] = $this->dataPolicy;
        }

        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }

        if (null !== $this->opsType) {
            $res['OpsType'] = $this->opsType;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->planTime) {
            $res['PlanTime'] = $this->planTime;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
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
        if (isset($map['DataPolicy'])) {
            $model->dataPolicy = $map['DataPolicy'];
        }

        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }

        if (isset($map['OpsType'])) {
            $model->opsType = $map['OpsType'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['PlanTime'])) {
            $model->planTime = $map['PlanTime'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        return $model;
    }
}
