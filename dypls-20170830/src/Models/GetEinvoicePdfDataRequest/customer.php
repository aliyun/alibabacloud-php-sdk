<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypls\V20170830\Models\GetEinvoicePdfDataRequest;

use AlibabaCloud\Tea\Model;

class customer extends Model
{
    /**
     * @var string
     */
    public $appCode;

    /**
     * @var string
     */
    public $customerId;

    /**
     * @var string
     */
    public $customerSite;

    /**
     * @var string
     */
    public $customerSystem;

    /**
     * @var string[]
     */
    public $encryptProps;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $sign;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'appCode'        => 'AppCode',
        'customerId'     => 'CustomerId',
        'customerSite'   => 'CustomerSite',
        'customerSystem' => 'CustomerSystem',
        'encryptProps'   => 'EncryptProps',
        'language'       => 'Language',
        'sign'           => 'Sign',
        'uuid'           => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }
        if (null !== $this->customerId) {
            $res['CustomerId'] = $this->customerId;
        }
        if (null !== $this->customerSite) {
            $res['CustomerSite'] = $this->customerSite;
        }
        if (null !== $this->customerSystem) {
            $res['CustomerSystem'] = $this->customerSystem;
        }
        if (null !== $this->encryptProps) {
            $res['EncryptProps'] = $this->encryptProps;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->sign) {
            $res['Sign'] = $this->sign;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customer
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }
        if (isset($map['CustomerId'])) {
            $model->customerId = $map['CustomerId'];
        }
        if (isset($map['CustomerSite'])) {
            $model->customerSite = $map['CustomerSite'];
        }
        if (isset($map['CustomerSystem'])) {
            $model->customerSystem = $map['CustomerSystem'];
        }
        if (isset($map['EncryptProps'])) {
            $model->encryptProps = $map['EncryptProps'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['Sign'])) {
            $model->sign = $map['Sign'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
