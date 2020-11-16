<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterVideoResourcesResponse;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterVideoResourcesResponse\videoResources\videoResource;
use AlibabaCloud\Tea\Model;

class videoResources extends Model
{
    /**
     * @var videoResource[]
     */
    public $videoResource;
    protected $_name = [
        'videoResource' => 'VideoResource',
    ];

    public function validate()
    {
        Model::validateRequired('videoResource', $this->videoResource, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoResource) {
            $res['VideoResource'] = [];
            if (null !== $this->videoResource && \is_array($this->videoResource)) {
                $n = 0;
                foreach ($this->videoResource as $item) {
                    $res['VideoResource'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoResources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoResource'])) {
            if (!empty($map['VideoResource'])) {
                $model->videoResource = [];
                $n                    = 0;
                foreach ($map['VideoResource'] as $item) {
                    $model->videoResource[$n++] = null !== $item ? videoResource::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
