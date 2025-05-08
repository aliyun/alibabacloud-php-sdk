<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20201002\Models\GetLoginTokenResponseBody\passwordStrategy;
use AlibabaCloud\SDK\Ecd\V20201002\Models\GetLoginTokenResponseBody\riskVerifyInfo;

class GetLoginTokenResponseBody extends Model
{
    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var string
     */
    public $industry;

    /**
     * @var string
     */
    public $keepAliveToken;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $loginToken;

    /**
     * @var string
     */
    public $nextStage;

    /**
     * @var string
     */
    public $nickName;

    /**
     * @var passwordStrategy
     */
    public $passwordStrategy;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string[]
     */
    public $props;

    /**
     * @var string
     */
    public $qrCodePng;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var riskVerifyInfo
     */
    public $riskVerifyInfo;

    /**
     * @var string
     */
    public $secret;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var int
     */
    public $tenantId;

    /**
     * @var string
     */
    public $windowDisplayMode;
    protected $_name = [
        'email' => 'Email',
        'endUserId' => 'EndUserId',
        'industry' => 'Industry',
        'keepAliveToken' => 'KeepAliveToken',
        'label' => 'Label',
        'loginToken' => 'LoginToken',
        'nextStage' => 'NextStage',
        'nickName' => 'NickName',
        'passwordStrategy' => 'PasswordStrategy',
        'phone' => 'Phone',
        'props' => 'Props',
        'qrCodePng' => 'QrCodePng',
        'reason' => 'Reason',
        'requestId' => 'RequestId',
        'riskVerifyInfo' => 'RiskVerifyInfo',
        'secret' => 'Secret',
        'sessionId' => 'SessionId',
        'tenantId' => 'TenantId',
        'windowDisplayMode' => 'WindowDisplayMode',
    ];

    public function validate()
    {
        if (null !== $this->passwordStrategy) {
            $this->passwordStrategy->validate();
        }
        if (\is_array($this->props)) {
            Model::validateArray($this->props);
        }
        if (null !== $this->riskVerifyInfo) {
            $this->riskVerifyInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->industry) {
            $res['Industry'] = $this->industry;
        }

        if (null !== $this->keepAliveToken) {
            $res['KeepAliveToken'] = $this->keepAliveToken;
        }

        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        if (null !== $this->loginToken) {
            $res['LoginToken'] = $this->loginToken;
        }

        if (null !== $this->nextStage) {
            $res['NextStage'] = $this->nextStage;
        }

        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }

        if (null !== $this->passwordStrategy) {
            $res['PasswordStrategy'] = null !== $this->passwordStrategy ? $this->passwordStrategy->toArray($noStream) : $this->passwordStrategy;
        }

        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }

        if (null !== $this->props) {
            if (\is_array($this->props)) {
                $res['Props'] = [];
                foreach ($this->props as $key1 => $value1) {
                    $res['Props'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->qrCodePng) {
            $res['QrCodePng'] = $this->qrCodePng;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->riskVerifyInfo) {
            $res['RiskVerifyInfo'] = null !== $this->riskVerifyInfo ? $this->riskVerifyInfo->toArray($noStream) : $this->riskVerifyInfo;
        }

        if (null !== $this->secret) {
            $res['Secret'] = $this->secret;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->windowDisplayMode) {
            $res['WindowDisplayMode'] = $this->windowDisplayMode;
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
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        if (isset($map['Industry'])) {
            $model->industry = $map['Industry'];
        }

        if (isset($map['KeepAliveToken'])) {
            $model->keepAliveToken = $map['KeepAliveToken'];
        }

        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        if (isset($map['LoginToken'])) {
            $model->loginToken = $map['LoginToken'];
        }

        if (isset($map['NextStage'])) {
            $model->nextStage = $map['NextStage'];
        }

        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }

        if (isset($map['PasswordStrategy'])) {
            $model->passwordStrategy = passwordStrategy::fromMap($map['PasswordStrategy']);
        }

        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }

        if (isset($map['Props'])) {
            if (!empty($map['Props'])) {
                $model->props = [];
                foreach ($map['Props'] as $key1 => $value1) {
                    $model->props[$key1] = $value1;
                }
            }
        }

        if (isset($map['QrCodePng'])) {
            $model->qrCodePng = $map['QrCodePng'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RiskVerifyInfo'])) {
            $model->riskVerifyInfo = riskVerifyInfo::fromMap($map['RiskVerifyInfo']);
        }

        if (isset($map['Secret'])) {
            $model->secret = $map['Secret'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['WindowDisplayMode'])) {
            $model->windowDisplayMode = $map['WindowDisplayMode'];
        }

        return $model;
    }
}
