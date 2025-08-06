<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeBandwidthLimitationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeBandwidthLimitationResponseBody\bandwidths\bandwidth;

class bandwidths extends Model
{
    /**
     * @var bandwidth[]
     */
    public $bandwidth;
    protected $_name = [
        'bandwidth' => 'Bandwidth',
    ];

    public function validate()
    {
        if (\is_array($this->bandwidth)) {
            Model::validateArray($this->bandwidth);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bandwidth) {
            if (\is_array($this->bandwidth)) {
                $res['Bandwidth'] = [];
                $n1 = 0;
                foreach ($this->bandwidth as $item1) {
                    $res['Bandwidth'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Bandwidth'])) {
            if (!empty($map['Bandwidth'])) {
                $model->bandwidth = [];
                $n1 = 0;
                foreach ($map['Bandwidth'] as $item1) {
                    $model->bandwidth[$n1] = bandwidth::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
