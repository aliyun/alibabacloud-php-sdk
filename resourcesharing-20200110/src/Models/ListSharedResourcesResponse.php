<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListSharedResourcesResponse\sharedResources;
use AlibabaCloud\Tea\Model;

class ListSharedResourcesResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var sharedResources[]
     */
    public $sharedResources;
    protected $_name = [
        'requestId'       => 'RequestId',
        'nextToken'       => 'NextToken',
        'sharedResources' => 'SharedResources',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('nextToken', $this->nextToken, true);
        Model::validateRequired('sharedResources', $this->sharedResources, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
     * @return ListSharedResourcesResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
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
