<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\containers\securityContext;

use AlibabaCloud\Dara\Model;

class capability extends Model
{
    /**
     * @var string[]
     */
    public $add;
    protected $_name = [
        'add' => 'Add',
    ];

    public function validate()
    {
        if (\is_array($this->add)) {
            Model::validateArray($this->add);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->add) {
            if (\is_array($this->add)) {
                $res['Add'] = [];
                $n1 = 0;
                foreach ($this->add as $item1) {
                    $res['Add'][$n1++] = $item1;
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
        if (isset($map['Add'])) {
            if (!empty($map['Add'])) {
                $model->add = [];
                $n1 = 0;
                foreach ($map['Add'] as $item1) {
                    $model->add[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
