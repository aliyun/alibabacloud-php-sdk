<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Notifications\V20241225\Models;

use AlibabaCloud\Dara\Model;

class UpdateWebhookContactRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $bizName;

    /**
     * @var string
     */
    public $botSecurityToken;

    /**
     * @var string
     */
    public $callerProtocol;

    /**
     * @var string
     */
    public $clientSource;

    /**
     * @var int
     */
    public $contactId;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @var string
     */
    public $cookies;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $serverUrl;

    /**
     * @var string
     */
    public $srcUrl;

    /**
     * @var string
     */
    public $templateCode;

    /**
     * @var string
     */
    public $tenantCode;

    /**
     * @var string
     */
    public $uidType;

    /**
     * @var string
     */
    public $verificationCode;

    /**
     * @var string
     */
    public $webhookType;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'appName' => 'AppName',
        'bizName' => 'BizName',
        'botSecurityToken' => 'BotSecurityToken',
        'callerProtocol' => 'CallerProtocol',
        'clientSource' => 'ClientSource',
        'contactId' => 'ContactId',
        'contactName' => 'ContactName',
        'cookies' => 'Cookies',
        'securityToken' => 'SecurityToken',
        'serverUrl' => 'ServerUrl',
        'srcUrl' => 'SrcUrl',
        'templateCode' => 'TemplateCode',
        'tenantCode' => 'TenantCode',
        'uidType' => 'UidType',
        'verificationCode' => 'VerificationCode',
        'webhookType' => 'WebhookType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->bizName) {
            $res['BizName'] = $this->bizName;
        }

        if (null !== $this->botSecurityToken) {
            $res['BotSecurityToken'] = $this->botSecurityToken;
        }

        if (null !== $this->callerProtocol) {
            $res['CallerProtocol'] = $this->callerProtocol;
        }

        if (null !== $this->clientSource) {
            $res['ClientSource'] = $this->clientSource;
        }

        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }

        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }

        if (null !== $this->cookies) {
            $res['Cookies'] = $this->cookies;
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        if (null !== $this->serverUrl) {
            $res['ServerUrl'] = $this->serverUrl;
        }

        if (null !== $this->srcUrl) {
            $res['SrcUrl'] = $this->srcUrl;
        }

        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }

        if (null !== $this->tenantCode) {
            $res['TenantCode'] = $this->tenantCode;
        }

        if (null !== $this->uidType) {
            $res['UidType'] = $this->uidType;
        }

        if (null !== $this->verificationCode) {
            $res['VerificationCode'] = $this->verificationCode;
        }

        if (null !== $this->webhookType) {
            $res['WebhookType'] = $this->webhookType;
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
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['BizName'])) {
            $model->bizName = $map['BizName'];
        }

        if (isset($map['BotSecurityToken'])) {
            $model->botSecurityToken = $map['BotSecurityToken'];
        }

        if (isset($map['CallerProtocol'])) {
            $model->callerProtocol = $map['CallerProtocol'];
        }

        if (isset($map['ClientSource'])) {
            $model->clientSource = $map['ClientSource'];
        }

        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }

        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }

        if (isset($map['Cookies'])) {
            $model->cookies = $map['Cookies'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        if (isset($map['ServerUrl'])) {
            $model->serverUrl = $map['ServerUrl'];
        }

        if (isset($map['SrcUrl'])) {
            $model->srcUrl = $map['SrcUrl'];
        }

        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }

        if (isset($map['TenantCode'])) {
            $model->tenantCode = $map['TenantCode'];
        }

        if (isset($map['UidType'])) {
            $model->uidType = $map['UidType'];
        }

        if (isset($map['VerificationCode'])) {
            $model->verificationCode = $map['VerificationCode'];
        }

        if (isset($map['WebhookType'])) {
            $model->webhookType = $map['WebhookType'];
        }

        return $model;
    }
}
