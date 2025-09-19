<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecsworkbench\V20220220\Models;

use AlibabaCloud\Dara\Model;

class SetInstanceRecordConfigRequest extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var int
     */
    public $expirationDays;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $recordStorageTarget;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'enabled' => 'Enabled',
        'expirationDays' => 'ExpirationDays',
        'instanceId' => 'InstanceId',
        'recordStorageTarget' => 'RecordStorageTarget',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->expirationDays) {
            $res['ExpirationDays'] = $this->expirationDays;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->recordStorageTarget) {
            $res['RecordStorageTarget'] = $this->recordStorageTarget;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['ExpirationDays'])) {
            $model->expirationDays = $map['ExpirationDays'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RecordStorageTarget'])) {
            $model->recordStorageTarget = $map['RecordStorageTarget'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
