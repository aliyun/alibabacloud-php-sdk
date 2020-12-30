<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Tea\Model;

class AddACLRuleRequest extends Model
{
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
    public $regionId;

    /**
     * @var string
     */
    public $aclId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $sourceCidr;

    /**
     * @var string
     */
    public $destCidr;

    /**
     * @var string
     */
    public $ipProtocol;

    /**
     * @var string
     */
    public $sourcePortRange;

    /**
     * @var string
     */
    public $destPortRange;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $dpiSignatureIds;

    /**
     * @var string[]
     */
    public $dpiGroupIds;
    protected $_name = [
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'regionId'             => 'RegionId',
        'aclId'                => 'AclId',
        'description'          => 'Description',
        'direction'            => 'Direction',
        'sourceCidr'           => 'SourceCidr',
        'destCidr'             => 'DestCidr',
        'ipProtocol'           => 'IpProtocol',
        'sourcePortRange'      => 'SourcePortRange',
        'destPortRange'        => 'DestPortRange',
        'policy'               => 'Policy',
        'priority'             => 'Priority',
        'type'                 => 'Type',
        'name'                 => 'Name',
        'dpiSignatureIds'      => 'DpiSignatureIds',
        'dpiGroupIds'          => 'DpiGroupIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->sourceCidr) {
            $res['SourceCidr'] = $this->sourceCidr;
        }
        if (null !== $this->destCidr) {
            $res['DestCidr'] = $this->destCidr;
        }
        if (null !== $this->ipProtocol) {
            $res['IpProtocol'] = $this->ipProtocol;
        }
        if (null !== $this->sourcePortRange) {
            $res['SourcePortRange'] = $this->sourcePortRange;
        }
        if (null !== $this->destPortRange) {
            $res['DestPortRange'] = $this->destPortRange;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->dpiSignatureIds) {
            $res['DpiSignatureIds'] = $this->dpiSignatureIds;
        }
        if (null !== $this->dpiGroupIds) {
            $res['DpiGroupIds'] = $this->dpiGroupIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddACLRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['SourceCidr'])) {
            $model->sourceCidr = $map['SourceCidr'];
        }
        if (isset($map['DestCidr'])) {
            $model->destCidr = $map['DestCidr'];
        }
        if (isset($map['IpProtocol'])) {
            $model->ipProtocol = $map['IpProtocol'];
        }
        if (isset($map['SourcePortRange'])) {
            $model->sourcePortRange = $map['SourcePortRange'];
        }
        if (isset($map['DestPortRange'])) {
            $model->destPortRange = $map['DestPortRange'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['DpiSignatureIds'])) {
            if (!empty($map['DpiSignatureIds'])) {
                $model->dpiSignatureIds = $map['DpiSignatureIds'];
            }
        }
        if (isset($map['DpiGroupIds'])) {
            if (!empty($map['DpiGroupIds'])) {
                $model->dpiGroupIds = $map['DpiGroupIds'];
            }
        }

        return $model;
    }
}
