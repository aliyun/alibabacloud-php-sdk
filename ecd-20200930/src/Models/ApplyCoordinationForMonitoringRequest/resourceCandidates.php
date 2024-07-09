<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\ApplyCoordinationForMonitoringRequest;

use AlibabaCloud\Tea\Model;

class resourceCandidates extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account to which the current cloud desktop belongs.
     *
     * This parameter is required.
     * @example 130247021517****
     *
     * @var int
     */
    public $ownerAliUid;

    /**
     * @description The ID of the current end user.
     *
     * @example alice
     *
     * @var string
     */
    public $ownerEndUserId;

    /**
     * @description The ID of the cloud desktop.
     *
     * This parameter is required.
     * @example ecd-08zhejm3h7ilr****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The name of the cloud desktop.
     *
     * This parameter is required.
     * @example TestDesktop
     *
     * @var string
     */
    public $resourceName;

    /**
     * @description The properties of the cloud desktop.
     *
     * @example TestProperty
     *
     * @var string
     */
    public $resourceProperties;

    /**
     * @description The region where the resource resides.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $resourceRegionId;

    /**
     * @description The resource type.
     *
     * Set the value to CLOUD_DESKTOP.
     *
     *   The value CLOUD_DESKTOP specifies that the resource is a cloud desktop.
     *
     * This parameter is required.
     * @example CLOUD_DESKTOP
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'ownerAliUid'        => 'OwnerAliUid',
        'ownerEndUserId'     => 'OwnerEndUserId',
        'resourceId'         => 'ResourceId',
        'resourceName'       => 'ResourceName',
        'resourceProperties' => 'ResourceProperties',
        'resourceRegionId'   => 'ResourceRegionId',
        'resourceType'       => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerAliUid) {
            $res['OwnerAliUid'] = $this->ownerAliUid;
        }
        if (null !== $this->ownerEndUserId) {
            $res['OwnerEndUserId'] = $this->ownerEndUserId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->resourceProperties) {
            $res['ResourceProperties'] = $this->resourceProperties;
        }
        if (null !== $this->resourceRegionId) {
            $res['ResourceRegionId'] = $this->resourceRegionId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceCandidates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerAliUid'])) {
            $model->ownerAliUid = $map['OwnerAliUid'];
        }
        if (isset($map['OwnerEndUserId'])) {
            $model->ownerEndUserId = $map['OwnerEndUserId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['ResourceProperties'])) {
            $model->resourceProperties = $map['ResourceProperties'];
        }
        if (isset($map['ResourceRegionId'])) {
            $model->resourceRegionId = $map['ResourceRegionId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
