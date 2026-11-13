<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\CreateLogicalModelRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateLogicalModelRequest\slots\complex;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateLogicalModelRequest\slots\simple;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateLogicalModelRequest\slots\standard;

class slots extends Model
{
    /**
     * @var complex[]
     */
    public $complex;

    /**
     * @var simple[]
     */
    public $simple;

    /**
     * @var standard[]
     */
    public $standard;
    protected $_name = [
        'complex' => 'complex',
        'simple' => 'simple',
        'standard' => 'standard',
    ];

    public function validate()
    {
        if (\is_array($this->complex)) {
            Model::validateArray($this->complex);
        }
        if (\is_array($this->simple)) {
            Model::validateArray($this->simple);
        }
        if (\is_array($this->standard)) {
            Model::validateArray($this->standard);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->complex) {
            if (\is_array($this->complex)) {
                $res['complex'] = [];
                $n1 = 0;
                foreach ($this->complex as $item1) {
                    $res['complex'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->simple) {
            if (\is_array($this->simple)) {
                $res['simple'] = [];
                $n1 = 0;
                foreach ($this->simple as $item1) {
                    $res['simple'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->standard) {
            if (\is_array($this->standard)) {
                $res['standard'] = [];
                $n1 = 0;
                foreach ($this->standard as $item1) {
                    $res['standard'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['complex'])) {
            if (!empty($map['complex'])) {
                $model->complex = [];
                $n1 = 0;
                foreach ($map['complex'] as $item1) {
                    $model->complex[$n1] = complex::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['simple'])) {
            if (!empty($map['simple'])) {
                $model->simple = [];
                $n1 = 0;
                foreach ($map['simple'] as $item1) {
                    $model->simple[$n1] = simple::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['standard'])) {
            if (!empty($map['standard'])) {
                $model->standard = [];
                $n1 = 0;
                foreach ($map['standard'] as $item1) {
                    $model->standard[$n1] = standard::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
