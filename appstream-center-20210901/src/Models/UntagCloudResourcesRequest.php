<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Tea\Model;

class UntagCloudResourcesRequest extends Model
{
    /**
     * @description The resource IDs. You can specify up to 50 resource IDs. You do not need to specify this parameter if you set ResourceType to AliUid.
     *
     * @var string[]
     */
    public $resourceIds;

    /**
     * @description The type of the resource from which you want to remove tags.
     *
     * Valid values:
     *
     *   AppId: app ID.
     *   WyId: Alibaba Cloud Workspace user ID.
     *   AppInstanceGroupId: delivery group ID.
     *   AliUid: tenant ID.
     *
     * This parameter is required.
     * @example AppInstanceGroupId
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The tags that you want to remove from the cloud resources. System and custom tags are supported. You can specify up to 10 tags.
     *
     * Valid values for system tags:
     *
     *   `System/Scheduler/GRAYSCALE`: canary tags.
     *   `System/Scheduler/STOP_NEW_USER_CONNECTION`: tags used to stop new users bound to the delivery group from establishing a connection.
     *
     * This parameter is required.
     * @var string[]
     */
    public $tagKeys;
    protected $_name = [
        'resourceIds'  => 'ResourceIds',
        'resourceType' => 'ResourceType',
        'tagKeys'      => 'TagKeys',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceIds) {
            $res['ResourceIds'] = $this->resourceIds;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->tagKeys) {
            $res['TagKeys'] = $this->tagKeys;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UntagCloudResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceIds'])) {
            if (!empty($map['ResourceIds'])) {
                $model->resourceIds = $map['ResourceIds'];
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['TagKeys'])) {
            if (!empty($map['TagKeys'])) {
                $model->tagKeys = $map['TagKeys'];
            }
        }

        return $model;
    }
}
