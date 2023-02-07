<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetCustomerAccountInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $accountType;

    /**
     * @example Freeze
     *
     * @var string
     */
    public $creditLimitStatus;

    /**
     * @example FREEZE
     *
     * @var string
     */
    public $hostingStatus;

    /**
     * @example true
     *
     * @var bool
     */
    public $isCertified;

    /**
     * @example xxxx@aliyun.com
     *
     * @var string
     */
    public $loginEmail;

    /**
     * @example 1051360339779133
     *
     * @var int
     */
    public $mpk;
    protected $_name = [
        'accountType'       => 'AccountType',
        'creditLimitStatus' => 'CreditLimitStatus',
        'hostingStatus'     => 'HostingStatus',
        'isCertified'       => 'IsCertified',
        'loginEmail'        => 'LoginEmail',
        'mpk'               => 'Mpk',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->creditLimitStatus) {
            $res['CreditLimitStatus'] = $this->creditLimitStatus;
        }
        if (null !== $this->hostingStatus) {
            $res['HostingStatus'] = $this->hostingStatus;
        }
        if (null !== $this->isCertified) {
            $res['IsCertified'] = $this->isCertified;
        }
        if (null !== $this->loginEmail) {
            $res['LoginEmail'] = $this->loginEmail;
        }
        if (null !== $this->mpk) {
            $res['Mpk'] = $this->mpk;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['CreditLimitStatus'])) {
            $model->creditLimitStatus = $map['CreditLimitStatus'];
        }
        if (isset($map['HostingStatus'])) {
            $model->hostingStatus = $map['HostingStatus'];
        }
        if (isset($map['IsCertified'])) {
            $model->isCertified = $map['IsCertified'];
        }
        if (isset($map['LoginEmail'])) {
            $model->loginEmail = $map['LoginEmail'];
        }
        if (isset($map['Mpk'])) {
            $model->mpk = $map['Mpk'];
        }

        return $model;
    }
}
