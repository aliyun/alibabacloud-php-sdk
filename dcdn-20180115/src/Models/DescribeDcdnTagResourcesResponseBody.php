<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnTagResourcesResponseBody\tagResources;
use AlibabaCloud\Tea\Model;

class DescribeDcdnTagResourcesResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 34AB41F1-04A5-496F-8C8D-634BDBE6A9FB
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The tag of the instance.
     *
     * @var tagResources[]
     */
    public $tagResources;
    protected $_name = [
        'requestId'    => 'RequestId',
        'tagResources' => 'TagResources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->tagResources) {
            $res['TagResources'] = [];
            if (null !== $this->tagResources && \is_array($this->tagResources)) {
                $n = 0;
                foreach ($this->tagResources as $item) {
                    $res['TagResources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnTagResourcesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TagResources'])) {
            if (!empty($map['TagResources'])) {
                $model->tagResources = [];
                $n                   = 0;
                foreach ($map['TagResources'] as $item) {
                    $model->tagResources[$n++] = null !== $item ? tagResources::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
