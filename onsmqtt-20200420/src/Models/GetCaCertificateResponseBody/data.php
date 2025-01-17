<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models\GetCaCertificateResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $caContent;
    /**
     * @var string
     */
    public $caName;
    /**
     * @var string
     */
    public $registrationCode;
    /**
     * @var string
     */
    public $sn;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $validBegin;
    /**
     * @var string
     */
    public $validEnd;
    /**
     * @var string
     */
    public $verificationContent;
    protected $_name = [
        'caContent'           => 'CaContent',
        'caName'              => 'CaName',
        'registrationCode'    => 'RegistrationCode',
        'sn'                  => 'Sn',
        'status'              => 'Status',
        'validBegin'          => 'ValidBegin',
        'validEnd'            => 'ValidEnd',
        'verificationContent' => 'VerificationContent',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->caContent) {
            $res['CaContent'] = $this->caContent;
        }

        if (null !== $this->caName) {
            $res['CaName'] = $this->caName;
        }

        if (null !== $this->registrationCode) {
            $res['RegistrationCode'] = $this->registrationCode;
        }

        if (null !== $this->sn) {
            $res['Sn'] = $this->sn;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->validBegin) {
            $res['ValidBegin'] = $this->validBegin;
        }

        if (null !== $this->validEnd) {
            $res['ValidEnd'] = $this->validEnd;
        }

        if (null !== $this->verificationContent) {
            $res['VerificationContent'] = $this->verificationContent;
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
        if (isset($map['CaContent'])) {
            $model->caContent = $map['CaContent'];
        }

        if (isset($map['CaName'])) {
            $model->caName = $map['CaName'];
        }

        if (isset($map['RegistrationCode'])) {
            $model->registrationCode = $map['RegistrationCode'];
        }

        if (isset($map['Sn'])) {
            $model->sn = $map['Sn'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['ValidBegin'])) {
            $model->validBegin = $map['ValidBegin'];
        }

        if (isset($map['ValidEnd'])) {
            $model->validEnd = $map['ValidEnd'];
        }

        if (isset($map['VerificationContent'])) {
            $model->verificationContent = $map['VerificationContent'];
        }

        return $model;
    }
}
