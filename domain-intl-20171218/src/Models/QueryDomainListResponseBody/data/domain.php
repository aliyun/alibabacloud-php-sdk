<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryDomainListResponseBody\data;

use AlibabaCloud\Tea\Model;

class domain extends Model
{
    /**
     * @example FAILED
     *
     * @var string
     */
    public $domainAuditStatus;

    /**
     * @example jwssc8.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example 1
     *
     * @var string
     */
    public $domainStatus;

    /**
     * @example New gTLD
     *
     * @var string
     */
    public $domainType;

    /**
     * @example -30
     *
     * @var int
     */
    public $expirationCurrDateDiff;

    /**
     * @example Nov 02,2019 04:00:45
     *
     * @var string
     */
    public $expirationDate;

    /**
     * @example 1522080000000
     *
     * @var int
     */
    public $expirationDateLong;

    /**
     * @example 1
     *
     * @var string
     */
    public $expirationDateStatus;

    /**
     * @example ST49P7TZLDAWSH2
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example False
     *
     * @var bool
     */
    public $premium;

    /**
     * @example 2
     *
     * @var string
     */
    public $productId;

    /**
     * @example 1
     *
     * @var string
     */
    public $registrantType;

    /**
     * @example Nov 02,2017 04:00:45
     *
     * @var string
     */
    public $registrationDate;

    /**
     * @example 1522080000000
     *
     * @var int
     */
    public $registrationDateLong;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'domainAuditStatus'      => 'DomainAuditStatus',
        'domainName'             => 'DomainName',
        'domainStatus'           => 'DomainStatus',
        'domainType'             => 'DomainType',
        'expirationCurrDateDiff' => 'ExpirationCurrDateDiff',
        'expirationDate'         => 'ExpirationDate',
        'expirationDateLong'     => 'ExpirationDateLong',
        'expirationDateStatus'   => 'ExpirationDateStatus',
        'instanceId'             => 'InstanceId',
        'premium'                => 'Premium',
        'productId'              => 'ProductId',
        'registrantType'         => 'RegistrantType',
        'registrationDate'       => 'RegistrationDate',
        'registrationDateLong'   => 'RegistrationDateLong',
        'remark'                 => 'Remark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainAuditStatus) {
            $res['DomainAuditStatus'] = $this->domainAuditStatus;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainStatus) {
            $res['DomainStatus'] = $this->domainStatus;
        }
        if (null !== $this->domainType) {
            $res['DomainType'] = $this->domainType;
        }
        if (null !== $this->expirationCurrDateDiff) {
            $res['ExpirationCurrDateDiff'] = $this->expirationCurrDateDiff;
        }
        if (null !== $this->expirationDate) {
            $res['ExpirationDate'] = $this->expirationDate;
        }
        if (null !== $this->expirationDateLong) {
            $res['ExpirationDateLong'] = $this->expirationDateLong;
        }
        if (null !== $this->expirationDateStatus) {
            $res['ExpirationDateStatus'] = $this->expirationDateStatus;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->premium) {
            $res['Premium'] = $this->premium;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->registrantType) {
            $res['RegistrantType'] = $this->registrantType;
        }
        if (null !== $this->registrationDate) {
            $res['RegistrationDate'] = $this->registrationDate;
        }
        if (null !== $this->registrationDateLong) {
            $res['RegistrationDateLong'] = $this->registrationDateLong;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domain
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainAuditStatus'])) {
            $model->domainAuditStatus = $map['DomainAuditStatus'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainStatus'])) {
            $model->domainStatus = $map['DomainStatus'];
        }
        if (isset($map['DomainType'])) {
            $model->domainType = $map['DomainType'];
        }
        if (isset($map['ExpirationCurrDateDiff'])) {
            $model->expirationCurrDateDiff = $map['ExpirationCurrDateDiff'];
        }
        if (isset($map['ExpirationDate'])) {
            $model->expirationDate = $map['ExpirationDate'];
        }
        if (isset($map['ExpirationDateLong'])) {
            $model->expirationDateLong = $map['ExpirationDateLong'];
        }
        if (isset($map['ExpirationDateStatus'])) {
            $model->expirationDateStatus = $map['ExpirationDateStatus'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Premium'])) {
            $model->premium = $map['Premium'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['RegistrantType'])) {
            $model->registrantType = $map['RegistrantType'];
        }
        if (isset($map['RegistrationDate'])) {
            $model->registrationDate = $map['RegistrationDate'];
        }
        if (isset($map['RegistrationDateLong'])) {
            $model->registrationDateLong = $map['RegistrationDateLong'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
