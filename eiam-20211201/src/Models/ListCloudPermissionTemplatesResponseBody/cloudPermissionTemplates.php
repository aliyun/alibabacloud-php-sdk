<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListCloudPermissionTemplatesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListCloudPermissionTemplatesResponseBody\cloudPermissionTemplates\applicableScope;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListCloudPermissionTemplatesResponseBody\cloudPermissionTemplates\cloudPermissionTemplateCreator;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListCloudPermissionTemplatesResponseBody\cloudPermissionTemplates\cloudPermissionTemplateInitResult;

class cloudPermissionTemplates extends Model
{
    /**
     * @var bool
     */
    public $allowRequest;

    /**
     * @var applicableScope
     */
    public $applicableScope;

    /**
     * @var string
     */
    public $cloudAccountId;

    /**
     * @var cloudPermissionTemplateCreator
     */
    public $cloudPermissionTemplateCreator;

    /**
     * @var string
     */
    public $cloudPermissionTemplateId;

    /**
     * @var cloudPermissionTemplateInitResult
     */
    public $cloudPermissionTemplateInitResult;

    /**
     * @var string
     */
    public $cloudPermissionTemplateName;

    /**
     * @var string
     */
    public $cloudPermissionTemplateOwnerId;

    /**
     * @var string
     */
    public $cloudPermissionTemplateOwnerType;

    /**
     * @var string
     */
    public $cloudPermissionTemplateSharingMode;

    /**
     * @var string
     */
    public $cloudPermissionTemplateUsageType;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $permissionEntityExternalId;

    /**
     * @var string
     */
    public $permissionEntityId;

    /**
     * @var string
     */
    public $permissionEntityType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'allowRequest' => 'AllowRequest',
        'applicableScope' => 'ApplicableScope',
        'cloudAccountId' => 'CloudAccountId',
        'cloudPermissionTemplateCreator' => 'CloudPermissionTemplateCreator',
        'cloudPermissionTemplateId' => 'CloudPermissionTemplateId',
        'cloudPermissionTemplateInitResult' => 'CloudPermissionTemplateInitResult',
        'cloudPermissionTemplateName' => 'CloudPermissionTemplateName',
        'cloudPermissionTemplateOwnerId' => 'CloudPermissionTemplateOwnerId',
        'cloudPermissionTemplateOwnerType' => 'CloudPermissionTemplateOwnerType',
        'cloudPermissionTemplateSharingMode' => 'CloudPermissionTemplateSharingMode',
        'cloudPermissionTemplateUsageType' => 'CloudPermissionTemplateUsageType',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'instanceId' => 'InstanceId',
        'permissionEntityExternalId' => 'PermissionEntityExternalId',
        'permissionEntityId' => 'PermissionEntityId',
        'permissionEntityType' => 'PermissionEntityType',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (null !== $this->applicableScope) {
            $this->applicableScope->validate();
        }
        if (null !== $this->cloudPermissionTemplateCreator) {
            $this->cloudPermissionTemplateCreator->validate();
        }
        if (null !== $this->cloudPermissionTemplateInitResult) {
            $this->cloudPermissionTemplateInitResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowRequest) {
            $res['AllowRequest'] = $this->allowRequest;
        }

        if (null !== $this->applicableScope) {
            $res['ApplicableScope'] = null !== $this->applicableScope ? $this->applicableScope->toArray($noStream) : $this->applicableScope;
        }

        if (null !== $this->cloudAccountId) {
            $res['CloudAccountId'] = $this->cloudAccountId;
        }

        if (null !== $this->cloudPermissionTemplateCreator) {
            $res['CloudPermissionTemplateCreator'] = null !== $this->cloudPermissionTemplateCreator ? $this->cloudPermissionTemplateCreator->toArray($noStream) : $this->cloudPermissionTemplateCreator;
        }

