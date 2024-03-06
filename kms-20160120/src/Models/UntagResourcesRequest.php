<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class UntagResourcesRequest extends Model
{
    /**
     * @description Specifies whether to remove all tags from resources. Valid values:
     *
     *   true
     *   false (default)
     *
     * >  This parameter takes effect only when you specify an empty tag key.
     * @example false
     *
     * @var bool
     */
    public $all;

    /**
     * @description The region ID of the resource.
     *
     * >  You can call the [DescribeRegions](~~601478~~) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The IDs of the resources from which you want to remove tags. You can enter up to 50 resource IDs.
     *
     * Enter multiple resource IDs in the `["ResourceId.1","ResourceId.2",...]` format.
     * @var string[]
     */
    public $resourceId;

    /**
     * @description The type of the resource from which you want to remove tags. Valid values:
     *
     *   key
     *   secret
     *
     * @example key
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The keys of the tags that you want to remove. You can enter up to 20 tag keys.
     *
     * >  The tag key cannot start with aliyun or acs:.
     * @var string[]
     */
    public $tagKey;
    protected $_name = [
        'all'          => 'All',
        'regionId'     => 'RegionId',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
     * @return UntagResourcesRequest
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
