<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypls\V20170830\Models\GetEinvoicePdfDataResponseBody;

use AlibabaCloud\Tea\Model;

class returnValue extends Model
{
    /**
     * @var string
     */
    public $appCode;

    /**
     * @var int[]
     */
    public $EInvoiceData;

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
        'EInvoiceData' => 'EInvoiceData',
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
        if (null !== $this->EInvoiceData) {
            $res['EInvoiceData'] = $this->EInvoiceData;
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
     * @return returnValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }
        if (isset($map['EInvoiceData'])) {
            if (!empty($map['EInvoiceData'])) {
                $model->EInvoiceData = $map['EInvoiceData'];
            }
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
