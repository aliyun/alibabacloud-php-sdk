<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\STAROps\V20260428\Models\GetDigitalEmployeeResponseBody\toolPolicy;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\STAROps\V20260428\Models\AutoPassPolicy;

class global_ extends Model
{
    /**
     * @var AutoPassPolicy[]
     */
    public $autoPassPolicy;
    protected $_name = [
        'autoPassPolicy' => 'autoPassPolicy',
    ];

    public function validate()
    {
        if (\is_array($this->autoPassPolicy)) {
            Model::validateArray($this->autoPassPolicy);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoPassPolicy) {
            if (\is_array($this->autoPassPolicy)) {
                $res['autoPassPolicy'] = [];
                $n1 = 0;
                foreach ($this->autoPassPolicy as $item1) {
                    $res['autoPassPolicy'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['autoPassPolicy'])) {
            if (!empty($map['autoPassPolicy'])) {
                $model->autoPassPolicy = [];
                $n1 = 0;
                foreach ($map['autoPassPolicy'] as $item1) {
                    $model->autoPassPolicy[$n1] = AutoPassPolicy::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
