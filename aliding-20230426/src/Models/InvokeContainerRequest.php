<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class InvokeContainerRequest extends Model
{
    /**
     * @var string
     */
    public $operationId;

    /**
     * @var string
     */
    public $params;
    protected $_name = [
        'operationId' => 'operationId',
        'params' => 'params',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operationId) {
            $res['operationId'] = $this->operationId;
        }

        if (null !== $this->params) {
            $res['params'] = $this->params;
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
        if (isset($map['operationId'])) {
            $model->operationId = $map['operationId'];
        }

        if (isset($map['params'])) {
            $model->params = $map['params'];
        }

        return $model;
    }
}
