<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeCustomEventCountResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeCustomEventCountResponseBody\customEventCounts\customEventCount;

class customEventCounts extends Model
{
    /**
     * @var customEventCount[]
     */
    public $customEventCount;
    protected $_name = [
        'customEventCount' => 'CustomEventCount',
    ];

    public function validate()
    {
        if (\is_array($this->customEventCount)) {
            Model::validateArray($this->customEventCount);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customEventCount) {
            if (\is_array($this->customEventCount)) {
                $res['CustomEventCount'] = [];
                $n1 = 0;
                foreach ($this->customEventCount as $item1) {
                    $res['CustomEventCount'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CustomEventCount'])) {
            if (!empty($map['CustomEventCount'])) {
                $model->customEventCount = [];
                $n1 = 0;
                foreach ($map['CustomEventCount'] as $item1) {
                    $model->customEventCount[$n1] = customEventCount::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
