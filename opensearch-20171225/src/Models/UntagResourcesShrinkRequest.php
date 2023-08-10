<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class UntagResourcesShrinkRequest extends Model
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
     * @var string
     */
    public $resourceIdShrink;

    /**
     * @description The resource type.
     *
     * @example ProductVersion
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The keys of tags. You can specify a maximum number of 20 keys.
     *
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
