<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class ModifyInstanceMetadataOptionsRequest extends Model
{
    /**
     * @description Specifies whether to enable the access channel for instance metadata. Valid values:
     *
     *   enabled
     *   disabled
     *
     * > For more information about instance metadata, see [Overview of ECS instance metadata](~~49122~~).
     * @example enabled
     *
     * @var string
     */
    public $httpEndpoint;

    /**
     * @description > This parameter is in invitational preview and is not publicly available.
     *
     * @example 1
     *
     * @var int
     */
    public $httpPutResponseHopLimit;

    /**
     * @description Specifies whether to forcibly use the security hardening mode (IMDSv2) to access instance metadata. Valid values:
     *
     *   optional: does not forcibly use the security hardening mode (IMDSv2).
     *   required: forcibly uses the security hardening mode (IMDSv2). After you set this parameter to required, you cannot access instance metadata in normal mode.
     *
     * > For more information about the modes of accessing instance metadata, see [Access mode of instance metadata](~~150575~~).
     * @example optional
     *
     * @var string
     */
    public $httpTokens;

    /**
     * @description The ID of the instance.
     *
     * @example i-bp67acfmxaz****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description > This parameter is in invitational preview and is not publicly available.
     *
     * @example null
     *
     * @var string
     */
    public $instanceMetadataTags;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the instance. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'httpEndpoint'            => 'HttpEndpoint',
        'httpPutResponseHopLimit' => 'HttpPutResponseHopLimit',
        'httpTokens'              => 'HttpTokens',
        'instanceId'              => 'InstanceId',
        'instanceMetadataTags'    => 'InstanceMetadataTags',
        'ownerId'                 => 'OwnerId',
        'regionId'                => 'RegionId',
        'resourceOwnerAccount'    => 'ResourceOwnerAccount',
        'resourceOwnerId'         => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->httpEndpoint) {
            $res['HttpEndpoint'] = $this->httpEndpoint;
        }
        if (null !== $this->httpPutResponseHopLimit) {
            $res['HttpPutResponseHopLimit'] = $this->httpPutResponseHopLimit;
        }
        if (null !== $this->httpTokens) {
            $res['HttpTokens'] = $this->httpTokens;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceMetadataTags) {
            $res['InstanceMetadataTags'] = $this->instanceMetadataTags;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyInstanceMetadataOptionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HttpEndpoint'])) {
            $model->httpEndpoint = $map['HttpEndpoint'];
        }
        if (isset($map['HttpPutResponseHopLimit'])) {
            $model->httpPutResponseHopLimit = $map['HttpPutResponseHopLimit'];
        }
        if (isset($map['HttpTokens'])) {
            $model->httpTokens = $map['HttpTokens'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceMetadataTags'])) {
            $model->instanceMetadataTags = $map['InstanceMetadataTags'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
