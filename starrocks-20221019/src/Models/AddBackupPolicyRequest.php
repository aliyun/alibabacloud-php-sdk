<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models;

use AlibabaCloud\Dara\Model;

class AddBackupPolicyRequest extends Model
{
    /**
     * @var int
     */
    public $expireDays;

    /**
     * @var int
     */
    public $hour;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $minute;

    /**
     * @var string
     */
    public $recurrenceType;

    /**
     * @var int[]
     */
    public $recurrenceValues;

    /**
     * @var int
     */
    public $timeoutSeconds;
    protected $_name = [
        'expireDays' => 'ExpireDays',
        'hour' => 'Hour',
        'instanceId' => 'InstanceId',
        'minute' => 'Minute',
        'recurrenceType' => 'RecurrenceType',
        'recurrenceValues' => 'RecurrenceValues',
        'timeoutSeconds' => 'TimeoutSeconds',
    ];

    public function validate()
    {
        if (\is_array($this->recurrenceValues)) {
            Model::validateArray($this->recurrenceValues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expireDays) {
            $res['ExpireDays'] = $this->expireDays;
        }

        if (null !== $this->hour) {
            $res['Hour'] = $this->hour;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->minute) {
            $res['Minute'] = $this->minute;
        }

        if (null !== $this->recurrenceType) {
            $res['RecurrenceType'] = $this->recurrenceType;
        }

        if (null !== $this->recurrenceValues) {
            if (\is_array($this->recurrenceValues)) {
                $res['RecurrenceValues'] = [];
                $n1 = 0;
                foreach ($this->recurrenceValues as $item1) {
                    $res['RecurrenceValues'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->timeoutSeconds) {
            $res['TimeoutSeconds'] = $this->timeoutSeconds;
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
        if (isset($map['ExpireDays'])) {
            $model->expireDays = $map['ExpireDays'];
        }

        if (isset($map['Hour'])) {
            $model->hour = $map['Hour'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Minute'])) {
            $model->minute = $map['Minute'];
        }

        if (isset($map['RecurrenceType'])) {
            $model->recurrenceType = $map['RecurrenceType'];
        }

        if (isset($map['RecurrenceValues'])) {
            if (!empty($map['RecurrenceValues'])) {
                $model->recurrenceValues = [];
                $n1 = 0;
                foreach ($map['RecurrenceValues'] as $item1) {
                    $model->recurrenceValues[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TimeoutSeconds'])) {
            $model->timeoutSeconds = $map['TimeoutSeconds'];
        }

        return $model;
    }
}
