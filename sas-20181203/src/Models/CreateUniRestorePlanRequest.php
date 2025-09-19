<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class CreateUniRestorePlanRequest extends Model
{
    /**
     * @var string
     */
    public $database;

    /**
     * @var string
     */
    public $instanceUuid;

    /**
     * @var int
     */
    public $policyId;

    /**
     * @var string
     */
    public $resetScn;

    /**
     * @var string
     */
    public $resetTime;

    /**
     * @var string
     */
    public $restoreInfo;

    /**
     * @var int
     */
    public $timePoint;
    protected $_name = [
        'database' => 'Database',
        'instanceUuid' => 'InstanceUuid',
        'policyId' => 'PolicyId',
        'resetScn' => 'ResetScn',
        'resetTime' => 'ResetTime',
        'restoreInfo' => 'RestoreInfo',
        'timePoint' => 'TimePoint',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }

        if (null !== $this->instanceUuid) {
            $res['InstanceUuid'] = $this->instanceUuid;
        }

        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        if (null !== $this->resetScn) {
            $res['ResetScn'] = $this->resetScn;
        }

        if (null !== $this->resetTime) {
            $res['ResetTime'] = $this->resetTime;
        }

        if (null !== $this->restoreInfo) {
            $res['RestoreInfo'] = $this->restoreInfo;
        }

        if (null !== $this->timePoint) {
            $res['TimePoint'] = $this->timePoint;
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
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }

        if (isset($map['InstanceUuid'])) {
            $model->instanceUuid = $map['InstanceUuid'];
        }

        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        if (isset($map['ResetScn'])) {
            $model->resetScn = $map['ResetScn'];
        }

        if (isset($map['ResetTime'])) {
            $model->resetTime = $map['ResetTime'];
        }

        if (isset($map['RestoreInfo'])) {
            $model->restoreInfo = $map['RestoreInfo'];
        }

        if (isset($map['TimePoint'])) {
            $model->timePoint = $map['TimePoint'];
        }

        return $model;
    }
}
