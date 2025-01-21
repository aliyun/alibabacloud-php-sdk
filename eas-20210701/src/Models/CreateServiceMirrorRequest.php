<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;

class CreateServiceMirrorRequest extends Model
{
    /**
     * @var int
     */
    public $ratio;
    /**
     * @var string[]
     */
    public $target;
    protected $_name = [
        'ratio'  => 'Ratio',
        'target' => 'Target',
    ];

    public function validate()
    {
        if (\is_array($this->target)) {
            Model::validateArray($this->target);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ratio) {
            $res['Ratio'] = $this->ratio;
        }

        if (null !== $this->target) {
            if (\is_array($this->target)) {
                $res['Target'] = [];
                $n1            = 0;
                foreach ($this->target as $item1) {
                    $res['Target'][$n1++] = $item1;
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
        if (isset($map['Ratio'])) {
            $model->ratio = $map['Ratio'];
        }

        if (isset($map['Target'])) {
            if (!empty($map['Target'])) {
                $model->target = [];
                $n1            = 0;
                foreach ($map['Target'] as $item1) {
                    $model->target[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
