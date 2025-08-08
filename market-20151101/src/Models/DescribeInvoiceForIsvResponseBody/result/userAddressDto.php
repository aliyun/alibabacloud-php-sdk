<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeInvoiceForIsvResponseBody\result;

use AlibabaCloud\Dara\Model;

class userAddressDto extends Model
{
    /**
     * @var string
     */
    public $addressee;

    /**
     * @var string
     */
    public $aliyunPk;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $deliveryAddress;

    /**
     * @var string
     */
    public $emails;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $postalCode;
    protected $_name = [
        'addressee' => 'Addressee',
        'aliyunPk' => 'AliyunPk',
        'bizType' => 'BizType',
        'deliveryAddress' => 'DeliveryAddress',
        'emails' => 'Emails',
        'phone' => 'Phone',
        'postalCode' => 'PostalCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addressee) {
            $res['Addressee'] = $this->addressee;
        }

        if (null !== $this->aliyunPk) {
            $res['AliyunPk'] = $this->aliyunPk;
        }

        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->deliveryAddress) {
            $res['DeliveryAddress'] = $this->deliveryAddress;
        }

        if (null !== $this->emails) {
            $res['Emails'] = $this->emails;
        }

        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }

        if (null !== $this->postalCode) {
            $res['PostalCode'] = $this->postalCode;
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
        if (isset($map['Addressee'])) {
            $model->addressee = $map['Addressee'];
        }

        if (isset($map['AliyunPk'])) {
            $model->aliyunPk = $map['AliyunPk'];
        }

        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['DeliveryAddress'])) {
            $model->deliveryAddress = $map['DeliveryAddress'];
        }

        if (isset($map['Emails'])) {
            $model->emails = $map['Emails'];
        }

        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }

        if (isset($map['PostalCode'])) {
            $model->postalCode = $map['PostalCode'];
        }

        return $model;
    }
}
