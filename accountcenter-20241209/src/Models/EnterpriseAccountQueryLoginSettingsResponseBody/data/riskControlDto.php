<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseAccountQueryLoginSettingsResponseBody\data;

use AlibabaCloud\Dara\Model;

class riskControlDto extends Model
{
    /**
     * @var string
     */
    public $protectLevel;

    /**
     * @var bool
     */
    public $riskControlEnabled;

    /**
     * @var string
     */
    public $verifyDetail;

    /**
     * @var string
     */
    public $verifyType;
    protected $_name = [
        'protectLevel' => 'ProtectLevel',
        'riskControlEnabled' => 'RiskControlEnabled',
        'verifyDetail' => 'VerifyDetail',
        'verifyType' => 'VerifyType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->protectLevel) {
            $res['ProtectLevel'] = $this->protectLevel;
        }

        if (null !== $this->riskControlEnabled) {
            $res['RiskControlEnabled'] = $this->riskControlEnabled;
        }

        if (null !== $this->verifyDetail) {
            $res['VerifyDetail'] = $this->verifyDetail;
        }

        if (null !== $this->verifyType) {
            $res['VerifyType'] = $this->verifyType;
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
        if (isset($map['ProtectLevel'])) {
            $model->protectLevel = $map['ProtectLevel'];
        }

        if (isset($map['RiskControlEnabled'])) {
            $model->riskControlEnabled = $map['RiskControlEnabled'];
        }

        if (isset($map['VerifyDetail'])) {
            $model->verifyDetail = $map['VerifyDetail'];
        }

        if (isset($map['VerifyType'])) {
            $model->verifyType = $map['VerifyType'];
        }

        return $model;
    }
}
