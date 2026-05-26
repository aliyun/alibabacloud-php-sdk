<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models;

use AlibabaCloud\Dara\Model;

class HistoryThreeElementsVerificationRequest extends Model
{
    /**
     * @var string
     */
    public $authCode;

    /**
     * @var string
     */
    public $carrier;

    /**
     * @var string
     */
    public $certCode;

    /**
     * @var string
     */
    public $inputNumber;

    /**
     * @var string
     */
    public $mask;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $verificationTime;
    protected $_name = [
        'authCode' => 'AuthCode',
        'carrier' => 'Carrier',
        'certCode' => 'CertCode',
        'inputNumber' => 'InputNumber',
        'mask' => 'Mask',
        'name' => 'Name',
        'verificationTime' => 'VerificationTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authCode) {
            $res['AuthCode'] = $this->authCode;
        }

        if (null !== $this->carrier) {
            $res['Carrier'] = $this->carrier;
        }

        if (null !== $this->certCode) {
            $res['CertCode'] = $this->certCode;
        }

        if (null !== $this->inputNumber) {
            $res['InputNumber'] = $this->inputNumber;
        }

        if (null !== $this->mask) {
            $res['Mask'] = $this->mask;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->verificationTime) {
            $res['VerificationTime'] = $this->verificationTime;
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
        if (isset($map['AuthCode'])) {
            $model->authCode = $map['AuthCode'];
        }

        if (isset($map['Carrier'])) {
            $model->carrier = $map['Carrier'];
        }

        if (isset($map['CertCode'])) {
            $model->certCode = $map['CertCode'];
        }

        if (isset($map['InputNumber'])) {
            $model->inputNumber = $map['InputNumber'];
        }

        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['VerificationTime'])) {
            $model->verificationTime = $map['VerificationTime'];
        }

        return $model;
    }
}
