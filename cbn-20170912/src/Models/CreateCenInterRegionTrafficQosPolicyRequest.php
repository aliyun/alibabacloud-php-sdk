<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateCenInterRegionTrafficQosPolicyRequest\trafficQosQueues;

class CreateCenInterRegionTrafficQosPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $bandwidthGuaranteeMode;
    /**
     * @var string
     */
    public $clientToken;
    /**
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
     * @var string
     */
    public $trafficQosPolicyDescription;
    /**
     * @var string
     */
    public $trafficQosPolicyName;
    /**
     * @var trafficQosQueues[]
     */
    public $trafficQosQueues;
    /**
     * @var string
     */
    public $transitRouterAttachmentId;
    /**
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
        if (\is_array($this->trafficQosQueues)) {
            Model::validateArray($this->trafficQosQueues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->trafficQosQueues)) {
                $res['TrafficQosQueues'] = [];
                $n1                      = 0;
                foreach ($this->trafficQosQueues as $item1) {
                    $res['TrafficQosQueues'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1                      = 0;
                foreach ($map['TrafficQosQueues'] as $item1) {
                    $model->trafficQosQueues[$n1++] = trafficQosQueues::fromMap($item1);
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
