<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListSharedResourcesResponseBody;

use AlibabaCloud\Tea\Model;

class sharedResources extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceShareId;

    /**
     * @var string
     */
    public $resourceStatus;

    /**
     * @var string
     */
    public $resourceStatusMessage;

    /**
     * @var string
     */
    public $resourceType;

    /**
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
