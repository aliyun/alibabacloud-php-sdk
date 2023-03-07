<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetCustomerAccountInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The type of the account. A value of 1 indicates an enterprise account. A value of 0 indicates an individual account.
     *
     * @example 1
     *
     * @var string
     */
    public $accountType;

    /**
     * @description The business status of the customer. Valid values:
     *
     * TrusteeshipCancel: The business is not hosted.
     * @example Freeze
     *
     * @var string
     */
    public $creditLimitStatus;

    /**
     * @description The hosting status of the credit information and instances of the customer. If the credit information and instances of the customer are managed on Alibaba Cloud, Alibaba Cloud suspends a customer service upon overdue payment. Valid values:
     *
     * TRUSTEESHIP: The business of the customer is hosted.
     * @example FREEZE
     *
     * @var string
     */
    public $hostingStatus;

    /**
     * @description Indicates whether the account passes the real-name verification.
     *
     * @example true
     *
     * @var bool
     */
    public $isCertified;

    /**
     * @description The email address of the customer.
     *
     * @example xxxx@aliyun.com
     *
     * @var string
     */
    public $loginEmail;

    /**
     * @description The ID of the management account.
     *
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
