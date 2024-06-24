<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class UntagResourcesRequest extends Model
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
     * @var string[]
     */
    public $resourceId;

    /**
     * @description This parameter is required.
     *
     * @example instance
     *
     * @var string
     */
    public $resourceType;

    /**
     * @var string[]
     */
    public $tagKey;
    protected $_name = [
        'all'          => 'all',
        'resourceId'   => 'resourceId',
        'resourceType' => 'resourceType',
        'tagKey'       => 'tagKey',
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
        if (null !== $this->resourceId) {
            $res['resourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }
        if (null !== $this->tagKey) {
            $res['tagKey'] = $this->tagKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UntagResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['all'])) {
            $model->all = $map['all'];
        }
        if (isset($map['resourceId'])) {
            if (!empty($map['resourceId'])) {
                $model->resourceId = $map['resourceId'];
            }
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }
        if (isset($map['tagKey'])) {
            if (!empty($map['tagKey'])) {
                $model->tagKey = $map['tagKey'];
            }
        }

        return $model;
    }
}
