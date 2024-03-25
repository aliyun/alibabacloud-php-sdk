<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\AddTrafficMatchRuleToTrafficMarkingPolicyRequest\trafficMatchRules;
use AlibabaCloud\Tea\Model;

class AddTrafficMatchRuleToTrafficMarkingPolicyRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that it is unique among different requests. The token can contain only ASCII characters.
     *
     * >  If you do not set this parameter, **ClientToken** is set to the value of **RequestId**. The value of **RequestId** for each API request may be different.
     * @example 123e4567-e89b-12d3-a456-426****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to perform a dry run. Valid values:
     *
     *   **true**: performs a dry run. The system checks the required parameters, request format, and limits. If the request fails the dry run, an error message is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
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
     * @description The ID of the traffic marking policy.
     *
     * @example tm-u9nxup5kww5po8****
     *
     * @var string
     */
    public $trafficMarkingPolicyId;

    /**
     * @description The traffic classification rules.
     *
     * You can add at most 50 traffic classification rules in each call.
     * @var trafficMatchRules[]
     */
    public $trafficMatchRules;
    protected $_name = [
        'clientToken'            => 'ClientToken',
        'dryRun'                 => 'DryRun',
        'ownerAccount'           => 'OwnerAccount',
        'ownerId'                => 'OwnerId',
        'resourceOwnerAccount'   => 'ResourceOwnerAccount',
        'resourceOwnerId'        => 'ResourceOwnerId',
        'trafficMarkingPolicyId' => 'TrafficMarkingPolicyId',
        'trafficMatchRules'      => 'TrafficMatchRules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->trafficMarkingPolicyId) {
            $res['TrafficMarkingPolicyId'] = $this->trafficMarkingPolicyId;
        }
        if (null !== $this->trafficMatchRules) {
            $res['TrafficMatchRules'] = [];
            if (null !== $this->trafficMatchRules && \is_array($this->trafficMatchRules)) {
                $n = 0;
                foreach ($this->trafficMatchRules as $item) {
                    $res['TrafficMatchRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddTrafficMatchRuleToTrafficMarkingPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['TrafficMarkingPolicyId'])) {
            $model->trafficMarkingPolicyId = $map['TrafficMarkingPolicyId'];
        }
        if (isset($map['TrafficMatchRules'])) {
            if (!empty($map['TrafficMatchRules'])) {
                $model->trafficMatchRules = [];
                $n                        = 0;
                foreach ($map['TrafficMatchRules'] as $item) {
                    $model->trafficMatchRules[$n++] = null !== $item ? trafficMatchRules::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
