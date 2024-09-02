<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class UntagResourcesRequest extends Model
{
    /**
     * @description Specifies whether to remove all tags from the specified one or more resources. This parameter takes effect only if the tagKey parameter is not specified. Valid values: true and false. Default value: false.
     *
     * @example true
     *
     * @var bool
     */
    public $all;

    /**
     * @description The resource IDs. You can specify a maximum number of 50 IDs.
     *
     * This parameter is required.
     * @var string[]
     */
    public $resourceId;

    /**
     * @description The resource type.
     *
     * This parameter is required.
     * @example ProductVersion
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The keys of tags. You can specify a maximum number of 20 keys.
     *
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
