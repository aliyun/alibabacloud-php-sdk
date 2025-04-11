<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribePublishedRouteEntriesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribePublishedRouteEntriesResponseBody\publishedRouteEntries\publishedRouteEntry;

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
        if (\is_array($this->publishedRouteEntry)) {
            Model::validateArray($this->publishedRouteEntry);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->publishedRouteEntry) {
            if (\is_array($this->publishedRouteEntry)) {
                $res['PublishedRouteEntry'] = [];
                $n1 = 0;
                foreach ($this->publishedRouteEntry as $item1) {
                    $res['PublishedRouteEntry'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PublishedRouteEntry'])) {
            if (!empty($map['PublishedRouteEntry'])) {
                $model->publishedRouteEntry = [];
                $n1 = 0;
                foreach ($map['PublishedRouteEntry'] as $item1) {
                    $model->publishedRouteEntry[$n1++] = publishedRouteEntry::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
