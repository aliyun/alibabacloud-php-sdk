<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sls\V20201230\Models\DescribeRegionsResponseBody\regions;

class DescribeRegionsResponseBody extends Model
{
    /**
     * @var regions[]
     */
    public $regions;
    protected $_name = [
        'regions' => 'regions',
    ];

    public function validate()
    {
        if (\is_array($this->regions)) {
            Model::validateArray($this->regions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regions) {
            if (\is_array($this->regions)) {
                $res['regions'] = [];
                $n1 = 0;
                foreach ($this->regions as $item1) {
                    $res['regions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['regions'])) {
            if (!empty($map['regions'])) {
                $model->regions = [];
                $n1 = 0;
                foreach ($map['regions'] as $item1) {
                    $model->regions[$n1] = regions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
