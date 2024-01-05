<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Igraph\V20210621\Models;

use AlibabaCloud\SDK\Igraph\V20210621\Models\ListIgraphInstancesRequest\tags;
use AlibabaCloud\Tea\Model;

class ListIgraphInstancesRequest extends Model
{
    /**
     * @var string
     */
    public $pageContinue;

    /**
     * @var string
     */
    public $pageLimit;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'pageContinue'    => 'pageContinue',
        'pageLimit'       => 'pageLimit',
        'resourceGroupId' => 'resourceGroupId',
        'tags'            => 'tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageContinue) {
            $res['pageContinue'] = $this->pageContinue;
        }
        if (null !== $this->pageLimit) {
            $res['pageLimit'] = $this->pageLimit;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }
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
     * @return ListIgraphInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['pageContinue'])) {
            $model->pageContinue = $map['pageContinue'];
        }
        if (isset($map['pageLimit'])) {
            $model->pageLimit = $map['pageLimit'];
        }
        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }
        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
