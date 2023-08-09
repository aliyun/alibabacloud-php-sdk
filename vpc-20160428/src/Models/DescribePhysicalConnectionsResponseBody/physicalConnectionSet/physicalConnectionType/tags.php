<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePhysicalConnectionsResponseBody\physicalConnectionSet\physicalConnectionType;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePhysicalConnectionsResponseBody\physicalConnectionSet\physicalConnectionType\tags\tags[]
     */
    public $tags;
    protected $_name = [
        'tags' => 'tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tags) {
            $res['tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? \AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePhysicalConnectionsResponseBody\physicalConnectionSet\physicalConnectionType\tags\tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
