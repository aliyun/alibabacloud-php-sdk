<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeResourceByTagsResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeResourceByTagsResponseBody\resources\resource;
use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @var resource[]
     */
    public $resource;
    protected $_name = [
        'resource' => 'Resource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resource) {
            $res['Resource'] = [];
            if (null !== $this->resource && \is_array($this->resource)) {
                $n = 0;
                foreach ($this->resource as $item) {
                    $res['Resource'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Resource'])) {
            if (!empty($map['Resource'])) {
                $model->resource = [];
                $n               = 0;
                foreach ($map['Resource'] as $item) {
                    $model->resource[$n++] = null !== $item ? resource::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
