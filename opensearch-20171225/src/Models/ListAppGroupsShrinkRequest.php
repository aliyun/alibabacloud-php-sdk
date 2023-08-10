<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class ListAppGroupsShrinkRequest extends Model
{
    /**
     * @description ops-cn-xxxx
     *
     * @example ops-cn-xxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description my_name
     *
     * @example my_name
     *
     * @var string
     */
    public $name;

    /**
     * @description 1
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 10
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description ""
     *
     * @example "110123123"
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description 0
     *
     * @example 0
     *
     * @var int
     */
    public $sortBy;

    /**
     * @var string
     */
    public $tagsShrink;

    /**
     * @description standard
     *
     * @example standard
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'instanceId'      => 'instanceId',
        'name'            => 'name',
        'pageNumber'      => 'pageNumber',
        'pageSize'        => 'pageSize',
        'resourceGroupId' => 'resourceGroupId',
        'sortBy'          => 'sortBy',
        'tagsShrink'      => 'tags',
        'type'            => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->sortBy) {
            $res['sortBy'] = $this->sortBy;
        }
        if (null !== $this->tagsShrink) {
            $res['tags'] = $this->tagsShrink;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAppGroupsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }
        if (isset($map['sortBy'])) {
            $model->sortBy = $map['sortBy'];
        }
        if (isset($map['tags'])) {
            $model->tagsShrink = $map['tags'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
