<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Igraph\V20210621\Models;

use AlibabaCloud\Tea\Model;

class ListIgraphInstancesShrinkRequest extends Model
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
     * @var string
     */
    public $tagsShrink;
    protected $_name = [
        'pageContinue'    => 'pageContinue',
        'pageLimit'       => 'pageLimit',
        'resourceGroupId' => 'resourceGroupId',
        'tagsShrink'      => 'tags',
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
        if (null !== $this->tagsShrink) {
            $res['tags'] = $this->tagsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIgraphInstancesShrinkRequest
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
            $model->tagsShrink = $map['tags'];
        }

        return $model;
    }
}
