<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210220\Models;

use AlibabaCloud\SDK\Appstreamcenter\V20210220\Models\GetLoginTokenResponseBody\passwordStrategy;
use AlibabaCloud\SDK\Appstreamcenter\V20210220\Models\GetLoginTokenResponseBody\riskVerifyInfo;
use AlibabaCloud\SDK\Appstreamcenter\V20210220\Models\GetLoginTokenResponseBody\tenantInfos;
use AlibabaCloud\Tea\Model;

class GetLoginTokenResponseBody extends Model
{
    /**
     * @example INTERNET
     *
     * @var string
     */
    public $accessType;

    /**
     * @example ad
     *
     * @var string
     */
    public $accountType;

    /**
     * @example easthp***.com
     *
     * @var string
     */
    public $adDomain;

    /**
     * @example alice***@aliyun.com
     *
     * @var string
     */
    public $email;

    /**
     * @example alice
     *
     * @var string
     */
    public $endUserId;

    /**
     * @example idp-7ttvs4ove8bo5***
     *
     * @var string
     */
    public $idpId;

    /**
     * @example edu
     *
     * @var string
     */
    public $industry;

    /**
     * @example 006YwvYMsesWWsDBZnVB+Wq9AvJDVIqOY3YCktvtb7+KxMb3ClnNlV8+l/knhZYrXUmeP06IzkjF+IgcZ3vZKOyMprDyFHjCy1r27FRE/U7+geWCl8iQ+yF8GaCRHfJEkC2+ROs93HkT4tfHxyY1J8W7O7ZQGUC/cdCvm+cCP6FIy73IUuPuVR6PcKYXIp***
     *
     * @var string
     */
    public $keepAliveToken;

    /**
     * @example test:wuying
     *
     * @var string
     */
    public $label;

    /**
     * @example v185fdd7f6d39fa7861981639366085772e150a390a5bb7b43c4e62440d94fc392b945770e1596cebe90085ce0af4d****
     *
     * @var string
     */
    public $loginToken;

    /**
     * @example MFABind
     *
     * @var string
     */
    public $nextStage;

    /**
     * @var string[]
     */
    public $officeSites;

    /**
     * @var passwordStrategy
     */
    public $passwordStrategy;

    /**
     * @example 1826717****
     *
     * @var string
     */
    public $phone;

    /**
     * @var string[]
     */
    public $props;

    /**
     * @example 5OCLLKKOJU5HPBX66H3QCTWY******
     *
     * @var string
     */
    public $qrCodePng;

    /**
     * @example PasswordExpired
     *
     * @var string
     */
    public $reason;

    /**
     * @example EEA72491-B731-53D6-83ED-209769D6****
     *
     * @var string
     */
    public $requestId;

    /**
     * @var riskVerifyInfo
     */
    public $riskVerifyInfo;

    /**
     * @example 4JZNSDHDM3T6AZ4G2O5OWXBLLE4P****
     *
     * @var string
     */
    public $secret;

    /**
     * @example cc15c91c-821b-4edd-9af2-6df66cc****
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example Rq201***
     *
     * @var string
     */
    public $tenantAlias;

    /**
     * @example 13747924304****
     *
     * @var int
     */
    public $tenantId;

    /**
     * @var tenantInfos[]
     */
    public $tenantInfos;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $vpcRegionId;

    /**
     * @example Windowed
     *
     * @var string
     */
    public $windowDisplayMode;

    /**
     * @example 0aba1403b337a***
     *
     * @var string
     */
    public $wyId;
    protected $_name = [
        'accessType'        => 'AccessType',
        'accountType'       => 'AccountType',
        'adDomain'          => 'AdDomain',
        'email'             => 'Email',
        'endUserId'         => 'EndUserId',
        'idpId'             => 'IdpId',
        'industry'          => 'Industry',
        'keepAliveToken'    => 'KeepAliveToken',
        'label'             => 'Label',
        'loginToken'        => 'LoginToken',
        'nextStage'         => 'NextStage',
        'officeSites'       => 'OfficeSites',
        'passwordStrategy'  => 'PasswordStrategy',
        'phone'             => 'Phone',
        'props'             => 'Props',
        'qrCodePng'         => 'QrCodePng',
        'reason'            => 'Reason',
        'requestId'         => 'RequestId',
        'riskVerifyInfo'    => 'RiskVerifyInfo',
        'secret'            => 'Secret',
        'sessionId'         => 'SessionId',
        'tenantAlias'       => 'TenantAlias',
        'tenantId'          => 'TenantId',
        'tenantInfos'       => 'TenantInfos',
        'vpcRegionId'       => 'VpcRegionId',
        'windowDisplayMode' => 'WindowDisplayMode',
        'wyId'              => 'WyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessType) {
            $res['AccessType'] = $this->accessType;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->adDomain) {
            $res['AdDomain'] = $this->adDomain;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->idpId) {
            $res['IdpId'] = $this->idpId;
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
        if (null !== $this->officeSites) {
            $res['OfficeSites'] = $this->officeSites;
        }
        if (null !== $this->passwordStrategy) {
            $res['PasswordStrategy'] = null !== $this->passwordStrategy ? $this->passwordStrategy->toMap() : null;
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
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
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
        if (null !== $this->tenantAlias) {
            $res['TenantAlias'] = $this->tenantAlias;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->tenantInfos) {
            $res['TenantInfos'] = [];
            if (null !== $this->tenantInfos && \is_array($this->tenantInfos)) {
                $n = 0;
                foreach ($this->tenantInfos as $item) {
                    $res['TenantInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vpcRegionId) {
            $res['VpcRegionId'] = $this->vpcRegionId;
        }
        if (null !== $this->windowDisplayMode) {
            $res['WindowDisplayMode'] = $this->windowDisplayMode;
        }
        if (null !== $this->wyId) {
            $res['WyId'] = $this->wyId;
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
        if (isset($map['AccessType'])) {
            $model->accessType = $map['AccessType'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['AdDomain'])) {
            $model->adDomain = $map['AdDomain'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['IdpId'])) {
            $model->idpId = $map['IdpId'];
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
        if (isset($map['OfficeSites'])) {
            if (!empty($map['OfficeSites'])) {
                $model->officeSites = $map['OfficeSites'];
            }
        }
        if (isset($map['PasswordStrategy'])) {
            $model->passwordStrategy = passwordStrategy::fromMap($map['PasswordStrategy']);
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
        if (isset($map['TenantAlias'])) {
            $model->tenantAlias = $map['TenantAlias'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['TenantInfos'])) {
            if (!empty($map['TenantInfos'])) {
                $model->tenantInfos = [];
                $n                  = 0;
                foreach ($map['TenantInfos'] as $item) {
                    $model->tenantInfos[$n++] = null !== $item ? tenantInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VpcRegionId'])) {
            $model->vpcRegionId = $map['VpcRegionId'];
        }
        if (isset($map['WindowDisplayMode'])) {
            $model->windowDisplayMode = $map['WindowDisplayMode'];
        }
        if (isset($map['WyId'])) {
            $model->wyId = $map['WyId'];
        }

        return $model;
    }
}
