<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Dara\Model;

class PostEventDisposeAndWhiteruleListRequest extends Model
{
    /**
     * @var string
     */
    public $disposeStrategyIds;

    /**
     * @var string
     */
    public $eventDispose;

    /**
     * @var string
     */
    public $incidentUuid;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $receiverInfo;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $responseSource;

    /**
     * @var int
     */
    public $roleFor;

    /**
     * @var int
     */
    public $roleType;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $threatLevel;
    protected $_name = [
        'disposeStrategyIds' => 'DisposeStrategyIds',
        'eventDispose' => 'EventDispose',
        'incidentUuid' => 'IncidentUuid',
        'owner' => 'Owner',
        'receiverInfo' => 'ReceiverInfo',
        'regionId' => 'RegionId',
        'remark' => 'Remark',
        'responseSource' => 'ResponseSource',
        'roleFor' => 'RoleFor',
        'roleType' => 'RoleType',
        'status' => 'Status',
        'threatLevel' => 'ThreatLevel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->disposeStrategyIds) {
            $res['DisposeStrategyIds'] = $this->disposeStrategyIds;
        }

        if (null !== $this->eventDispose) {
            $res['EventDispose'] = $this->eventDispose;
        }

        if (null !== $this->incidentUuid) {
            $res['IncidentUuid'] = $this->incidentUuid;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->receiverInfo) {
            $res['ReceiverInfo'] = $this->receiverInfo;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->responseSource) {
            $res['ResponseSource'] = $this->responseSource;
        }

        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
        }

        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->threatLevel) {
            $res['ThreatLevel'] = $this->threatLevel;
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
        if (isset($map['DisposeStrategyIds'])) {
            $model->disposeStrategyIds = $map['DisposeStrategyIds'];
        }

        if (isset($map['EventDispose'])) {
            $model->eventDispose = $map['EventDispose'];
        }

        if (isset($map['IncidentUuid'])) {
            $model->incidentUuid = $map['IncidentUuid'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['ReceiverInfo'])) {
            $model->receiverInfo = $map['ReceiverInfo'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['ResponseSource'])) {
            $model->responseSource = $map['ResponseSource'];
        }

        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }

        if (isset($map['RoleType'])) {
            $model->roleType = $map['RoleType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['ThreatLevel'])) {
            $model->threatLevel = $map['ThreatLevel'];
        }

        return $model;
    }
}
