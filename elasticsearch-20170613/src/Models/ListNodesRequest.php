<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class ListNodesRequest extends Model
{
    /**
     * @description The IDs of the ECS instances.
     *
     * @example i-bp1ei8ysh7orb6eq****
     *
     * @var string
     */
    public $ecsInstanceIds;

    /**
     * @description The name of the ECS instance.
     *
     * @example test
     *
     * @var string
     */
    public $ecsInstanceName;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 10
     *
     * @var int
     */
    public $size;

    /**
     * @description The tags of the ECS instance. You must configure tagKey and tagValue.
     *
     * @example [{"tagKey":"abc","tagValue":"xyz"}]
     *
     * @var string
     */
    public $tags;
    protected $_name = [
        'ecsInstanceIds'  => 'ecsInstanceIds',
        'ecsInstanceName' => 'ecsInstanceName',
        'page'            => 'page',
        'size'            => 'size',
        'tags'            => 'tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecsInstanceIds) {
            $res['ecsInstanceIds'] = $this->ecsInstanceIds;
        }
        if (null !== $this->ecsInstanceName) {
            $res['ecsInstanceName'] = $this->ecsInstanceName;
        }
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->tags) {
            $res['tags'] = $this->tags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListNodesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ecsInstanceIds'])) {
            $model->ecsInstanceIds = $map['ecsInstanceIds'];
        }
        if (isset($map['ecsInstanceName'])) {
            $model->ecsInstanceName = $map['ecsInstanceName'];
        }
        if (isset($map['page'])) {
            $model->page = $map['page'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['tags'])) {
            $model->tags = $map['tags'];
        }

        return $model;
    }
}
