<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;

class CreateCenInterRegionTrafficQosQueueRequest extends Model
{
    /**
     * @var int
     */
    public $bandwidth;
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var bool
     */
    public $dryRun;
    /**
     * @var int[]
     */
    public $dscps;
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
    public $qosQueueDescription;
    /**
     * @var string
     */
    public $qosQueueName;
    /**
     * @var string
     */
    public $remainBandwidthPercent;
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
    public $trafficQosPolicyId;
    protected $_name = [
        'bandwidth'              => 'Bandwidth',
        'clientToken'            => 'ClientToken',
        'dryRun'                 => 'DryRun',
        'dscps'                  => 'Dscps',
        'ownerAccount'           => 'OwnerAccount',
        'ownerId'                => 'OwnerId',
        'qosQueueDescription'    => 'QosQueueDescription',
        'qosQueueName'           => 'QosQueueName',
        'remainBandwidthPercent' => 'RemainBandwidthPercent',
        'resourceOwnerAccount'   => 'ResourceOwnerAccount',
        'resourceOwnerId'        => 'ResourceOwnerId',
        'trafficQosPolicyId'     => 'TrafficQosPolicyId',
    ];

    public function validate()
    {
        if (\is_array($this->dscps)) {
            Model::validateArray($this->dscps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->dscps) {
            if (\is_array($this->dscps)) {
                $res['Dscps'] = [];
                $n1           = 0;
                foreach ($this->dscps as $item1) {
                    $res['Dscps'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->qosQueueDescription) {
            $res['QosQueueDescription'] = $this->qosQueueDescription;
        }

        if (null !== $this->qosQueueName) {
            $res['QosQueueName'] = $this->qosQueueName;
        }

        if (null !== $this->remainBandwidthPercent) {
            $res['RemainBandwidthPercent'] = $this->remainBandwidthPercent;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->trafficQosPolicyId) {
            $res['TrafficQosPolicyId'] = $this->trafficQosPolicyId;
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
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['Dscps'])) {
            if (!empty($map['Dscps'])) {
                $model->dscps = [];
                $n1           = 0;
                foreach ($map['Dscps'] as $item1) {
                    $model->dscps[$n1++] = $item1;
                }
            }
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['QosQueueDescription'])) {
            $model->qosQueueDescription = $map['QosQueueDescription'];
        }

        if (isset($map['QosQueueName'])) {
            $model->qosQueueName = $map['QosQueueName'];
        }

        if (isset($map['RemainBandwidthPercent'])) {
            $model->remainBandwidthPercent = $map['RemainBandwidthPercent'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['TrafficQosPolicyId'])) {
            $model->trafficQosPolicyId = $map['TrafficQosPolicyId'];
        }

        return $model;
    }
}
