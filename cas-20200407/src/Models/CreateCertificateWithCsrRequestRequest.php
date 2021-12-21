<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class CreateCertificateWithCsrRequestRequest extends Model
{
    /**
     * @var string
     */
    public $csr;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $phone;

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
    public $validateType;
    protected $_name = [
        'csr'          => 'Csr',
        'email'        => 'Email',
        'phone'        => 'Phone',
        'productCode'  => 'ProductCode',
        'username'     => 'Username',
        'validateType' => 'ValidateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->csr) {
            $res['Csr'] = $this->csr;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }
        if (null !== $this->validateType) {
            $res['ValidateType'] = $this->validateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCertificateWithCsrRequestRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Csr'])) {
            $model->csr = $map['Csr'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }
        if (isset($map['ValidateType'])) {
            $model->validateType = $map['ValidateType'];
        }

        return $model;
    }
}
