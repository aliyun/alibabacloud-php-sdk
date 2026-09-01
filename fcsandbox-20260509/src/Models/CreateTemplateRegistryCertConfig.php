<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCSandbox\V20260509\Models;

use AlibabaCloud\Dara\Model;

class CreateTemplateRegistryCertConfig extends Model
{
    /**
     * @var bool
     */
    public $insecure;
    protected $_name = [
        'insecure' => 'insecure',
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

        return $model;
    }
}
