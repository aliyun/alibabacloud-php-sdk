<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationsResponseBody;

use AlibabaCloud\Dara\Model;

class applications extends Model
{
    /**
     * @var string
     */
    public $applicationCreationType;

    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $applicationIdentityType;

    /**
     * @var string
     */
    public $applicationName;

    /**
     * @var string
     */
    public $applicationSourceType;

    /**
     * @var string
     */
    public $applicationTemplateId;

    /**
     * @var string
     */
    public $clientId;

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
    public $features;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $logoUrl;

    /**
     * @var string
     */
    public $managedServiceCode;

    /**
     * @var string
     */
    public $resourceServerIdentifier;

    /**
     * @var string
     */
    public $resourceServerSourceType;

    /**
     * @var string
     */
    public $resourceServerStatus;

    /**
     * @var bool
     */
    public $serviceManaged;

    /**
     * @var string
     */
    public $ssoType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'applicationCreationType' => 'ApplicationCreationType',
        'applicationId' => 'ApplicationId',
        'applicationIdentityType' => 'ApplicationIdentityType',
        'applicationName' => 'ApplicationName',
        'applicationSourceType' => 'ApplicationSourceType',
        'applicationTemplateId' => 'ApplicationTemplateId',
        'clientId' => 'ClientId',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'features' => 'Features',
        'instanceId' => 'InstanceId',
        'logoUrl' => 'LogoUrl',
        'managedServiceCode' => 'ManagedServiceCode',
        'resourceServerIdentifier' => 'ResourceServerIdentifier',
        'resourceServerSourceType' => 'ResourceServerSourceType',
        'resourceServerStatus' => 'ResourceServerStatus',
        'serviceManaged' => 'ServiceManaged',
        'ssoType' => 'SsoType',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationCreationType) {
            $res['ApplicationCreationType'] = $this->applicationCreationType;
        }

        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->applicationIdentityType) {
            $res['ApplicationIdentityType'] = $this->applicationIdentityType;
        }

        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }

        if (null !== $this->applicationSourceType) {
            $res['ApplicationSourceType'] = $this->applicationSourceType;
        }

        if (null !== $this->applicationTemplateId) {
            $res['ApplicationTemplateId'] = $this->applicationTemplateId;
        }

        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->features) {
            $res['Features'] = $this->features;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->logoUrl) {
            $res['LogoUrl'] = $this->logoUrl;
        }

        if (null !== $this->managedServiceCode) {
            $res['ManagedServiceCode'] = $this->managedServiceCode;
        }

        if (null !== $this->resourceServerIdentifier) {
            $res['ResourceServerIdentifier'] = $this->resourceServerIdentifier;
        }

        if (null !== $this->resourceServerSourceType) {
            $res['ResourceServerSourceType'] = $this->resourceServerSourceType;
        }

        if (null !== $this->resourceServerStatus) {
            $res['ResourceServerStatus'] = $this->resourceServerStatus;
        }

        if (null !== $this->serviceManaged) {
            $res['ServiceManaged'] = $this->serviceManaged;
        }

        if (null !== $this->ssoType) {
            $res['SsoType'] = $this->ssoType;
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
        if (isset($map['ApplicationCreationType'])) {
            $model->applicationCreationType = $map['ApplicationCreationType'];
        }

        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['ApplicationIdentityType'])) {
            $model->applicationIdentityType = $map['ApplicationIdentityType'];
        }

        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }

        if (isset($map['ApplicationSourceType'])) {
            $model->applicationSourceType = $map['ApplicationSourceType'];
        }

        if (isset($map['ApplicationTemplateId'])) {
            $model->applicationTemplateId = $map['ApplicationTemplateId'];
        }

        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Features'])) {
            $model->features = $map['Features'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LogoUrl'])) {
            $model->logoUrl = $map['LogoUrl'];
        }

        if (isset($map['ManagedServiceCode'])) {
            $model->managedServiceCode = $map['ManagedServiceCode'];
        }

        if (isset($map['ResourceServerIdentifier'])) {
            $model->resourceServerIdentifier = $map['ResourceServerIdentifier'];
        }

        if (isset($map['ResourceServerSourceType'])) {
            $model->resourceServerSourceType = $map['ResourceServerSourceType'];
        }

        if (isset($map['ResourceServerStatus'])) {
            $model->resourceServerStatus = $map['ResourceServerStatus'];
        }

        if (isset($map['ServiceManaged'])) {
            $model->serviceManaged = $map['ServiceManaged'];
        }

        if (isset($map['SsoType'])) {
            $model->ssoType = $map['SsoType'];
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
