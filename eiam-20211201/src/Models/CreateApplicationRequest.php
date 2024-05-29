<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Tea\Model;

class CreateApplicationRequest extends Model
{
    /**
     * @description The name of the application.
     *
     * This parameter is required.
     * @example Ram Account SSO
     *
     * @var string
     */
    public $applicationName;

    /**
     * @description The type of the application source. Valid values:
     *
     *   urn:alibaba:idaas:app:source:template: application template
     *   urn:alibaba:idaas:app:source:standard: standard protocol
     *
     * This parameter is required.
     * @example urn:alibaba:idaas:app:source:standard
     *
     * @var string
     */
    public $applicationSourceType;

    /**
     * @description The ID of the application template. This parameter is required if you set the ApplicationSourceType parameter to urn:alibaba:idaas:app:source:template.
     *
     * @example template_cloud_ram
     *
     * @var string
     */
    public $applicationTemplateId;

    /**
     * @description The description of the application.
     *
     * @example RAM user SSO application
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the instance.
     *
     * This parameter is required.
     * @example idaas_ue2jvisn35ea5lmthk2676xxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The URL of the application logo.
     *
     * @example https://oss.cn-hangzhou.aliyuncs.com/logo.png
     *
     * @var string
     */
    public $logoUrl;

    /**
     * @description The SSO protocol. Valid values:
     *
     *   saml2: the SAML 2.0 protocol.
     *   oidc: the OpenID Connect protocol.
     *
     * This parameter is required.
     * @example saml2
     *
     * @var string
     */
    public $ssoType;
    protected $_name = [
        'applicationName'       => 'ApplicationName',
        'applicationSourceType' => 'ApplicationSourceType',
        'applicationTemplateId' => 'ApplicationTemplateId',
        'description'           => 'Description',
        'instanceId'            => 'InstanceId',
        'logoUrl'               => 'LogoUrl',
        'ssoType'               => 'SsoType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }
        if (null !== $this->applicationSourceType) {
            $res['ApplicationSourceType'] = $this->applicationSourceType;
        }
        if (null !== $this->applicationTemplateId) {
            $res['ApplicationTemplateId'] = $this->applicationTemplateId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->logoUrl) {
            $res['LogoUrl'] = $this->logoUrl;
        }
        if (null !== $this->ssoType) {
            $res['SsoType'] = $this->ssoType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }
        if (isset($map['ApplicationSourceType'])) {
            $model->applicationSourceType = $map['ApplicationSourceType'];
        }
        if (isset($map['ApplicationTemplateId'])) {
            $model->applicationTemplateId = $map['ApplicationTemplateId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LogoUrl'])) {
            $model->logoUrl = $map['LogoUrl'];
        }
        if (isset($map['SsoType'])) {
            $model->ssoType = $map['SsoType'];
        }

        return $model;
    }
}
