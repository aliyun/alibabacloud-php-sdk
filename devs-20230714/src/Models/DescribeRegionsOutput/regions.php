<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models\DescribeRegionsOutput;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devs\V20230714\Models\DescribeRegionsOutput\regions\region;

class regions extends Model
{
    /**
     * @var region[]
     */
    public $region;
    protected $_name = [
        'region' => 'region',
    ];

    public function validate()
    {
        if (\is_array($this->region)) {
            Model::validateArray($this->region);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->region) {
            if (\is_array($this->region)) {
                $res['region'] = [];
                $n1 = 0;
                foreach ($this->region as $item1) {
                    $res['region'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['region'])) {
            if (!empty($map['region'])) {
                $model->region = [];
                $n1 = 0;
                foreach ($map['region'] as $item1) {
                    $model->region[$n1] = region::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
