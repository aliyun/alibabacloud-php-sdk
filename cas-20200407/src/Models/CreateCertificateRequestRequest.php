<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class CreateCertificateRequestRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $username;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $validateType;
    protected $_name = [
        'sourceIp'     => 'SourceIp',
        'productCode'  => 'ProductCode',
        'username'     => 'Username',
        'phone'        => 'Phone',
        'email'        => 'Email',
        'domain'       => 'Domain',
        'validateType' => 'ValidateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->validateType) {
            $res['ValidateType'] = $this->validateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCertificateRequestRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['ValidateType'])) {
            $model->validateType = $map['ValidateType'];
        }

        return $model;
    }
}
