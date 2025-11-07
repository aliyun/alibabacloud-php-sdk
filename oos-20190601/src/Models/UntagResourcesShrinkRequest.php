<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;

class UntagResourcesShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $all;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceIdsShrink;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $tagKeysShrink;
    protected $_name = [
        'all' => 'All',
        'regionId' => 'RegionId',
        'resourceIdsShrink' => 'ResourceIds',
        'resourceType' => 'ResourceType',
        'tagKeysShrink' => 'TagKeys',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
