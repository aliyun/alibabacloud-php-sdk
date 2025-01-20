<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBInitializeVariableResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBInitializeVariableResponseBody\variables\variable;

class variables extends Model
{
    /**
     * @var variable[]
     */
    public $variable;
    protected $_name = [
        'variable' => 'Variable',
    ];

    public function validate()
    {
        if (\is_array($this->variable)) {
            Model::validateArray($this->variable);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->variable) {
            if (\is_array($this->variable)) {
                $res['Variable'] = [];
                $n1              = 0;
                foreach ($this->variable as $item1) {
                    $res['Variable'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Variable'])) {
            if (!empty($map['Variable'])) {
                $model->variable = [];
                $n1              = 0;
                foreach ($map['Variable'] as $item1) {
                    $model->variable[$n1++] = variable::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
