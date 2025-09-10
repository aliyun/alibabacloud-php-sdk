<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class MLServiceAnalysisParam extends Model
{
    /**
     * @var string[][]
     */
    public $input;

    /**
     * @var string[]
     */
    public $parameter;
    protected $_name = [
        'input' => 'input',
        'parameter' => 'parameter',
    ];

    public function validate()
    {
        if (\is_array($this->input)) {
            Model::validateArray($this->input);
        }
        if (\is_array($this->parameter)) {
            Model::validateArray($this->parameter);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->input) {
            if (\is_array($this->input)) {
                $res['input'] = [];
                $n1 = 0;
                foreach ($this->input as $item1) {
                    if (\is_array($item1)) {
                        $res['input'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['input'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->parameter) {
            if (\is_array($this->parameter)) {
                $res['parameter'] = [];
                foreach ($this->parameter as $key1 => $value1) {
                    $res['parameter'][$key1] = $value1;
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
        if (isset($map['input'])) {
            if (!empty($map['input'])) {
                $model->input = [];
                $n1 = 0;
                foreach ($map['input'] as $item1) {
                    if (!empty($item1)) {
                        $model->input[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->input[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['parameter'])) {
            if (!empty($map['parameter'])) {
                $model->parameter = [];
                foreach ($map['parameter'] as $key1 => $value1) {
                    $model->parameter[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
