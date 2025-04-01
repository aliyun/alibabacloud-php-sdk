<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class RegistryCertConfig extends Model
{
    /**
     * @var bool
     */
    public $insecure;

    /**
     * @var string
     */
    public $rootCaCertBase64;
    protected $_name = [
        'insecure' => 'insecure',
        'rootCaCertBase64' => 'rootCaCertBase64',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->insecure) {
            $res['insecure'] = $this->insecure;
        }

        if (null !== $this->rootCaCertBase64) {
            $res['rootCaCertBase64'] = $this->rootCaCertBase64;
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
        if (isset($map['insecure'])) {
            $model->insecure = $map['insecure'];
        }

        if (isset($map['rootCaCertBase64'])) {
            $model->rootCaCertBase64 = $map['rootCaCertBase64'];
        }

        return $model;
    }
}
