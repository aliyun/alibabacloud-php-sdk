<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class CreateClientKeyRequest extends Model
{
    /**
     * @description The operation that you want to perform. Set the value to **CreateClientKey**.
     *
     * This parameter is required.
     * @example aap_test
     *
     * @var string
     */
    public $aapName;

    /**
     * @description The encryption password of the client key.
     *
     * The password must be 8 to 64 characters in length and must contain at least two of the following types: digits, letters, and special characters. Special characters include `~ ! @ # $ % ^ & * ? _ -`.
     * @example 2028-08-31T17:14:33Z
     *
     * @var string
     */
    public $notAfter;

    /**
     * @description The end of the validity period of the client key.
     *
     * >
     *
     *   If you do not configure NotAfter, the default value is the time when the client key was created plus five years.
     *   If you configure NotAfter, you must configure NotBefore.
     *
     * @example 2023-08-31T17:14:33Z
     *
     * @var string
     */
    public $notBefore;

    /**
     * @description The name of the AAP.
     *
     * This parameter is required.
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
