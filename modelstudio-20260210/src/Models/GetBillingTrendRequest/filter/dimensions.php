<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetBillingTrendRequest\filter;

use AlibabaCloud\Dara\Model;

class dimensions extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $selectType;

    /**
     * @var string[]
     */
    public $values;
    protected $_name = [
        'code' => 'code',
        'selectType' => 'selectType',
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
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->selectType) {
            $res['selectType'] = $this->selectType;
        }

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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['selectType'])) {
            $model->selectType = $map['selectType'];
        }

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
