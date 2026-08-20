<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketPageQueryProductResponseBody\data\products\buyRule\contactRule;

use AlibabaCloud\Dara\Model;

class contactFieldRule extends Model
{
    /**
     * @var bool
     */
    public $certificate;

    /**
     * @var int[]
     */
    public $certificateTypes;

    /**
     * @var bool
     */
    public $dialingCode;

    /**
     * @var bool
     */
    public $email;

    /**
     * @var bool
     */
    public $firstName;

    /**
     * @var bool
     */
    public $lastName;

    /**
     * @var bool
     */
    public $mobile;

    /**
     * @var bool
     */
    public $name;
    protected $_name = [
        'certificate' => 'Certificate',
        'certificateTypes' => 'CertificateTypes',
        'dialingCode' => 'DialingCode',
        'email' => 'Email',
        'firstName' => 'FirstName',
        'lastName' => 'LastName',
        'mobile' => 'Mobile',
        'name' => 'Name',
    ];

    public function validate()
    {
        if (\is_array($this->certificateTypes)) {
            Model::validateArray($this->certificateTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certificate) {
            $res['Certificate'] = $this->certificate;
        }

        if (null !== $this->certificateTypes) {
            if (\is_array($this->certificateTypes)) {
                $res['CertificateTypes'] = [];
                $n1 = 0;
                foreach ($this->certificateTypes as $item1) {
                    $res['CertificateTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Certificate'])) {
            $model->certificate = $map['Certificate'];
        }

        if (isset($map['CertificateTypes'])) {
            if (!empty($map['CertificateTypes'])) {
                $model->certificateTypes = [];
                $n1 = 0;
                foreach ($map['CertificateTypes'] as $item1) {
                    $model->certificateTypes[$n1] = $item1;
                    ++$n1;
                }
            }
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
