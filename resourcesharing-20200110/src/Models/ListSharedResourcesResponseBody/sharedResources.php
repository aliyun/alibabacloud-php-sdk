<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListSharedResourcesResponseBody;

use AlibabaCloud\Tea\Model;

class sharedResources extends Model
{
    /**
     * @description The time when the shared resource was associated with the resource share.
     *
     * @example 2020-12-07T07:39:02.921Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the shared resource.
     *
     * @example vsw-bp1upw03qyz8n7us9****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The ID of the resource share.
     *
     * @example rs-6GRmdD3X****
     *
     * @var string
     */
    public $resourceShareId;

    /**
     * @description The status of the shared resource. This parameter is returned only when you query the resources that other accounts share with you.
     *
     * Valid values:
     *
     *   Available: The resource is available.
     *   ZonalResourceInaccessible: The resource is unavailable in the current zone.
     *   LimitExceeded: The resource is unavailable because the maximum number of resources that other accounts can share with you exceeds the upper limit.
     *   Unavailable: The resource is unavailable.
     *
     * @example Available
     *
     * @var string
     */
    public $resourceStatus;

    /**
     * @description The cause of the association failure.
     *
     * @example The reason for the association failure.
     *
     * @var string
     */
    public $resourceStatusMessage;

    /**
     * @description The type of the shared resource.
     *
     * For more information about the types of resources that can be shared, see [Services that work with Resource Sharing](~~450526~~).
     * @example VSwitch
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The time when the association of the shared resource was updated.
     *
     * @example 2020-12-07T07:39:02.921Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'            => 'CreateTime',
        'resourceId'            => 'ResourceId',
        'resourceShareId'       => 'ResourceShareId',
        'resourceStatus'        => 'ResourceStatus',
        'resourceStatusMessage' => 'ResourceStatusMessage',
        'resourceType'          => 'ResourceType',
        'updateTime'            => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceShareId) {
            $res['ResourceShareId'] = $this->resourceShareId;
        }
        if (null !== $this->resourceStatus) {
            $res['ResourceStatus'] = $this->resourceStatus;
        }
        if (null !== $this->resourceStatusMessage) {
            $res['ResourceStatusMessage'] = $this->resourceStatusMessage;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sharedResources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceShareId'])) {
            $model->resourceShareId = $map['ResourceShareId'];
        }
        if (isset($map['ResourceStatus'])) {
            $model->resourceStatus = $map['ResourceStatus'];
        }
        if (isset($map['ResourceStatusMessage'])) {
            $model->resourceStatusMessage = $map['ResourceStatusMessage'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
