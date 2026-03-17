<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;

class ModifyACLRuleRequest extends Model
{
    /**
     * @var string
     */
    public $aclId;

    /**
     * @var string
     */
    public $acrId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $destCidr;

    /**
     * @var string
     */
    public $destPortRange;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var string[]
     */
    public $dpiGroupIds;

    /**
     * @var string[]
     */
    public $dpiSignatureIds;

    /**
     * @var string
     */
    public $ipProtocol;

    /**
     * @var string
     */
    public $name;

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
    public $policy;

    /**
     * @var int
     */
    public $priority;

    /**
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
     * @var string
     */
    public $sourceCidr;

    /**
     * @var string
     */
    public $sourcePortRange;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'aclId' => 'AclId',
        'acrId' => 'AcrId',
        'description' => 'Description',
        'destCidr' => 'DestCidr',
        'destPortRange' => 'DestPortRange',
        'direction' => 'Direction',
        'dpiGroupIds' => 'DpiGroupIds',
        'dpiSignatureIds' => 'DpiSignatureIds',
        'ipProtocol' => 'IpProtocol',
        'name' => 'Name',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'policy' => 'Policy',
        'priority' => 'Priority',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'sourceCidr' => 'SourceCidr',
        'sourcePortRange' => 'SourcePortRange',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->dpiGroupIds)) {
            Model::validateArray($this->dpiGroupIds);
        }
        if (\is_array($this->dpiSignatureIds)) {
            Model::validateArray($this->dpiSignatureIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }

        if (null !== $this->acrId) {
            $res['AcrId'] = $this->acrId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->destCidr) {
            $res['DestCidr'] = $this->destCidr;
        }

        if (null !== $this->destPortRange) {
            $res['DestPortRange'] = $this->destPortRange;
        }

        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }

        if (null !== $this->dpiGroupIds) {
            if (\is_array($this->dpiGroupIds)) {
                $res['DpiGroupIds'] = [];
                $n1 = 0;
                foreach ($this->dpiGroupIds as $item1) {
                    $res['DpiGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dpiSignatureIds) {
            if (\is_array($this->dpiSignatureIds)) {
                $res['DpiSignatureIds'] = [];
                $n1 = 0;
                foreach ($this->dpiSignatureIds as $item1) {
                    $res['DpiSignatureIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ipProtocol) {
            $res['IpProtocol'] = $this->ipProtocol;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
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

        if (null !== $this->sourceCidr) {
            $res['SourceCidr'] = $this->sourceCidr;
        }

        if (null !== $this->sourcePortRange) {
            $res['SourcePortRange'] = $this->sourcePortRange;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }

        if (isset($map['AcrId'])) {
            $model->acrId = $map['AcrId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DestCidr'])) {
            $model->destCidr = $map['DestCidr'];
        }

        if (isset($map['DestPortRange'])) {
            $model->destPortRange = $map['DestPortRange'];
        }

        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }

        if (isset($map['DpiGroupIds'])) {
            if (!empty($map['DpiGroupIds'])) {
                $model->dpiGroupIds = [];
                $n1 = 0;
                foreach ($map['DpiGroupIds'] as $item1) {
                    $model->dpiGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DpiSignatureIds'])) {
            if (!empty($map['DpiSignatureIds'])) {
                $model->dpiSignatureIds = [];
                $n1 = 0;
                foreach ($map['DpiSignatureIds'] as $item1) {
                    $model->dpiSignatureIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IpProtocol'])) {
            $model->ipProtocol = $map['IpProtocol'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
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

        if (isset($map['SourceCidr'])) {
            $model->sourceCidr = $map['SourceCidr'];
        }

        if (isset($map['SourcePortRange'])) {
            $model->sourcePortRange = $map['SourcePortRange'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
