<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\Tea\Model;

class ListTLSCipherPoliciesRequest extends Model
{
    /**
     * @description Specifies whether to return the information about the associated listeners. Valid values:
     *
     *   **true**: returns the information about the associated listeners.
     *   **false** (default): does not return the information about the associated listeners.
     *
     * @example false
     *
     * @var bool
     */
    public $includeListener;

    /**
     * @description The maximum number of TLS policies to be queried in this call. Valid values: **1** to **100**. If you do not set this parameter, the default value **20** is used.
     *
     * @example 20
     *
     * @var int
     */
    public $maxItems;

    /**
     * @description The name of the TLS policy. The name must be 2 to 128 characters in length, and can contain letters, digits, periods (.), underscores (\_), and hyphens (-). The name must start with a letter.
     *
     * @example TLSPolicy-test****
     *
     * @var string
     */
    public $name;

    /**
     * @description The token that is used for the next query. Valid values:
     *
     *   If this is your first query or no next query is to be sent, ignore this parameter.
     *   If a next query is to be sent, set the value to the value of NextToken that is returned from the last call.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the region where the Classic Load Balancer (CLB) instance is deployed.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list.
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

    /**
     * @description The ID of the TLS policy.
     *
     * @example tls-bp17elso1h323r****
     *
     * @var string
     */
    public $TLSCipherPolicyId;
    protected $_name = [
        'includeListener'      => 'IncludeListener',
        'maxItems'             => 'MaxItems',
        'name'                 => 'Name',
        'nextToken'            => 'NextToken',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'TLSCipherPolicyId'    => 'TLSCipherPolicyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->includeListener) {
            $res['IncludeListener'] = $this->includeListener;
        }
        if (null !== $this->maxItems) {
            $res['MaxItems'] = $this->maxItems;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
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
        if (null !== $this->TLSCipherPolicyId) {
            $res['TLSCipherPolicyId'] = $this->TLSCipherPolicyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTLSCipherPoliciesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IncludeListener'])) {
            $model->includeListener = $map['IncludeListener'];
        }
        if (isset($map['MaxItems'])) {
            $model->maxItems = $map['MaxItems'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
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
        if (isset($map['TLSCipherPolicyId'])) {
            $model->TLSCipherPolicyId = $map['TLSCipherPolicyId'];
        }

        return $model;
    }
}
