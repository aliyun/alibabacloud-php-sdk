<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class UntagResourcesShrinkRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $all;

    /**
     * @description Specifies whether to delete all tags. This parameter takes effect only when the TagKeys parameter is not specified. Valid values: true and false. Default value: false. The TagKeys parameter is required when this parameter is set to false.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description You can call this operation to delete tags that are attached to one or more resources.
     *
     * @example ["templateName1","templateName2"]
     *
     * @var string
     */
    public $resourceIdsShrink;

    /**
     * @example template
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example ["k1","k2"]
     *
     * @var string
     */
    public $tagKeysShrink;
    protected $_name = [
        'all'               => 'All',
        'regionId'          => 'RegionId',
        'resourceIdsShrink' => 'ResourceIds',
        'resourceType'      => 'ResourceType',
        'tagKeysShrink'     => 'TagKeys',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->all) {
            $res['All'] = $this->all;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceIdsShrink) {
            $res['ResourceIds'] = $this->resourceIdsShrink;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->tagKeysShrink) {
            $res['TagKeys'] = $this->tagKeysShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UntagResourcesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['All'])) {
            $model->all = $map['All'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceIds'])) {
            $model->resourceIdsShrink = $map['ResourceIds'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['TagKeys'])) {
            $model->tagKeysShrink = $map['TagKeys'];
        }

        return $model;
    }
}
