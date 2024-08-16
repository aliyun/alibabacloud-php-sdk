<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateTrafficMarkingPolicyAttributeRequest\addTrafficMatchRules;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateTrafficMarkingPolicyAttributeRequest\deleteTrafficMatchRules;
use AlibabaCloud\Tea\Model;

class UpdateTrafficMarkingPolicyAttributeRequest extends Model
{
    /**
     * @description The traffic classification rules to be added to the traffic marking policy.
     *
     * You can add at most 50 traffic classification rules in each call.
     * @var addTrafficMatchRules[]
     */
    public $addTrafficMatchRules;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that it is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     * @example 123e4567-e89b-12d3-a456-426****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The traffic classification rules to be deleted from the traffic marking policy.
     *
     * >  Specify detailed information about the traffic classification rule, such as the source CIDR block, destination CIDR block, source port, destination port, and DSCP value. If you do not specify sufficient information, the system may fail to match the traffic classification rule that you want to delete.
     * @var deleteTrafficMatchRules[]
     */
    public $deleteTrafficMatchRules;

    /**
     * @description Specifies whether to perform a dry run. Valid values:
     *
     *   **true**: preforms a dry run. The system checks the required parameters, request syntax, and limits. If the request fails the dry run, an error message is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
     *   **false** (default): performs a dry run and sends the request.
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
     * @description The new description of the traffic marking policy.
     *
     * The description must be 2 to 128 characters in length, and can contain letters, digits, underscores (_), and hyphens (-). The description must start with a letter.
     * @example desctest
     *
     * @var string
     */
    public $trafficMarkingPolicyDescription;

    /**
     * @description The ID of the traffic marking policy.
     *
     * This parameter is required.
     * @example tm-u9nxup5kww5po8****
     *
     * @var string
     */
    public $trafficMarkingPolicyId;

    /**
     * @description The new name of the traffic marking policy.
     *
     * The name must be 2 to 128 characters in length, and can contain letters, digits, underscores (_), and hyphens (-). It must start with a letter.
     * @example nametest
     *
     * @var string
     */
    public $trafficMarkingPolicyName;
    protected $_name = [
        'addTrafficMatchRules'            => 'AddTrafficMatchRules',
        'clientToken'                     => 'ClientToken',
        'deleteTrafficMatchRules'         => 'DeleteTrafficMatchRules',
        'dryRun'                          => 'DryRun',
        'ownerAccount'                    => 'OwnerAccount',
        'ownerId'                         => 'OwnerId',
        'resourceOwnerAccount'            => 'ResourceOwnerAccount',
        'resourceOwnerId'                 => 'ResourceOwnerId',
        'trafficMarkingPolicyDescription' => 'TrafficMarkingPolicyDescription',
        'trafficMarkingPolicyId'          => 'TrafficMarkingPolicyId',
        'trafficMarkingPolicyName'        => 'TrafficMarkingPolicyName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addTrafficMatchRules) {
            $res['AddTrafficMatchRules'] = [];
            if (null !== $this->addTrafficMatchRules && \is_array($this->addTrafficMatchRules)) {
                $n = 0;
                foreach ($this->addTrafficMatchRules as $item) {
                    $res['AddTrafficMatchRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->deleteTrafficMatchRules) {
            $res['DeleteTrafficMatchRules'] = [];
            if (null !== $this->deleteTrafficMatchRules && \is_array($this->deleteTrafficMatchRules)) {
                $n = 0;
                foreach ($this->deleteTrafficMatchRules as $item) {
                    $res['DeleteTrafficMatchRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->trafficMarkingPolicyDescription) {
            $res['TrafficMarkingPolicyDescription'] = $this->trafficMarkingPolicyDescription;
        }
        if (null !== $this->trafficMarkingPolicyId) {
            $res['TrafficMarkingPolicyId'] = $this->trafficMarkingPolicyId;
        }
        if (null !== $this->trafficMarkingPolicyName) {
            $res['TrafficMarkingPolicyName'] = $this->trafficMarkingPolicyName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTrafficMarkingPolicyAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddTrafficMatchRules'])) {
            if (!empty($map['AddTrafficMatchRules'])) {
                $model->addTrafficMatchRules = [];
                $n                           = 0;
                foreach ($map['AddTrafficMatchRules'] as $item) {
                    $model->addTrafficMatchRules[$n++] = null !== $item ? addTrafficMatchRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DeleteTrafficMatchRules'])) {
            if (!empty($map['DeleteTrafficMatchRules'])) {
                $model->deleteTrafficMatchRules = [];
                $n                              = 0;
                foreach ($map['DeleteTrafficMatchRules'] as $item) {
                    $model->deleteTrafficMatchRules[$n++] = null !== $item ? deleteTrafficMatchRules::fromMap($item) : $item;
                }
            }
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
        if (isset($map['TrafficMarkingPolicyDescription'])) {
            $model->trafficMarkingPolicyDescription = $map['TrafficMarkingPolicyDescription'];
        }
        if (isset($map['TrafficMarkingPolicyId'])) {
            $model->trafficMarkingPolicyId = $map['TrafficMarkingPolicyId'];
        }
        if (isset($map['TrafficMarkingPolicyName'])) {
            $model->trafficMarkingPolicyName = $map['TrafficMarkingPolicyName'];
        }

        return $model;
    }
}
