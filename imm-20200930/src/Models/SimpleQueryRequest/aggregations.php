<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\SimpleQueryRequest;

use AlibabaCloud\Dara\Model;

class aggregations extends Model
{
    /**
     * @var string
     */
    public $field;

    /**
     * @var string
     */
    public $operation;
    protected $_name = [
        'field' => 'Field',
        'operation' => 'Operation',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->field) {
            $res['Field'] = $this->field;
        }

        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
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
        if (isset($map['Field'])) {
            $model->field = $map['Field'];
        }

        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }

        return $model;
    }
}
