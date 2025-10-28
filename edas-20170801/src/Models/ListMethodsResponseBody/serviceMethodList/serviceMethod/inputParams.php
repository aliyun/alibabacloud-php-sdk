<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListMethodsResponseBody\serviceMethodList\serviceMethod;

use AlibabaCloud\Dara\Model;

class inputParams extends Model
{
    /**
     * @var string[]
     */
    public $inputParam;
    protected $_name = [
        'inputParam' => 'InputParam',
    ];

    public function validate()
    {
        if (\is_array($this->inputParam)) {
            Model::validateArray($this->inputParam);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inputParam) {
            if (\is_array($this->inputParam)) {
                $res['InputParam'] = [];
                $n1 = 0;
                foreach ($this->inputParam as $item1) {
                    $res['InputParam'][$n1] = $item1;
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
        if (isset($map['InputParam'])) {
            if (!empty($map['InputParam'])) {
                $model->inputParam = [];
                $n1 = 0;
                foreach ($map['InputParam'] as $item1) {
                    $model->inputParam[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
