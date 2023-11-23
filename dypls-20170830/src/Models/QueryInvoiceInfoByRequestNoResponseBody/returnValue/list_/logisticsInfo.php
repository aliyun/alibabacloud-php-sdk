<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypls\V20170830\Models\QueryInvoiceInfoByRequestNoResponseBody\returnValue\list_;

use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryInvoiceInfoByRequestNoResponseBody\returnValue\list_\logisticsInfo\customer;
use AlibabaCloud\Tea\Model;

class logisticsInfo extends Model
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
    public $gmtSend;

    /**
     * @var string
     */
    public $invoiceCode;

    /**
     * @var string
     */
    public $invoiceDate;

    /**
     * @var int
     */
    public $invoiceId;

    /**
     * @var string
     */
    public $invoiceNo;

    /**
     * @var string
     */
    public $invoiceNos;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $logisticsCompanies;

    /**
     * @var string
     */
    public $relatedId;

    /**
     * @var string
     */
    public $sender;

    /**
     * @var string
     */
    public $sign;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var string
     */
    public $trackingNumber;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'appCode'            => 'AppCode',
        'customer'           => 'Customer',
        'encryptProps'       => 'EncryptProps',
        'gmtSend'            => 'GmtSend',
        'invoiceCode'        => 'InvoiceCode',
        'invoiceDate'        => 'InvoiceDate',
        'invoiceId'          => 'InvoiceId',
        'invoiceNo'          => 'InvoiceNo',
        'invoiceNos'         => 'InvoiceNos',
        'language'           => 'Language',
        'logisticsCompanies' => 'LogisticsCompanies',
        'relatedId'          => 'RelatedId',
        'sender'             => 'Sender',
        'sign'               => 'Sign',
        'timestamp'          => 'Timestamp',
        'trackingNumber'     => 'TrackingNumber',
        'uuid'               => 'Uuid',
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
        if (null !== $this->gmtSend) {
            $res['GmtSend'] = $this->gmtSend;
        }
        if (null !== $this->invoiceCode) {
            $res['InvoiceCode'] = $this->invoiceCode;
        }
        if (null !== $this->invoiceDate) {
            $res['InvoiceDate'] = $this->invoiceDate;
        }
        if (null !== $this->invoiceId) {
            $res['InvoiceId'] = $this->invoiceId;
        }
        if (null !== $this->invoiceNo) {
            $res['InvoiceNo'] = $this->invoiceNo;
        }
        if (null !== $this->invoiceNos) {
            $res['InvoiceNos'] = $this->invoiceNos;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->logisticsCompanies) {
            $res['LogisticsCompanies'] = $this->logisticsCompanies;
        }
        if (null !== $this->relatedId) {
            $res['RelatedId'] = $this->relatedId;
        }
        if (null !== $this->sender) {
            $res['Sender'] = $this->sender;
        }
        if (null !== $this->sign) {
            $res['Sign'] = $this->sign;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->trackingNumber) {
            $res['TrackingNumber'] = $this->trackingNumber;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logisticsInfo
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
        if (isset($map['GmtSend'])) {
            $model->gmtSend = $map['GmtSend'];
        }
        if (isset($map['InvoiceCode'])) {
            $model->invoiceCode = $map['InvoiceCode'];
        }
        if (isset($map['InvoiceDate'])) {
            $model->invoiceDate = $map['InvoiceDate'];
        }
        if (isset($map['InvoiceId'])) {
            $model->invoiceId = $map['InvoiceId'];
        }
        if (isset($map['InvoiceNo'])) {
            $model->invoiceNo = $map['InvoiceNo'];
        }
        if (isset($map['InvoiceNos'])) {
            $model->invoiceNos = $map['InvoiceNos'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['LogisticsCompanies'])) {
            $model->logisticsCompanies = $map['LogisticsCompanies'];
        }
        if (isset($map['RelatedId'])) {
            $model->relatedId = $map['RelatedId'];
        }
        if (isset($map['Sender'])) {
            $model->sender = $map['Sender'];
        }
        if (isset($map['Sign'])) {
            $model->sign = $map['Sign'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['TrackingNumber'])) {
            $model->trackingNumber = $map['TrackingNumber'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
