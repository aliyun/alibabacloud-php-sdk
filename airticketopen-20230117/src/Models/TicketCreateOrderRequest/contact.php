<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketCreateOrderRequest;

use AlibabaCloud\Dara\Model;

class contact extends Model
{
    /**
     * @var string
     */
    public $certificateNo;

    /**
     * @var int
     */
    public $certificateType;

    /**
     * @var string
     */
    public $dialingCode;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $firstName;

    /**
     * @var string
     */
    public $lastName;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'certificateNo' => 'CertificateNo',
        'certificateType' => 'CertificateType',
        'dialingCode' => 'DialingCode',
        'email' => 'Email',
        'firstName' => 'FirstName',
        'lastName' => 'LastName',
        'mobile' => 'Mobile',
        'name' => 'Name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certificateNo) {
            $res['CertificateNo'] = $this->certificateNo;
        }

        if (null !== $this->certificateType) {
            $res['CertificateType'] = $this->certificateType;
        }

        if (null !== $this->dialingCode) {
            $res['DialingCode'] = $this->dialingCode;
        }

        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->firstName) {
            $res['FirstName'] = $this->firstName;
        }

        if (null !== $this->lastName) {
            $res['LastName'] = $this->lastName;
        }

        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['CertificateNo'])) {
            $model->certificateNo = $map['CertificateNo'];
        }

        if (isset($map['CertificateType'])) {
            $model->certificateType = $map['CertificateType'];
        }

        if (isset($map['DialingCode'])) {
            $model->dialingCode = $map['DialingCode'];
        }

        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['FirstName'])) {
            $model->firstName = $map['FirstName'];
        }

        if (isset($map['LastName'])) {
            $model->lastName = $map['LastName'];
        }

        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
