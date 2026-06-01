<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class GetRayHistoryServerResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessibility;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $ecsSpec;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtFinishTime;

    /**
     * @var string
     */
    public $gmtModifyTime;

    /**
     * @var int
     */
    public $maxRuntimeMinutes;

    /**
     * @var string
     */
    public $rayHistoryServerId;

    /**
     * @var string
     */
    public $rayHistoryServerUrl;

    /**
     * @var string
     */
    public $reasonCode;

    /**
     * @var string
     */
    public $reasonMessage;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $storagePath;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $username;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessibility' => 'Accessibility',
        'displayName' => 'DisplayName',
        'ecsSpec' => 'EcsSpec',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtFinishTime' => 'GmtFinishTime',
        'gmtModifyTime' => 'GmtModifyTime',
        'maxRuntimeMinutes' => 'MaxRuntimeMinutes',
        'rayHistoryServerId' => 'RayHistoryServerId',
        'rayHistoryServerUrl' => 'RayHistoryServerUrl',
        'reasonCode' => 'ReasonCode',
        'reasonMessage' => 'ReasonMessage',
        'resourceId' => 'ResourceId',
        'resourceName' => 'ResourceName',
        'status' => 'Status',
        'storagePath' => 'StoragePath',
        'tenantId' => 'TenantId',
        'userId' => 'UserId',
        'username' => 'Username',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->ecsSpec) {
            $res['EcsSpec'] = $this->ecsSpec;
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtFinishTime) {
            $res['GmtFinishTime'] = $this->gmtFinishTime;
        }

        if (null !== $this->gmtModifyTime) {
            $res['GmtModifyTime'] = $this->gmtModifyTime;
        }

        if (null !== $this->maxRuntimeMinutes) {
            $res['MaxRuntimeMinutes'] = $this->maxRuntimeMinutes;
        }

        if (null !== $this->rayHistoryServerId) {
            $res['RayHistoryServerId'] = $this->rayHistoryServerId;
        }

        if (null !== $this->rayHistoryServerUrl) {
            $res['RayHistoryServerUrl'] = $this->rayHistoryServerUrl;
        }

        if (null !== $this->reasonCode) {
            $res['ReasonCode'] = $this->reasonCode;
        }

        if (null !== $this->reasonMessage) {
            $res['ReasonMessage'] = $this->reasonMessage;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->storagePath) {
            $res['StoragePath'] = $this->storagePath;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['EcsSpec'])) {
            $model->ecsSpec = $map['EcsSpec'];
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtFinishTime'])) {
            $model->gmtFinishTime = $map['GmtFinishTime'];
        }

        if (isset($map['GmtModifyTime'])) {
            $model->gmtModifyTime = $map['GmtModifyTime'];
        }

        if (isset($map['MaxRuntimeMinutes'])) {
            $model->maxRuntimeMinutes = $map['MaxRuntimeMinutes'];
        }

        if (isset($map['RayHistoryServerId'])) {
            $model->rayHistoryServerId = $map['RayHistoryServerId'];
        }

        if (isset($map['RayHistoryServerUrl'])) {
            $model->rayHistoryServerUrl = $map['RayHistoryServerUrl'];
        }

        if (isset($map['ReasonCode'])) {
            $model->reasonCode = $map['ReasonCode'];
        }

        if (isset($map['ReasonMessage'])) {
            $model->reasonMessage = $map['ReasonMessage'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StoragePath'])) {
            $model->storagePath = $map['StoragePath'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
