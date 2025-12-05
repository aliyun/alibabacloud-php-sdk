<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;

class CreateClientKeyRequest extends Model
{
    /**
     * @var string
     */
    public $aapName;

    /**
     * @var string
     */
    public $notAfter;

    /**
     * @var string
     */
    public $notBefore;

    /**
     * @var string
     */
    public $password;
    protected $_name = [
        'aapName' => 'AapName',
        'notAfter' => 'NotAfter',
        'notBefore' => 'NotBefore',
        'password' => 'Password',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
