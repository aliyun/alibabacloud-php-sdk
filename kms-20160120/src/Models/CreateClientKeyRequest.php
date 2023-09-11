<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class CreateClientKeyRequest extends Model
{
    /**
     * @example aap_test
     *
     * @var string
     */
    public $aapName;

    /**
     * @example 2028-08-31T17:14:33Z
     *
     * @var string
     */
    public $notAfter;

    /**
     * @example 2023-08-31T17:14:33Z
     *
     * @var string
     */
    public $notBefore;

    /**
     * @example bcfefe15-46f0****
     *
     * @var string
     */
    public $password;
    protected $_name = [
        'aapName'   => 'AapName',
        'notAfter'  => 'NotAfter',
        'notBefore' => 'NotBefore',
        'password'  => 'Password',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aapName) {
            $res['AapName'] = $this->aapName;
        }
        if (null !== $this->notAfter) {
            $res['NotAfter'] = $this->notAfter;
        }
        if (null !== $this->notBefore) {
            $res['NotBefore'] = $this->notBefore;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateClientKeyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AapName'])) {
            $model->aapName = $map['AapName'];
        }
        if (isset($map['NotAfter'])) {
            $model->notAfter = $map['NotAfter'];
        }
        if (isset($map['NotBefore'])) {
            $model->notBefore = $map['NotBefore'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        return $model;
    }
}
