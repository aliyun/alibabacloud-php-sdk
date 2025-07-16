<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class CreateResourceResponseBody extends Model
{
    /**
     * @description The ID of the cluster to which the resource group belongs.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The instance IDs.
     *
     * @var string[]
     */
    public $instanceIds;

    /**
     * @description The user ID (UID) of the resource group owner.
     *
     * @example 14401087478****
     *
     * @var string
     */
    public $ownerUid;

    /**
     * @description The request ID.
     *
     * @example 40325405-579C-4D82****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the resource group.
     *
     * @example eas-r-h7lcw24dyqztwxxxxxx
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The name of the resource group.
     *
     * @example MyResource
     *
     * @var string
     */
    public $resourceName;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'instanceIds' => 'InstanceIds',
        'ownerUid' => 'OwnerUid',
        'requestId' => 'RequestId',
        'resourceId' => 'ResourceId',
        'resourceName' => 'ResourceName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->ownerUid) {
            $res['OwnerUid'] = $this->ownerUid;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateResourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['OwnerUid'])) {
            $model->ownerUid = $map['OwnerUid'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }

        return $model;
    }
}
