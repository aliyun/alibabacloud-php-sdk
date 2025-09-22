<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101\Models;

use AlibabaCloud\Dara\Model;

class UpdateCredentialsStatusPopRequest extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $proxyRecipientName;

    /**
     * @var string
     */
    public $proxyRecipientPhoneNumber;

    /**
     * @var string
     */
    public $receiptLocation;

    /**
     * @var string
     */
    public $time;
    protected $_name = [
        'code' => 'Code',
        'proxyRecipientName' => 'ProxyRecipientName',
        'proxyRecipientPhoneNumber' => 'ProxyRecipientPhoneNumber',
        'receiptLocation' => 'ReceiptLocation',
        'time' => 'Time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->proxyRecipientName) {
            $res['ProxyRecipientName'] = $this->proxyRecipientName;
        }

        if (null !== $this->proxyRecipientPhoneNumber) {
            $res['ProxyRecipientPhoneNumber'] = $this->proxyRecipientPhoneNumber;
        }

        if (null !== $this->receiptLocation) {
            $res['ReceiptLocation'] = $this->receiptLocation;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['ProxyRecipientName'])) {
            $model->proxyRecipientName = $map['ProxyRecipientName'];
        }

        if (isset($map['ProxyRecipientPhoneNumber'])) {
            $model->proxyRecipientPhoneNumber = $map['ProxyRecipientPhoneNumber'];
        }

        if (isset($map['ReceiptLocation'])) {
            $model->receiptLocation = $map['ReceiptLocation'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
