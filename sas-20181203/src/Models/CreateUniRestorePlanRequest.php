<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

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
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $restoreInfo;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var int
     */
    public $timePoint;
    protected $_name = [
        'database'        => 'Database',
        'instanceUuid'    => 'InstanceUuid',
        'policyId'        => 'PolicyId',
        'resetScn'        => 'ResetScn',
        'resetTime'       => 'ResetTime',
        'resourceOwnerId' => 'ResourceOwnerId',
        'restoreInfo'     => 'RestoreInfo',
        'sourceIp'        => 'SourceIp',
        'timePoint'       => 'TimePoint',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->restoreInfo) {
            $res['RestoreInfo'] = $this->restoreInfo;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->timePoint) {
            $res['TimePoint'] = $this->timePoint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUniRestorePlanRequest
     */
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
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RestoreInfo'])) {
            $model->restoreInfo = $map['RestoreInfo'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['TimePoint'])) {
            $model->timePoint = $map['TimePoint'];
        }

        return $model;
    }
}
