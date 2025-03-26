<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\ModifyEciScalingConfigurationRequest\containers\securityContext;

use AlibabaCloud\Dara\Model;

class capability extends Model
{
    /**
     * @var string[]
     */
    public $adds;
    protected $_name = [
        'adds' => 'Adds',
    ];

    public function validate()
    {
        if (\is_array($this->adds)) {
            Model::validateArray($this->adds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adds) {
            if (\is_array($this->adds)) {
                $res['Adds'] = [];
                $n1 = 0;
                foreach ($this->adds as $item1) {
                    $res['Adds'][$n1++] = $item1;
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
        if (isset($map['Adds'])) {
            if (!empty($map['Adds'])) {
                $model->adds = [];
                $n1 = 0;
                foreach ($map['Adds'] as $item1) {
                    $model->adds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
