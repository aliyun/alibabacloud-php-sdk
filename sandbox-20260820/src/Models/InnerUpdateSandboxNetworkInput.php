<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sandbox\V20260820\Models;

use AlibabaCloud\Dara\Model;

class InnerUpdateSandboxNetworkInput extends Model
{
    /**
     * @var bool
     */
    public $allowInternetAccess;

    /**
     * @var string[]
     */
    public $allowOut;

    /**
     * @var string[]
     */
    public $denyOut;

    /**
     * @var mixed[][][]
     */
    public $rules;
    protected $_name = [
        'allowInternetAccess' => 'allowInternetAccess',
        'allowOut' => 'allowOut',
        'denyOut' => 'denyOut',
        'rules' => 'rules',
    ];

    public function validate()
    {
        if (\is_array($this->allowOut)) {
            Model::validateArray($this->allowOut);
        }
        if (\is_array($this->denyOut)) {
            Model::validateArray($this->denyOut);
        }
        if (\is_array($this->rules)) {
            Model::validateArray($this->rules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowInternetAccess) {
            $res['allowInternetAccess'] = $this->allowInternetAccess;
        }

        if (null !== $this->allowOut) {
            if (\is_array($this->allowOut)) {
                $res['allowOut'] = [];
                $n1 = 0;
                foreach ($this->allowOut as $item1) {
                    $res['allowOut'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->denyOut) {
            if (\is_array($this->denyOut)) {
                $res['denyOut'] = [];
                $n1 = 0;
                foreach ($this->denyOut as $item1) {
                    $res['denyOut'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->rules) {
            if (\is_array($this->rules)) {
                $res['rules'] = [];
                foreach ($this->rules as $key1 => $value1) {
                    if (\is_array($value1)) {
                        $res['rules'][$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            if (\is_array($item2)) {
                                $res['rules'][$key1][$n2] = [];
                                foreach ($item2 as $key3 => $value3) {
                                    $res['rules'][$key1][$n2][$key3] = $value3;
                                }
                            }
                            ++$n2;
                        }
                    }
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
        if (isset($map['allowInternetAccess'])) {
            $model->allowInternetAccess = $map['allowInternetAccess'];
        }

        if (isset($map['allowOut'])) {
            if (!empty($map['allowOut'])) {
                $model->allowOut = [];
                $n1 = 0;
                foreach ($map['allowOut'] as $item1) {
                    $model->allowOut[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['denyOut'])) {
            if (!empty($map['denyOut'])) {
                $model->denyOut = [];
                $n1 = 0;
                foreach ($map['denyOut'] as $item1) {
                    $model->denyOut[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['rules'])) {
            if (!empty($map['rules'])) {
                $model->rules = [];
                foreach ($map['rules'] as $key1 => $value1) {
                    if (!empty($value1)) {
                        $model->rules[$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            if (!empty($item2)) {
                                $model->rules[$key1][$n2] = [];
                                foreach ($item2 as $key3 => $value3) {
                                    $model->rules[$key1][$n2][$key3] = $value3;
                                }
                            }
                            ++$n2;
                        }
                    }
                }
            }
        }

        return $model;
    }
}
