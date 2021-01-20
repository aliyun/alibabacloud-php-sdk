<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSystemEventCountResponseBody;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSystemEventCountResponseBody\systemEventCounts\systemEventCount;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->systemEventCount) {
            $res['SystemEventCount'] = [];
            if (null !== $this->systemEventCount && \is_array($this->systemEventCount)) {
                $n = 0;
                foreach ($this->systemEventCount as $item) {
                    $res['SystemEventCount'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return systemEventCounts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SystemEventCount'])) {
            if (!empty($map['SystemEventCount'])) {
                $model->systemEventCount = [];
                $n                       = 0;
                foreach ($map['SystemEventCount'] as $item) {
                    $model->systemEventCount[$n++] = null !== $item ? systemEventCount::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
