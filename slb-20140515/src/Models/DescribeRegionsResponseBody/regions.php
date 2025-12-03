<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeRegionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeRegionsResponseBody\regions\region;

class regions extends Model
{
    /**
     * @var region[]
     */
    public $region;
    protected $_name = [
        'region' => 'Region',
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
                $res['Region'] = [];
                $n1 = 0;
                foreach ($this->region as $item1) {
                    $res['Region'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Region'])) {
            if (!empty($map['Region'])) {
                $model->region = [];
                $n1 = 0;
                foreach ($map['Region'] as $item1) {
                    $model->region[$n1] = region::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
