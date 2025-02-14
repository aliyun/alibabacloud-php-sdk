<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class UpdateHttpApiOperationRequest extends Model
{
    /**
     * @var HttpApiOperation
     */
    public $operation;
    protected $_name = [
        'operation' => 'operation',
    ];

    public function validate()
    {
        if (null !== $this->operation) {
            $this->operation->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operation) {
            $res['operation'] = null !== $this->operation ? $this->operation->toArray($noStream) : $this->operation;
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
        if (isset($map['operation'])) {
            $model->operation = HttpApiOperation::fromMap($map['operation']);
        }

        return $model;
    }
}
