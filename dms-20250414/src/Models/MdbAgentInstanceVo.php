<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class MdbAgentInstanceVo extends Model
{
    /**
     * @var string
     */
    public $accessUrl;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $engineInstanceId;

    /**
     * @var string
     */
    public $engineRegion;

    /**
     * @var string
     */
    public $engineType;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $lastActiveTime;

    /**
     * @var string
     */
    public $lockTime;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $publicDomain;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $statusDesc;

    /**
     * @var string
     */
    public $statusMessage;
    protected $_name = [
        'accessUrl' => 'AccessUrl',
        'chargeType' => 'ChargeType',
        'engineInstanceId' => 'EngineInstanceId',
        'engineRegion' => 'EngineRegion',
        'engineType' => 'EngineType',
        'gmtCreate' => 'GmtCreate',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'lastActiveTime' => 'LastActiveTime',
        'lockTime' => 'LockTime',
        'orderId' => 'OrderId',
        'publicDomain' => 'PublicDomain',
        'status' => 'Status',
        'statusDesc' => 'StatusDesc',
        'statusMessage' => 'StatusMessage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessUrl) {
            $res['AccessUrl'] = $this->accessUrl;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->engineInstanceId) {
            $res['EngineInstanceId'] = $this->engineInstanceId;
        }

        if (null !== $this->engineRegion) {
            $res['EngineRegion'] = $this->engineRegion;
        }

        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->lastActiveTime) {
            $res['LastActiveTime'] = $this->lastActiveTime;
        }

        if (null !== $this->lockTime) {
            $res['LockTime'] = $this->lockTime;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->publicDomain) {
            $res['PublicDomain'] = $this->publicDomain;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->statusDesc) {
            $res['StatusDesc'] = $this->statusDesc;
        }

        if (null !== $this->statusMessage) {
            $res['StatusMessage'] = $this->statusMessage;
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
        if (isset($map['AccessUrl'])) {
            $model->accessUrl = $map['AccessUrl'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['EngineInstanceId'])) {
            $model->engineInstanceId = $map['EngineInstanceId'];
        }

        if (isset($map['EngineRegion'])) {
            $model->engineRegion = $map['EngineRegion'];
        }

        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['LastActiveTime'])) {
            $model->lastActiveTime = $map['LastActiveTime'];
        }

        if (isset($map['LockTime'])) {
            $model->lockTime = $map['LockTime'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['PublicDomain'])) {
            $model->publicDomain = $map['PublicDomain'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StatusDesc'])) {
            $model->statusDesc = $map['StatusDesc'];
        }

        if (isset($map['StatusMessage'])) {
            $model->statusMessage = $map['StatusMessage'];
        }

        return $model;
    }
}
