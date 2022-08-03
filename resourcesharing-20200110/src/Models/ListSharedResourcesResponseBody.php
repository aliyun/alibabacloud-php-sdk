<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListSharedResourcesResponseBody\sharedResources;
use AlibabaCloud\Tea\Model;

class ListSharedResourcesResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sharedResources[]
     */
    public $sharedResources;
    protected $_name = [
        'nextToken'       => 'NextToken',
        'requestId'       => 'RequestId',
        'sharedResources' => 'SharedResources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sharedResources) {
            $res['SharedResources'] = [];
            if (null !== $this->sharedResources && \is_array($this->sharedResources)) {
                $n = 0;
                foreach ($this->sharedResources as $item) {
                    $res['SharedResources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSharedResourcesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SharedResources'])) {
            if (!empty($map['SharedResources'])) {
                $model->sharedResources = [];
                $n                      = 0;
                foreach ($map['SharedResources'] as $item) {
                    $model->sharedResources[$n++] = null !== $item ? sharedResources::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
