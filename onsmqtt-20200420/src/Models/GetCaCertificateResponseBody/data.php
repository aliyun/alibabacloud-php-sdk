<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models\GetCaCertificateResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example -----BEGIN CERTIFICATE-----\nMIIDuzCCAqdGVzdC5jbi1xaW5n******\n-----END CERTIFICATE-----
     *
     * @var string
     */
    public $caContent;

    /**
     * @example mqtt_ca
     *
     * @var string
     */
    public $caName;

    /**
     * @example 13274673-8f90-4630-bea1-9cccb25756ad2089******
     *
     * @var string
     */
    public $registrationCode;

    /**
     * @example 00f26900ba87******
     *
     * @var string
     */
    public $sn;

    /**
     * @example 1
     *
     * @var string
     */
    public $status;

    /**
     * @example 1654137303000
     *
     * @var string
     */
    public $validBegin;

    /**
     * @example 1969497303000
     *
     * @var string
     */
    public $validEnd;

    /**
     * @example -----BEGIN CERTIFICATE-----\nMIID/DCCAu+Y5sRMpp9tnd+4s******\n-----END CERTIFICATE-----
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
