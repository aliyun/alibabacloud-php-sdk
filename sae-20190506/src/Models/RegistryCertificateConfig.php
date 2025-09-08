<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class RegistryCertificateConfig extends Model
{
    /**
     * @var string
     */
    public $certBase64;

    /**
     * @var bool
     */
    public $insecure;
    protected $_name = [
        'certBase64' => 'CertBase64',
        'insecure' => 'Insecure',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certBase64) {
            $res['CertBase64'] = $this->certBase64;
        }

        if (null !== $this->insecure) {
            $res['Insecure'] = $this->insecure;
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
        if (isset($map['CertBase64'])) {
            $model->certBase64 = $map['CertBase64'];
        }

        if (isset($map['Insecure'])) {
            $model->insecure = $map['Insecure'];
        }

        return $model;
    }
}