        if (null !== $this->cloudPermissionTemplateId) {
            $res['CloudPermissionTemplateId'] = $this->cloudPermissionTemplateId;
        }

        if (null !== $this->cloudPermissionTemplateInitResult) {
            $res['CloudPermissionTemplateInitResult'] = null !== $this->cloudPermissionTemplateInitResult ? $this->cloudPermissionTemplateInitResult->toArray($noStream) : $this->cloudPermissionTemplateInitResult;
        }

        if (null !== $this->cloudPermissionTemplateName) {
            $res['CloudPermissionTemplateName'] = $this->cloudPermissionTemplateName;
        }

        if (null !== $this->cloudPermissionTemplateOwnerId) {
            $res['CloudPermissionTemplateOwnerId'] = $this->cloudPermissionTemplateOwnerId;
        }

        if (null !== $this->cloudPermissionTemplateOwnerType) {
            $res['CloudPermissionTemplateOwnerType'] = $this->cloudPermissionTemplateOwnerType;
        }

        if (null !== $this->cloudPermissionTemplateSharingMode) {
            $res['CloudPermissionTemplateSharingMode'] = $this->cloudPermissionTemplateSharingMode;
        }

        if (null !== $this->cloudPermissionTemplateUsageType) {
            $res['CloudPermissionTemplateUsageType'] = $this->cloudPermissionTemplateUsageType;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->permissionEntityExternalId) {
            $res['PermissionEntityExternalId'] = $this->permissionEntityExternalId;
        }

        if (null !== $this->permissionEntityId) {
            $res['PermissionEntityId'] = $this->permissionEntityId;
        }

        if (null !== $this->permissionEntityType) {
            $res['PermissionEntityType'] = $this->permissionEntityType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['AllowRequest'])) {
            $model->allowRequest = $map['AllowRequest'];
        }

        if (isset($map['ApplicableScope'])) {
            $model->applicableScope = applicableScope::fromMap($map['ApplicableScope']);
        }

        if (isset($map['CloudAccountId'])) {
            $model->cloudAccountId = $map['CloudAccountId'];
        }

        if (isset($map['CloudPermissionTemplateCreator'])) {
            $model->cloudPermissionTemplateCreator = cloudPermissionTemplateCreator::fromMap($map['CloudPermissionTemplateCreator']);
        }

        if (isset($map['CloudPermissionTemplateId'])) {
            $model->cloudPermissionTemplateId = $map['CloudPermissionTemplateId'];
        }

        if (isset($map['CloudPermissionTemplateInitResult'])) {
            $model->cloudPermissionTemplateInitResult = cloudPermissionTemplateInitResult::fromMap($map['CloudPermissionTemplateInitResult']);
        }

        if (isset($map['CloudPermissionTemplateName'])) {
            $model->cloudPermissionTemplateName = $map['CloudPermissionTemplateName'];
        }

        if (isset($map['CloudPermissionTemplateOwnerId'])) {
            $model->cloudPermissionTemplateOwnerId = $map['CloudPermissionTemplateOwnerId'];
        }

        if (isset($map['CloudPermissionTemplateOwnerType'])) {
            $model->cloudPermissionTemplateOwnerType = $map['CloudPermissionTemplateOwnerType'];
        }

        if (isset($map['CloudPermissionTemplateSharingMode'])) {
            $model->cloudPermissionTemplateSharingMode = $map['CloudPermissionTemplateSharingMode'];
        }

        if (isset($map['CloudPermissionTemplateUsageType'])) {
            $model->cloudPermissionTemplateUsageType = $map['CloudPermissionTemplateUsageType'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['PermissionEntityExternalId'])) {
            $model->permissionEntityExternalId = $map['PermissionEntityExternalId'];
        }

        if (isset($map['PermissionEntityId'])) {
            $model->permissionEntityId = $map['PermissionEntityId'];
        }

        if (isset($map['PermissionEntityType'])) {
            $model->permissionEntityType = $map['PermissionEntityType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
