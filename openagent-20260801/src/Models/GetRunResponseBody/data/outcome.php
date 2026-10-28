<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAgent\V20260801\Models\GetRunResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenAgent\V20260801\Models\GetRunResponseBody\data\outcome\interrupts;

class outcome extends Model
{
    /**
     * @var interrupts[]
     */
    public $interrupts;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'interrupts' => 'interrupts',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->interrupts)) {
            Model::validateArray($this->interrupts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->interrupts) {
            if (\is_array($this->interrupts)) {
                $res['interrupts'] = [];
                $n1 = 0;
                foreach ($this->interrupts as $item1) {
                    $res['interrupts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['interrupts'])) {
            if (!empty($map['interrupts'])) {
                $model->interrupts = [];
                $n1 = 0;
                foreach ($map['interrupts'] as $item1) {
                    $model->interrupts[$n1] = interrupts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
