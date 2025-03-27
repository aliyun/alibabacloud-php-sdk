<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models\CreateCustomCertificateRequest\apiPassthrough\subject;

use AlibabaCloud\Dara\Model;

class customAttributes extends Model
{
    /**
     * @var string
     */
    public $objectIdentifier;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'objectIdentifier' => 'ObjectIdentifier',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->objectIdentifier) {
            $res['ObjectIdentifier'] = $this->objectIdentifier;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['ObjectIdentifier'])) {
            $model->objectIdentifier = $map['ObjectIdentifier'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
