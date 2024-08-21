<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecsworkbench\V20220220\Models;

use AlibabaCloud\Tea\Model;

class SetInstanceRecordConfigRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @example 7
     *
     * @var int
     */
    public $expirationDays;

    /**
     * @description This parameter is required.
     *
     * @example i-xxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example acs:oss:cn-shanghai:123:workbench-record-123-1/record
     *
     * @var string
     */
    public $recordStorageTarget;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'enabled'             => 'Enabled',
        'expirationDays'      => 'ExpirationDays',
        'instanceId'          => 'InstanceId',
        'recordStorageTarget' => 'RecordStorageTarget',
        'regionId'            => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return SetInstanceRecordConfigRequest
     */
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
