<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class CreateHttpApiOperationRequest extends Model
{
    /**
     * @var HttpApiOperation[]
     */
    public $operations;
    protected $_name = [
        'operations' => 'operations',
    ];

    public function validate()
    {
        if (\is_array($this->operations)) {
            Model::validateArray($this->operations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operations) {
            if (\is_array($this->operations)) {
                $res['operations'] = [];
                $n1 = 0;
                foreach ($this->operations as $item1) {
                    $res['operations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['operations'])) {
            if (!empty($map['operations'])) {
                $model->operations = [];
                $n1 = 0;
                foreach ($map['operations'] as $item1) {
                    $model->operations[$n1] = HttpApiOperation::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
