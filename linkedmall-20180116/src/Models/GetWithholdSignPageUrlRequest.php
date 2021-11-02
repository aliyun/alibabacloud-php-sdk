<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class GetWithholdSignPageUrlRequest extends Model
{
    /**
     * @var string
     */
    public $deviceType;

    /**
     * @var string
     */
    public $extInfo;

    /**
     * @var string
     */
    public $externalAgreementNo;

    /**
     * @var string
     */
    public $identityParameters;

    /**
     * @var string
     */
    public $merchantId;

    /**
     * @var string
     */
    public $merchantServiceDescription;

    /**
     * @var string
     */
    public $merchantServiceName;

    /**
     * @var string
     */
    public $notifyUrl;

    /**
     * @var string
     */
    public $outRequestNo;

    /**
     * @var string
     */
    public $returnUrl;
    protected $_name = [
        'deviceType'                 => 'DeviceType',
        'extInfo'                    => 'ExtInfo',
        'externalAgreementNo'        => 'ExternalAgreementNo',
        'identityParameters'         => 'IdentityParameters',
        'merchantId'                 => 'MerchantId',
        'merchantServiceDescription' => 'MerchantServiceDescription',
        'merchantServiceName'        => 'MerchantServiceName',
        'notifyUrl'                  => 'NotifyUrl',
        'outRequestNo'               => 'OutRequestNo',
        'returnUrl'                  => 'ReturnUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->externalAgreementNo) {
            $res['ExternalAgreementNo'] = $this->externalAgreementNo;
        }
        if (null !== $this->identityParameters) {
            $res['IdentityParameters'] = $this->identityParameters;
        }
        if (null !== $this->merchantId) {
            $res['MerchantId'] = $this->merchantId;
        }
        if (null !== $this->merchantServiceDescription) {
            $res['MerchantServiceDescription'] = $this->merchantServiceDescription;
        }
        if (null !== $this->merchantServiceName) {
            $res['MerchantServiceName'] = $this->merchantServiceName;
        }
        if (null !== $this->notifyUrl) {
            $res['NotifyUrl'] = $this->notifyUrl;
        }
        if (null !== $this->outRequestNo) {
            $res['OutRequestNo'] = $this->outRequestNo;
        }
        if (null !== $this->returnUrl) {
            $res['ReturnUrl'] = $this->returnUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWithholdSignPageUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['ExternalAgreementNo'])) {
            $model->externalAgreementNo = $map['ExternalAgreementNo'];
        }
        if (isset($map['IdentityParameters'])) {
            $model->identityParameters = $map['IdentityParameters'];
        }
        if (isset($map['MerchantId'])) {
            $model->merchantId = $map['MerchantId'];
        }
        if (isset($map['MerchantServiceDescription'])) {
            $model->merchantServiceDescription = $map['MerchantServiceDescription'];
        }
        if (isset($map['MerchantServiceName'])) {
            $model->merchantServiceName = $map['MerchantServiceName'];
        }
        if (isset($map['NotifyUrl'])) {
            $model->notifyUrl = $map['NotifyUrl'];
        }
        if (isset($map['OutRequestNo'])) {
            $model->outRequestNo = $map['OutRequestNo'];
        }
        if (isset($map['ReturnUrl'])) {
            $model->returnUrl = $map['ReturnUrl'];
        }

        return $model;
    }
}
