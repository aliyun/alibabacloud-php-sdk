<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeHaVipsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeHaVipsResponseBody\haVips\haVip;

class haVips extends Model
{
    /**
     * @var haVip[]
     */
    public $haVip;
    protected $_name = [
        'haVip' => 'HaVip',
    ];

    public function validate()
    {
        if (\is_array($this->haVip)) {
            Model::validateArray($this->haVip);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->haVip) {
            if (\is_array($this->haVip)) {
                $res['HaVip'] = [];
                $n1 = 0;
                foreach ($this->haVip as $item1) {
                    $res['HaVip'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['HaVip'])) {
            if (!empty($map['HaVip'])) {
                $model->haVip = [];
                $n1 = 0;
                foreach ($map['HaVip'] as $item1) {
                    $model->haVip[$n1++] = haVip::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
