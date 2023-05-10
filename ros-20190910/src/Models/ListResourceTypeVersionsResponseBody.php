<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\ListResourceTypeVersionsResponseBody\resourceTypeVersions;
use AlibabaCloud\Tea\Model;

class ListResourceTypeVersionsResponseBody extends Model
{
    /**
     * @example B288A0BE-D927-4888-B0F7-B35EF84B6E6F
     *
     * @var string
     */
    public $requestId;

    /**
     * @var resourceTypeVersions[]
     */
    public $resourceTypeVersions;
    protected $_name = [
        'requestId'            => 'RequestId',
        'resourceTypeVersions' => 'ResourceTypeVersions',
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
        if (null !== $this->resourceTypeVersions) {
            $res['ResourceTypeVersions'] = [];
            if (null !== $this->resourceTypeVersions && \is_array($this->resourceTypeVersions)) {
                $n = 0;
                foreach ($this->resourceTypeVersions as $item) {
                    $res['ResourceTypeVersions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListResourceTypeVersionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceTypeVersions'])) {
            if (!empty($map['ResourceTypeVersions'])) {
                $model->resourceTypeVersions = [];
                $n                           = 0;
                foreach ($map['ResourceTypeVersions'] as $item) {
                    $model->resourceTypeVersions[$n++] = null !== $item ? resourceTypeVersions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
