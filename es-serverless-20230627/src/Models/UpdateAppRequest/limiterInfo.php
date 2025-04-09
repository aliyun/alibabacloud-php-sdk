<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models\UpdateAppRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\UpdateAppRequest\limiterInfo\limiters;

class limiterInfo extends Model
{
    /**
     * @var limiters[]
     */
    public $limiters;
    protected $_name = [
        'limiters' => 'limiters',
    ];

    public function validate()
    {
        if (\is_array($this->limiters)) {
            Model::validateArray($this->limiters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->limiters) {
            if (\is_array($this->limiters)) {
                $res['limiters'] = [];
                $n1 = 0;
                foreach ($this->limiters as $item1) {
                    $res['limiters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['limiters'])) {
            if (!empty($map['limiters'])) {
                $model->limiters = [];
                $n1 = 0;
                foreach ($map['limiters'] as $item1) {
                    $model->limiters[$n1++] = limiters::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
