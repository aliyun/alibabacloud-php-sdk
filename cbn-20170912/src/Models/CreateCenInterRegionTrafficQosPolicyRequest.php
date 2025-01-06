<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateCenInterRegionTrafficQosPolicyRequest\trafficQosQueues;
use AlibabaCloud\Tea\Model;

class CreateCenInterRegionTrafficQosPolicyRequest extends Model
{
    /**
     * @description The allocation mode of the guaranteed bandwidth. You can specify an absolute bandwidth value or a bandwidth percentage. Valid values:
     *
     *   **byBandwidth**: allocates an absolute bandwidth value for the QoS queue.
     *   **byBandwidthPercent** (default): allocates a bandwidth percentage for the OoS queue.
     *
     * @example byBandwidthPercent
     *
     * @var string
     */
    public $bandwidthGuaranteeMode;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that it is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     * @example 123e4567-e89b-12d3-a456-426655****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether only to precheck the API request. Valid values:
     *
     *   **true**: prechecks the request but does not create the QoS policy. The system checks the required parameters, the request format, and the service limits. If the request fails the check, an error message is returned. If the request passes the check, the `DryRunOperation` error code is returned.
     *   **false**: sends the API request. If the request passes the precheck, the QoS policy is created. This is the default value.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The description of the QoS policy.
     *
     * This parameter is optional. If you enter a description, it must be 1 to 256 characters in length, and cannot start with http:// or https://.
     * @example desctest
     *
     * @var string
     */
    public $trafficQosPolicyDescription;

    /**
     * @description The name of the QoS policy.
     *
     * The name can be empty or 1 to 128 characters in length, and cannot start with http:// or https://.
     * @example nametest
     *
     * @var string
     */
    public $trafficQosPolicyName;

    /**
     * @description The information about the QoS queue.
     *
     * You can add at most three QoS queues in a QoS policy by calling this operation. To add more QoS queues, call the CreateCenInterRegionTrafficQosQueue operation.
     * @var trafficQosQueues[]
     */
    public $trafficQosQueues;

    /**
     * @description The ID of the inter-region connection.
     *
     * This parameter is required.
     * @example tr-attach-r6g0m3epjehw57****
     *
     * @var string
     */
    public $transitRouterAttachmentId;

    /**
     * @description The ID of the transit router.
     *
     * This parameter is required.
     * @example tr-8vbuqeo5h5pu3m01d****
     *
     * @var string
     */
    public $transitRouterId;
    protected $_name = [
        'bandwidthGuaranteeMode'      => 'BandwidthGuaranteeMode',
        'clientToken'                 => 'ClientToken',
        'dryRun'                      => 'DryRun',
        'ownerAccount'                => 'OwnerAccount',
        'ownerId'                     => 'OwnerId',
        'resourceOwnerAccount'        => 'ResourceOwnerAccount',
        'resourceOwnerId'             => 'ResourceOwnerId',
        'trafficQosPolicyDescription' => 'TrafficQosPolicyDescription',
        'trafficQosPolicyName'        => 'TrafficQosPolicyName',
        'trafficQosQueues'            => 'TrafficQosQueues',
        'transitRouterAttachmentId'   => 'TransitRouterAttachmentId',
        'transitRouterId'             => 'TransitRouterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidthGuaranteeMode) {
            $res['BandwidthGuaranteeMode'] = $this->bandwidthGuaranteeMode;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->trafficQosPolicyDescription) {
            $res['TrafficQosPolicyDescription'] = $this->trafficQosPolicyDescription;
        }
        if (null !== $this->trafficQosPolicyName) {
            $res['TrafficQosPolicyName'] = $this->trafficQosPolicyName;
        }
        if (null !== $this->trafficQosQueues) {
            $res['TrafficQosQueues'] = [];
            if (null !== $this->trafficQosQueues && \is_array($this->trafficQosQueues)) {
                $n = 0;
                foreach ($this->trafficQosQueues as $item) {
                    $res['TrafficQosQueues'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->transitRouterAttachmentId) {
            $res['TransitRouterAttachmentId'] = $this->transitRouterAttachmentId;
        }
        if (null !== $this->transitRouterId) {
            $res['TransitRouterId'] = $this->transitRouterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCenInterRegionTrafficQosPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BandwidthGuaranteeMode'])) {
            $model->bandwidthGuaranteeMode = $map['BandwidthGuaranteeMode'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['TrafficQosPolicyDescription'])) {
            $model->trafficQosPolicyDescription = $map['TrafficQosPolicyDescription'];
        }
        if (isset($map['TrafficQosPolicyName'])) {
            $model->trafficQosPolicyName = $map['TrafficQosPolicyName'];
        }
        if (isset($map['TrafficQosQueues'])) {
            if (!empty($map['TrafficQosQueues'])) {
                $model->trafficQosQueues = [];
                $n                       = 0;
                foreach ($map['TrafficQosQueues'] as $item) {
                    $model->trafficQosQueues[$n++] = null !== $item ? trafficQosQueues::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TransitRouterAttachmentId'])) {
            $model->transitRouterAttachmentId = $map['TransitRouterAttachmentId'];
        }
        if (isset($map['TransitRouterId'])) {
            $model->transitRouterId = $map['TransitRouterId'];
        }

        return $model;
    }
}
