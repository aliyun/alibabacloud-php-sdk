<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribePublishedRouteEntriesResponseBody\publishedRouteEntries\publishedRouteEntry;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribePublishedRouteEntriesResponseBody\publishedRouteEntries\publishedRouteEntry\conflicts\conflict;
use AlibabaCloud\Tea\Model;

class conflicts extends Model
{
    /**
     * @var conflict[]
     */
    public $conflict;
    protected $_name = [
        'conflict' => 'Conflict',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conflict) {
            $res['Conflict'] = [];
            if (null !== $this->conflict && \is_array($this->conflict)) {
                $n = 0;
                foreach ($this->conflict as $item) {
                    $res['Conflict'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conflicts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Conflict'])) {
            if (!empty($map['Conflict'])) {
                $model->conflict = [];
                $n               = 0;
                foreach ($map['Conflict'] as $item) {
                    $model->conflict[$n++] = null !== $item ? conflict::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
