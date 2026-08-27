<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetMigrationTaskResponseBody\data;

use AlibabaCloud\Dara\Model;

class ingressConfig extends Model
{
    /**
     * @var string
     */
    public $ingressClass;

    /**
     * @var string
     */
    public $watchNamespace;
    protected $_name = [
        'ingressClass' => 'ingressClass',
        'watchNamespace' => 'watchNamespace',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ingressClass) {
            $res['ingressClass'] = $this->ingressClass;
        }

        if (null !== $this->watchNamespace) {
            $res['watchNamespace'] = $this->watchNamespace;
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
        if (isset($map['ingressClass'])) {
            $model->ingressClass = $map['ingressClass'];
        }

        if (isset($map['watchNamespace'])) {
            $model->watchNamespace = $map['watchNamespace'];
        }

        return $model;
    }
}
