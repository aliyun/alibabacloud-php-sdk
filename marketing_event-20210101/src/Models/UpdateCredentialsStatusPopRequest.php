<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101\Models;

use AlibabaCloud\Tea\Model;

class UpdateCredentialsStatusPopRequest extends Model
{
    /**
     * @example 4546-100000
     *
     * @var string
     */
    public $code;

    /**
     * @example 张三
     *
     * @var string
     */
    public $proxyRecipientName;

    /**
     * @example 14787627188
     *
     * @var string
     */
    public $proxyRecipientPhoneNumber;

    /**
     * @example Z30
     *
     * @var string
     */
    public $receiptLocation;

    /**
     * @example 429005111100000
     *
     * @var string
     */
    public $time;
    protected $_name = [
        'code'                      => 'Code',
        'proxyRecipientName'        => 'ProxyRecipientName',
        'proxyRecipientPhoneNumber' => 'ProxyRecipientPhoneNumber',
        'receiptLocation'           => 'ReceiptLocation',
        'time'                      => 'Time',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return UpdateCredentialsStatusPopRequest
     */
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
