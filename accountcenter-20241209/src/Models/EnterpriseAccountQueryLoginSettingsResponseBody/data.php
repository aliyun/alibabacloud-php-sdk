<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseAccountQueryLoginSettingsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseAccountQueryLoginSettingsResponseBody\data\ipMaskDto;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseAccountQueryLoginSettingsResponseBody\data\riskControlDto;

class data extends Model
{
    /**
     * @var ipMaskDto
     */
    public $ipMaskDto;

    /**
     * @var string
     */
    public $mfaBindStatus;

    /**
     * @var riskControlDto
     */
    public $riskControlDto;

    /**
     * @var string
     */
    public $securityMobileLoginStatus;

    /**
     * @var int
     */
    public $sessionExpireTime;
    protected $_name = [
        'ipMaskDto' => 'IpMaskDto',
        'mfaBindStatus' => 'MfaBindStatus',
        'riskControlDto' => 'RiskControlDto',
        'securityMobileLoginStatus' => 'SecurityMobileLoginStatus',
        'sessionExpireTime' => 'SessionExpireTime',
    ];

    public function validate()
    {
        if (null !== $this->ipMaskDto) {
            $this->ipMaskDto->validate();
        }
        if (null !== $this->riskControlDto) {
            $this->riskControlDto->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipMaskDto) {
            $res['IpMaskDto'] = null !== $this->ipMaskDto ? $this->ipMaskDto->toArray($noStream) : $this->ipMaskDto;
        }

        if (null !== $this->mfaBindStatus) {
            $res['MfaBindStatus'] = $this->mfaBindStatus;
        }

        if (null !== $this->riskControlDto) {
            $res['RiskControlDto'] = null !== $this->riskControlDto ? $this->riskControlDto->toArray($noStream) : $this->riskControlDto;
        }

        if (null !== $this->securityMobileLoginStatus) {
            $res['SecurityMobileLoginStatus'] = $this->securityMobileLoginStatus;
        }

        if (null !== $this->sessionExpireTime) {
            $res['SessionExpireTime'] = $this->sessionExpireTime;
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
        if (isset($map['IpMaskDto'])) {
            $model->ipMaskDto = ipMaskDto::fromMap($map['IpMaskDto']);
        }

        if (isset($map['MfaBindStatus'])) {
            $model->mfaBindStatus = $map['MfaBindStatus'];
        }

        if (isset($map['RiskControlDto'])) {
            $model->riskControlDto = riskControlDto::fromMap($map['RiskControlDto']);
        }

        if (isset($map['SecurityMobileLoginStatus'])) {
            $model->securityMobileLoginStatus = $map['SecurityMobileLoginStatus'];
        }

        if (isset($map['SessionExpireTime'])) {
            $model->sessionExpireTime = $map['SessionExpireTime'];
        }

        return $model;
    }
}
