<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\ListDigitalEmployeesResponseBody\digitalEmployees;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListDigitalEmployeesResponseBody\digitalEmployees\knowledges\bailian;

class knowledges extends Model
{
    /**
     * @var bailian[]
     */
    public $bailian;

    /**
     * @var mixed[][]
     */
    public $sop;
    protected $_name = [
        'bailian' => 'bailian',
        'sop' => 'sop',
    ];

    public function validate()
    {
        if (\is_array($this->bailian)) {
            Model::validateArray($this->bailian);
        }
        if (\is_array($this->sop)) {
            Model::validateArray($this->sop);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bailian) {
            if (\is_array($this->bailian)) {
                $res['bailian'] = [];
                $n1 = 0;
                foreach ($this->bailian as $item1) {
                    $res['bailian'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sop) {
            if (\is_array($this->sop)) {
                $res['sop'] = [];
                $n1 = 0;
                foreach ($this->sop as $item1) {
                    if (\is_array($item1)) {
                        $res['sop'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['sop'][$n1][$key2] = $value2;
                        }
                    }
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
        if (isset($map['bailian'])) {
            if (!empty($map['bailian'])) {
                $model->bailian = [];
                $n1 = 0;
                foreach ($map['bailian'] as $item1) {
                    $model->bailian[$n1] = bailian::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['sop'])) {
            if (!empty($map['sop'])) {
                $model->sop = [];
                $n1 = 0;
                foreach ($map['sop'] as $item1) {
                    if (!empty($item1)) {
                        $model->sop[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->sop[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
