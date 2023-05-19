<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class UntagDcdnResourcesRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $all;

    /**
     * @example example.com
     *
     * @var string[]
     */
    public $resourceId;

    /**
     * @example DOMAIN
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example env
     *
     * @var string[]
     */
    public $tagKey;
    protected $_name = [
        'all'          => 'All',
        'resourceId'   => 'ResourceId',
        'resourceType' => 'ResourceType',
        'tagKey'       => 'TagKey',
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
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UntagDcdnResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['All'])) {
            $model->all = $map['All'];
        }
        if (isset($map['ResourceId'])) {
            if (!empty($map['ResourceId'])) {
                $model->resourceId = $map['ResourceId'];
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['TagKey'])) {
            if (!empty($map['TagKey'])) {
                $model->tagKey = $map['TagKey'];
            }
        }

        return $model;
    }
}
