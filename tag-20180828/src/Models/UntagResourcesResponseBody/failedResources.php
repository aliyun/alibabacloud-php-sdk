<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models\UntagResourcesResponseBody;

use AlibabaCloud\SDK\Tag\V20180828\Models\UntagResourcesResponseBody\failedResources\failedResource;
use AlibabaCloud\Tea\Model;

class failedResources extends Model
{
    /**
     * @var failedResource[]
     */
    public $failedResource;
    protected $_name = [
        'failedResource' => 'FailedResource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failedResource) {
            $res['FailedResource'] = [];
            if (null !== $this->failedResource && \is_array($this->failedResource)) {
                $n = 0;
                foreach ($this->failedResource as $item) {
                    $res['FailedResource'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failedResources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailedResource'])) {
            if (!empty($map['FailedResource'])) {
                $model->failedResource = [];
                $n                     = 0;
                foreach ($map['FailedResource'] as $item) {
                    $model->failedResource[$n++] = null !== $item ? failedResource::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
