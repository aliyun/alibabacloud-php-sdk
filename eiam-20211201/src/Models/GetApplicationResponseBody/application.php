<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationResponseBody;

use AlibabaCloud\Dara\Model;

class application extends Model
{
    /**
     * @var string
     */
    public $apiInvokeStatus;

    /**
     * @var string
     */
    public $applicationId;

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
     * @var string[]
     */
    public $applicationVisibility;

    /**
     * @var string
     */
    public $authorizationType;

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
    public $customSubjectStatus;

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
    public $m2MClientStatus;

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
        'apiInvokeStatus' => 'ApiInvokeStatus',
        'applicationId' => 'ApplicationId',
        'applicationName' => 'ApplicationName',
        'applicationSourceType' => 'ApplicationSourceType',
        'applicationTemplateId' => 'ApplicationTemplateId',
        'applicationVisibility' => 'ApplicationVisibility',
        'authorizationType' => 'AuthorizationType',
        'clientId' => 'ClientId',
        'createTime' => 'CreateTime',
        'customSubjectStatus' => 'CustomSubjectStatus',
        'description' => 'Description',
        'features' => 'Features',
        'instanceId' => 'InstanceId',
        'logoUrl' => 'LogoUrl',
        'm2MClientStatus' => 'M2MClientStatus',
        'managedServiceCode' => 'ManagedServiceCode',
        'resourceServerIdentifier' => 'ResourceServerIdentifier',
        'resourceServerStatus' => 'ResourceServerStatus',
        'serviceManaged' => 'ServiceManaged',
        'ssoType' => 'SsoType',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->applicationVisibility)) {
            Model::validateArray($this->applicationVisibility);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiInvokeStatus) {
            $res['ApiInvokeStatus'] = $this->apiInvokeStatus;
        }

        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
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

        if (null !== $this->applicationVisibility) {
            if (\is_array($this->applicationVisibility)) {
                $res['ApplicationVisibility'] = [];
                $n1 = 0;
                foreach ($this->applicationVisibility as $item1) {
                    $res['ApplicationVisibility'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->authorizationType) {
            $res['AuthorizationType'] = $this->authorizationType;
        }

        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->customSubjectStatus) {
            $res['CustomSubjectStatus'] = $this->customSubjectStatus;
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

        if (null !== $this->m2MClientStatus) {
            $res['M2MClientStatus'] = $this->m2MClientStatus;
        }

        if (null !== $this->managedServiceCode) {
            $res['ManagedServiceCode'] = $this->managedServiceCode;
        }

        if (null !== $this->resourceServerIdentifier) {
            $res['ResourceServerIdentifier'] = $this->resourceServerIdentifier;
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
        if (isset($map['ApiInvokeStatus'])) {
            $model->apiInvokeStatus = $map['ApiInvokeStatus'];
        }

        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
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

        if (isset($map['ApplicationVisibility'])) {
            if (!empty($map['ApplicationVisibility'])) {
                $model->applicationVisibility = [];
                $n1 = 0;
                foreach ($map['ApplicationVisibility'] as $item1) {
                    $model->applicationVisibility[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AuthorizationType'])) {
            $model->authorizationType = $map['AuthorizationType'];
        }

        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CustomSubjectStatus'])) {
            $model->customSubjectStatus = $map['CustomSubjectStatus'];
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

        if (isset($map['M2MClientStatus'])) {
            $model->m2MClientStatus = $map['M2MClientStatus'];
        }

        if (isset($map['ManagedServiceCode'])) {
            $model->managedServiceCode = $map['ManagedServiceCode'];
        }

        if (isset($map['ResourceServerIdentifier'])) {
            $model->resourceServerIdentifier = $map['ResourceServerIdentifier'];
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
