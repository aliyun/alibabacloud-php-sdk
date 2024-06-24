<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class UntagResourcesShrinkRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $all;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $resourceIdShrink;

    /**
     * @description This parameter is required.
     *
     * @example instance
     *
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $tagKeyShrink;
    protected $_name = [
        'all'              => 'all',
        'resourceIdShrink' => 'resourceId',
        'resourceType'     => 'resourceType',
        'tagKeyShrink'     => 'tagKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->all) {
            $res['all'] = $this->all;
        }
        if (null !== $this->resourceIdShrink) {
            $res['resourceId'] = $this->resourceIdShrink;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }
        if (null !== $this->tagKeyShrink) {
            $res['tagKey'] = $this->tagKeyShrink;
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
        if (isset($map['all'])) {
            $model->all = $map['all'];
        }
        if (isset($map['resourceId'])) {
            $model->resourceIdShrink = $map['resourceId'];
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }
        if (isset($map['tagKey'])) {
            $model->tagKeyShrink = $map['tagKey'];
        }

        return $model;
    }
}
