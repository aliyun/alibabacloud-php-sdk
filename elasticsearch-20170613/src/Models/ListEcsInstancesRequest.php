<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class ListEcsInstancesRequest extends Model
{
    /**
     * @example ["i-bp13y63575oypr9d****","i-bp1gyhphjaj73jsr****"]
     *
     * @var string
     */
    public $ecsInstanceIds;

    /**
     * @example test
     *
     * @var string
     */
    public $ecsInstanceName;

    /**
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @example 10
     *
     * @var int
     */
    public $size;

    /**
     * @example [{ "tagKey":"a","tagValue":"b"}]
     *
     * @var string
     */
    public $tags;

    /**
     * @example vpc-bp16k1dvzxtmagcva****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'ecsInstanceIds'  => 'ecsInstanceIds',
        'ecsInstanceName' => 'ecsInstanceName',
        'page'            => 'page',
        'size'            => 'size',
        'tags'            => 'tags',
        'vpcId'           => 'vpcId',
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
        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEcsInstancesRequest
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
        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        return $model;
    }
}
