<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class CreateCertificateWithCsrRequestRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $csr;

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
    public $validateType;
    protected $_name = [
        'sourceIp'     => 'SourceIp',
        'csr'          => 'Csr',
        'productCode'  => 'ProductCode',
        'username'     => 'Username',
        'phone'        => 'Phone',
        'email'        => 'Email',
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
        if (null !== $this->csr) {
            $res['Csr'] = $this->csr;
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
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Csr'])) {
            $model->csr = $map['Csr'];
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
        if (isset($map['ValidateType'])) {
            $model->validateType = $map['ValidateType'];
        }

        return $model;
    }
}
