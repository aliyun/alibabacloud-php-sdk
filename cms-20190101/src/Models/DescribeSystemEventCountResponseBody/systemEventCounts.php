<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSystemEventCountResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSystemEventCountResponseBody\systemEventCounts\systemEventCount;

class systemEventCounts extends Model
{
    /**
     * @var systemEventCount[]
     */
    public $systemEventCount;
    protected $_name = [
        'systemEventCount' => 'SystemEventCount',
    ];

    public function validate()
    {
        if (\is_array($this->systemEventCount)) {
            Model::validateArray($this->systemEventCount);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->systemEventCount) {
            if (\is_array($this->systemEventCount)) {
                $res['SystemEventCount'] = [];
                $n1 = 0;
                foreach ($this->systemEventCount as $item1) {
                    $res['SystemEventCount'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SystemEventCount'])) {
            if (!empty($map['SystemEventCount'])) {
                $model->systemEventCount = [];
                $n1 = 0;
                foreach ($map['SystemEventCount'] as $item1) {
                    $model->systemEventCount[$n1] = systemEventCount::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
