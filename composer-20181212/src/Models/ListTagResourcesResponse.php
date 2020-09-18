<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Composer\V20181212\Models;

use AlibabaCloud\SDK\Composer\V20181212\Models\ListTagResourcesResponse\tagResources;
use AlibabaCloud\Tea\Model;

class ListTagResourcesResponse extends Model
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
     * @var int
     */
    public $totalCount;

    /**
     * @var tagResources[]
     */
    public $tagResources;
    protected $_name = [
        'requestId'    => 'RequestId',
        'nextToken'    => 'NextToken',
        'totalCount'   => 'TotalCount',
        'tagResources' => 'TagResources',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('nextToken', $this->nextToken, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('tagResources', $this->tagResources, true);
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
     * @return ListTagResourcesResponse
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
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
