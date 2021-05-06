<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribePublishedRouteEntriesResponseBody;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribePublishedRouteEntriesResponseBody\publishedRouteEntries\publishedRouteEntry;
use AlibabaCloud\Tea\Model;

class publishedRouteEntries extends Model
{
    /**
     * @var publishedRouteEntry[]
     */
    public $publishedRouteEntry;
    protected $_name = [
        'publishedRouteEntry' => 'PublishedRouteEntry',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->publishedRouteEntry) {
            $res['PublishedRouteEntry'] = [];
            if (null !== $this->publishedRouteEntry && \is_array($this->publishedRouteEntry)) {
                $n = 0;
                foreach ($this->publishedRouteEntry as $item) {
                    $res['PublishedRouteEntry'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return publishedRouteEntries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PublishedRouteEntry'])) {
            if (!empty($map['PublishedRouteEntry'])) {
                $model->publishedRouteEntry = [];
                $n                          = 0;
                foreach ($map['PublishedRouteEntry'] as $item) {
                    $model->publishedRouteEntry[$n++] = null !== $item ? publishedRouteEntry::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
