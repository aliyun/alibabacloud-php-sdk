<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypls\V20170830\Models;

use AlibabaCloud\SDK\Dypls\V20170830\Models\GetEinvoicePdfDataRequest\customer;
use AlibabaCloud\Tea\Model;

class GetEinvoicePdfDataRequest extends Model
{
    /**
     * @var string
     */
    public $appCode;

    /**
     * @var customer
     */
    public $customer;

    /**
     * @var string[]
     */
    public $encryptProps;

    /**
     * @var string
     */
    public $invoiceCode;

    /**
     * @var string
     */
    public $invoiceNo;

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
        'appCode'      => 'AppCode',
        'customer'     => 'Customer',
        'encryptProps' => 'EncryptProps',
        'invoiceCode'  => 'InvoiceCode',
        'invoiceNo'    => 'InvoiceNo',
        'language'     => 'Language',
        'sign'         => 'Sign',
        'uuid'         => 'Uuid',
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
        if (null !== $this->customer) {
            $res['Customer'] = null !== $this->customer ? $this->customer->toMap() : null;
        }
        if (null !== $this->encryptProps) {
            $res['EncryptProps'] = $this->encryptProps;
        }
        if (null !== $this->invoiceCode) {
            $res['InvoiceCode'] = $this->invoiceCode;
        }
        if (null !== $this->invoiceNo) {
            $res['InvoiceNo'] = $this->invoiceNo;
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
     * @return GetEinvoicePdfDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }
        if (isset($map['Customer'])) {
            $model->customer = customer::fromMap($map['Customer']);
        }
        if (isset($map['EncryptProps'])) {
            $model->encryptProps = $map['EncryptProps'];
        }
        if (isset($map['InvoiceCode'])) {
            $model->invoiceCode = $map['InvoiceCode'];
        }
        if (isset($map['InvoiceNo'])) {
            $model->invoiceNo = $map['InvoiceNo'];
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
