<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class IdpLoginConfig extends Model
{
    /**
     * @var string
     */
    public $mobileLoginType;

    /**
     * @var string
     */
    public $mobileMfaTypes;

    /**
     * @var string
     */
    public $pcLoginType;

    /**
     * @var string
     */
    public $pcMfaTypes;

    /**
     * @var string
     */
    public $totpCorpVerifyAesKey;

    /**
     * @var string
     */
    public $totpCorpVerifyToken;

    /**
     * @var string
     */
    public $totpCorpVerifyUrl;
    protected $_name = [
        'mobileLoginType' => 'MobileLoginType',
        'mobileMfaTypes' => 'MobileMfaTypes',
        'pcLoginType' => 'PcLoginType',
        'pcMfaTypes' => 'PcMfaTypes',
        'totpCorpVerifyAesKey' => 'TotpCorpVerifyAesKey',
        'totpCorpVerifyToken' => 'TotpCorpVerifyToken',
        'totpCorpVerifyUrl' => 'TotpCorpVerifyUrl',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->mobileLoginType) {
            $res['MobileLoginType'] = $this->mobileLoginType;
        }
        if (null !== $this->mobileMfaTypes) {
            $res['MobileMfaTypes'] = $this->mobileMfaTypes;
        }
        if (null !== $this->pcLoginType) {
            $res['PcLoginType'] = $this->pcLoginType;
        }
        if (null !== $this->pcMfaTypes) {
            $res['PcMfaTypes'] = $this->pcMfaTypes;
        }
        if (null !== $this->totpCorpVerifyAesKey) {
            $res['TotpCorpVerifyAesKey'] = $this->totpCorpVerifyAesKey;
        }
        if (null !== $this->totpCorpVerifyToken) {
            $res['TotpCorpVerifyToken'] = $this->totpCorpVerifyToken;
        }
        if (null !== $this->totpCorpVerifyUrl) {
            $res['TotpCorpVerifyUrl'] = $this->totpCorpVerifyUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IdpLoginConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MobileLoginType'])) {
            $model->mobileLoginType = $map['MobileLoginType'];
        }
        if (isset($map['MobileMfaTypes'])) {
            $model->mobileMfaTypes = $map['MobileMfaTypes'];
        }
        if (isset($map['PcLoginType'])) {
            $model->pcLoginType = $map['PcLoginType'];
        }
        if (isset($map['PcMfaTypes'])) {
            $model->pcMfaTypes = $map['PcMfaTypes'];
        }
        if (isset($map['TotpCorpVerifyAesKey'])) {
            $model->totpCorpVerifyAesKey = $map['TotpCorpVerifyAesKey'];
        }
        if (isset($map['TotpCorpVerifyToken'])) {
            $model->totpCorpVerifyToken = $map['TotpCorpVerifyToken'];
        }
        if (isset($map['TotpCorpVerifyUrl'])) {
            $model->totpCorpVerifyUrl = $map['TotpCorpVerifyUrl'];
        }

        return $model;
    }
}
