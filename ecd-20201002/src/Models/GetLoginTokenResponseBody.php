<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\SDK\Ecd\V20201002\Models\GetLoginTokenResponseBody\riskVerifyInfo;
use AlibabaCloud\Tea\Model;

class GetLoginTokenResponseBody extends Model
{
    /**
     * @description The email address of the user. The system returns the email address in the return value of the LoginToken parameter after the user logs on to the client.
     *
     *   For a convenience user, the return value is the email address specified when the administrator creates the convenience user.
     *   For an AD user, the return value is in the following format: `Username@Name of the AD domain`.
     *
     * @example alice
     *
     * @var string
     */
    public $email;

    /**
     * @description The account of the convenience user or the AD user.
     *
     * @example alice
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description > This is a parameter only for internal use.
     *
     * @example edu
     *
     * @var string
     */
    public $industry;

    /**
     * @description The token used to keep the user logged on. After the user logs on to the client and select the Keep Logon option, `KeepAliveToken` is returned when you call the operation. If the user does not select the Keep Logon option, null is returned.
     *
     * @example 006YwvYMsesWWsDBZnVB+Wq9AvJDVIqOY3YCktvtb7+KxMb3ClnNlV8+l/knhZYrXUmeP06IzkjF+IgcZ3vZKOyMprDyFHjCy1r27FRE/U7+geWCl8iQ+yF8GaCRHfJEkC2+ROs93HkT4tfHxyY1J8W7O7ZQGUC/cdCvm+cCP6FIy73IUuPuVR6PcKYXIpEZPW
     *
     * @var string
     */
    public $keepAliveToken;

    /**
     * @description The attribute of the convenience user. For an AD user, null is returned.
     *
     * @example test:wuying
     *
     * @var string
     */
    public $label;

    /**
     * @description The logon token.
     *
     * @example v18101ac6a9e69c66b04a163031680463660b4b216cd758f34b60b9ad6a7c7f7334b83dd8f75eef4209c68f9f1080b****
     *
     * @var string
     */
    public $loginToken;

    /**
     * @description The next stage that is expected to enter. For example, if the administrator enables MFA authentication in the EDS console, `MFAVerify` is returned after the username and password pass the authentication (after you set CurrentStage to `ADPassword` stage). This indicates that the MFA authentication is required.
     *
     * > For more information about each authentication stage, see the parameter description of the request parameter `CurrentStage`.
     * @example MFAVerify
     *
     * @var string
     */
    public $nextStage;

    /**
     * @description Enter the mobile number of the convenience user. For an AD user, null is returned.
     *
     * @example 1381111****
     *
     * @var string
     */
    public $phone;

    /**
     * @description > This is a parameter only for internal use.
     *
     * @var string[]
     */
    public $props;

    /**
     * @description The QR code that is generated when the virtual MFA device is bound. The value is encoded in Base64. This parameter can be empty. This parameter is required only when the CurrentStage parameter is set to `MFABind`.
     *
     * > For more information about each authentication stage, see the parameter description of the request parameter `CurrentStage`.
     * @example 5OCLLKKOJU5HPBX66H3QCTWY******
     *
     * @var string
     */
    public $qrCodePng;

    /**
     * @description The ID of the request.
     *
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @var riskVerifyInfo
     */
    public $riskVerifyInfo;

    /**
     * @description The key that is generated when you bind the virtual MFA device. This parameter is required when the CurrentStage parameter is set to `MFABind`.
     *
     * > For more information about each authentication stage, see the parameter description of the request parameter `CurrentStage`.
     * @example 5OCLLKKOJU5HPBX66H3QCTWYI7MH****
     *
     * @var string
     */
    public $secret;

    /**
     * @description The ID of the session. The ID is returned the first time you call the `GetLoginToken` operation in the session. If MFA is required, you must specify this parameter in subsequent stages.
     *
     * > For more information about each authentication stage, see the parameter description of the request parameter `CurrentStage`.
     * @example d6ec166d-ab93-4286-bf7f-a18bb929****
     *
     * @var string
     */
    public $sessionId;

    /**
     * @description The ID of the Alibaba Cloud account. The ID is used for hardware client authentication.
     *
     * @example 166353906220****
     *
     * @var int
     */
    public $tenantId;

    /**
     * @description > This is a parameter only for internal use.
     *
     * @example mode
     *
     * @var string
     */
    public $windowDisplayMode;
    protected $_name = [
        'email'             => 'Email',
        'endUserId'         => 'EndUserId',
        'industry'          => 'Industry',
        'keepAliveToken'    => 'KeepAliveToken',
        'label'             => 'Label',
        'loginToken'        => 'LoginToken',
        'nextStage'         => 'NextStage',
        'phone'             => 'Phone',
        'props'             => 'Props',
        'qrCodePng'         => 'QrCodePng',
        'requestId'         => 'RequestId',
        'riskVerifyInfo'    => 'RiskVerifyInfo',
        'secret'            => 'Secret',
        'sessionId'         => 'SessionId',
        'tenantId'          => 'TenantId',
        'windowDisplayMode' => 'WindowDisplayMode',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }
        if (null !== $this->props) {
            $res['Props'] = $this->props;
        }
        if (null !== $this->qrCodePng) {
            $res['QrCodePng'] = $this->qrCodePng;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->riskVerifyInfo) {
            $res['RiskVerifyInfo'] = null !== $this->riskVerifyInfo ? $this->riskVerifyInfo->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return GetLoginTokenResponseBody
     */
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
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }
        if (isset($map['Props'])) {
            $model->props = $map['Props'];
        }
        if (isset($map['QrCodePng'])) {
            $model->qrCodePng = $map['QrCodePng'];
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
