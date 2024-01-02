<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationsResponseBody;

use AlibabaCloud\Tea\Model;

class applications extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example app_mkv7rgt4d7i4u7zqtzev2mxxxx
     *
     * @var string
     */
    public $applicationId;

    /**
     * @description The name of the application.
     *
     * @example SAML Application
     *
     * @var string
     */
    public $applicationName;

    /**
     * @description The origin of the application. Valid values:
     *
     *   urn:alibaba:idaas:app:source:template: The application is created based on a template.
     *   urn:alibaba:idaas: The application is created based on the standard protocol.
     *
     * @example urn:alibaba:idaas:app:source:standard
     *
     * @var string
     */
    public $applicationSourceType;

    /**
     * @description 应用模板ID
     *
     * @var string
     */
    public $applicationTemplateId;

    /**
     * @description The client ID of the application.
     *
     * @example app_mkv7rgt4d7i4u7zqtzev2mxxxx
     *
     * @var string
     */
    public $clientId;

    /**
     * @description The time when the application was created. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1649830226000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The description of the application.
     *
     * @example A single application. The code is pkces.
     *
     * @var string
     */
    public $description;

    /**
     * @description The features that are supported by the application. The value is a JSON array. Valid values:
     *
     *   sso: The application supports SSO.
     *   provision: The application supports account synchronization.
     *   api_invoke: The application supports custom APIs.
     *
     * @example ["sso", "provision"]
     *
     * @var string
     */
    public $features;

    /**
     * @description The ID of the instance.
     *
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The URL of the application icon.
     *
     * @example https://img.alicdn.com/imgextra/i4/O1CN01lvYwpv1aGowQXDML9_!!6000000003303-0-tps-580-580.jpg
     *
     * @var string
     */
    public $logoUrl;

    /**
     * @description The service code of the cloud service that manages the application template.
     *
     * @example rpa
     *
     * @var string
     */
    public $managedServiceCode;

    /**
     * @description Indicates whether the application template is managed by a cloud service.
     *
     * @example true
     *
     * @var bool
     */
    public $serviceManaged;

    /**
     * @description The type of the single sign-on (SSO) protocol. Valid values:
     *
     *   saml2: the Security Assertion Markup Language (SAML) 2.0 protocol.
     *   oidc: the OpenID Connect (OIDC) protocol.
     *
     * @example saml2
     *
     * @var string
     */
    public $ssoType;

    /**
     * @description The status of the application. Valid values:
     *
     *   Enabled: The application is enabled.
     *   Disabled: The application is disabled.
     *
     * @example enabled
     *
     * @var string
     */
    public $status;

    /**
     * @description The time when the application was last updated. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1649830226000
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'applicationId'         => 'ApplicationId',
        'applicationName'       => 'ApplicationName',
        'applicationSourceType' => 'ApplicationSourceType',
        'applicationTemplateId' => 'ApplicationTemplateId',
        'clientId'              => 'ClientId',
        'createTime'            => 'CreateTime',
        'description'           => 'Description',
        'features'              => 'Features',
        'instanceId'            => 'InstanceId',
        'logoUrl'               => 'LogoUrl',
        'managedServiceCode'    => 'ManagedServiceCode',
        'serviceManaged'        => 'ServiceManaged',
        'ssoType'               => 'SsoType',
        'status'                => 'Status',
        'updateTime'            => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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

    /**
     * @param array $map
     *
     * @return applications
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
