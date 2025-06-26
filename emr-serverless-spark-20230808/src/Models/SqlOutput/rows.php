<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\SqlOutput;

use AlibabaCloud\Dara\Model;

class rows extends Model
{
    /**
     * @var string[]
     */
    public $values;
    protected $_name = [
        'values' => 'values',
    ];

    public function validate()
    {
        if (\is_array($this->values)) {
            Model::validateArray($this->values);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->values) {
            if (\is_array($this->values)) {
                $res['values'] = [];
                $n1 = 0;
                foreach ($this->values as $item1) {
                    $res['values'][$n1] = $item1;
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
        if (isset($map['values'])) {
            if (!empty($map['values'])) {
                $model->values = [];
                $n1 = 0;
                foreach ($map['values'] as $item1) {
                    $model->values[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
