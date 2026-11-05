<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ada\V20260701\Models\ListModelsResponseBody\models;

use AlibabaCloud\Dara\Model;

class capabilities extends Model
{
    /**
     * @var string[]
     */
    public $inputModalities;
    protected $_name = [
        'inputModalities' => 'InputModalities',
    ];

    public function validate()
    {
        if (\is_array($this->inputModalities)) {
            Model::validateArray($this->inputModalities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inputModalities) {
            if (\is_array($this->inputModalities)) {
                $res['InputModalities'] = [];
                $n1 = 0;
                foreach ($this->inputModalities as $item1) {
                    $res['InputModalities'][$n1] = $item1;
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
        if (isset($map['InputModalities'])) {
            if (!empty($map['InputModalities'])) {
                $model->inputModalities = [];
                $n1 = 0;
                foreach ($map['InputModalities'] as $item1) {
                    $model->inputModalities[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
