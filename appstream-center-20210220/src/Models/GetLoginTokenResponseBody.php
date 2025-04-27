<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210220\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210220\Models\GetLoginTokenResponseBody\mfaTypeList;
use AlibabaCloud\SDK\Appstreamcenter\V20210220\Models\GetLoginTokenResponseBody\passwordStrategy;
use AlibabaCloud\SDK\Appstreamcenter\V20210220\Models\GetLoginTokenResponseBody\riskVerifyInfo;
use AlibabaCloud\SDK\Appstreamcenter\V20210220\Models\GetLoginTokenResponseBody\tenantInfos;

class GetLoginTokenResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessType;

    /**
     * @var string
     */
    public $accountType;

    /**
     * @var string
     */
    public $adDomain;

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
    public $idpId;

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
     * @var mfaTypeList[]
     */
    public $mfaTypeList;

    /**
     * @var string
     */
    public $nextStage;

    /**
     * @var string
     */
    public $nickName;

    /**
     * @var string[]
     */
    public $officeSites;

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
     * @var string
     */
    public $tenantAlias;

    /**
     * @var int
     */
    public $tenantId;

    /**
     * @var tenantInfos[]
     */
    public $tenantInfos;

    /**
     * @var string
     */
    public $vpcRegionId;

    /**
     * @var string
     */
    public $windowDisplayMode;

    /**
     * @var string
     */
    public $wyId;
    protected $_name = [
        'accessType' => 'AccessType',
        'accountType' => 'AccountType',
        'adDomain' => 'AdDomain',
        'email' => 'Email',
        'endUserId' => 'EndUserId',
        'idpId' => 'IdpId',
        'industry' => 'Industry',
        'keepAliveToken' => 'KeepAliveToken',
        'label' => 'Label',
        'loginToken' => 'LoginToken',
        'mfaTypeList' => 'MfaTypeList',
        'nextStage' => 'NextStage',
        'nickName' => 'NickName',
        'officeSites' => 'OfficeSites',
        'passwordStrategy' => 'PasswordStrategy',
        'phone' => 'Phone',
        'props' => 'Props',
        'qrCodePng' => 'QrCodePng',
        'reason' => 'Reason',
        'requestId' => 'RequestId',
        'riskVerifyInfo' => 'RiskVerifyInfo',
        'secret' => 'Secret',
        'sessionId' => 'SessionId',
        'tenantAlias' => 'TenantAlias',
        'tenantId' => 'TenantId',
        'tenantInfos' => 'TenantInfos',
        'vpcRegionId' => 'VpcRegionId',
        'windowDisplayMode' => 'WindowDisplayMode',
        'wyId' => 'WyId',
    ];

    public function validate()
    {
        if (\is_array($this->mfaTypeList)) {
            Model::validateArray($this->mfaTypeList);
        }
        if (\is_array($this->officeSites)) {
            Model::validateArray($this->officeSites);
        }
        if (null !== $this->passwordStrategy) {
            $this->passwordStrategy->validate();
        }
        if (\is_array($this->props)) {
            Model::validateArray($this->props);
        }
        if (null !== $this->riskVerifyInfo) {
            $this->riskVerifyInfo->validate();
        }
        if (\is_array($this->tenantInfos)) {
            Model::validateArray($this->tenantInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->mfaTypeList) {
            if (\is_array($this->mfaTypeList)) {
                $res['MfaTypeList'] = [];
                $n1 = 0;
                foreach ($this->mfaTypeList as $item1) {
                    $res['MfaTypeList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->nextStage) {
            $res['NextStage'] = $this->nextStage;
        }

        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }

        if (null !== $this->officeSites) {
            if (\is_array($this->officeSites)) {
                $res['OfficeSites'] = [];
                $n1 = 0;
                foreach ($this->officeSites as $item1) {
                    $res['OfficeSites'][$n1++] = $item1;
                }
            }
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

        if (null !== $this->tenantAlias) {
            $res['TenantAlias'] = $this->tenantAlias;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->tenantInfos) {
            if (\is_array($this->tenantInfos)) {
                $res['TenantInfos'] = [];
                $n1 = 0;
                foreach ($this->tenantInfos as $item1) {
                    $res['TenantInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['MfaTypeList'])) {
            if (!empty($map['MfaTypeList'])) {
                $model->mfaTypeList = [];
                $n1 = 0;
                foreach ($map['MfaTypeList'] as $item1) {
                    $model->mfaTypeList[$n1++] = mfaTypeList::fromMap($item1);
                }
            }
        }

        if (isset($map['NextStage'])) {
            $model->nextStage = $map['NextStage'];
        }

        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }

        if (isset($map['OfficeSites'])) {
            if (!empty($map['OfficeSites'])) {
                $model->officeSites = [];
                $n1 = 0;
                foreach ($map['OfficeSites'] as $item1) {
                    $model->officeSites[$n1++] = $item1;
                }
            }
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

        if (isset($map['TenantAlias'])) {
            $model->tenantAlias = $map['TenantAlias'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['TenantInfos'])) {
            if (!empty($map['TenantInfos'])) {
                $model->tenantInfos = [];
                $n1 = 0;
                foreach ($map['TenantInfos'] as $item1) {
                    $model->tenantInfos[$n1++] = tenantInfos::fromMap($item1);
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
