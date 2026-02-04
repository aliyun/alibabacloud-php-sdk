<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetInstanceControlConfigurationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetInstanceControlConfigurationResponseBody\instanceControlConfiguration\controlElements;

class instanceControlConfiguration extends Model
{
    /**
     * @var controlElements[]
     */
    public $controlElements;
    protected $_name = [
        'controlElements' => 'ControlElements',
    ];

    public function validate()
    {
        if (\is_array($this->controlElements)) {
            Model::validateArray($this->controlElements);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->controlElements) {
            if (\is_array($this->controlElements)) {
                $res['ControlElements'] = [];
                $n1 = 0;
                foreach ($this->controlElements as $item1) {
                    $res['ControlElements'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ControlElements'])) {
            if (!empty($map['ControlElements'])) {
                $model->controlElements = [];
                $n1 = 0;
                foreach ($map['ControlElements'] as $item1) {
                    $model->controlElements[$n1] = controlElements::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
