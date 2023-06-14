<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models;

use AlibabaCloud\Tea\Model;

class ModifyPolicyRequest extends Model
{
    /**
     * @description Specifies whether to perform a dry run for the request. Valid values:
     *
     *   false: The system performs the related operation based on the parameter settings in the request. This is the default value.
     *   true: The system does not perform the related operation based on the parameter settings in the request but only verifies the parameter settings.
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
     * @description The document of the tag policy.
     *
     * For more information about the syntax of a tag policy, see [Syntax of a tag policy](~~417436~~).
     * @example {"tags":{"CostCenter":{"tag_value":{"@@assign":["Beijing","Shanghai"]},"tag_key":{"@@assign":"CostCenter"}}}}
     *
     * @var string
     */
    public $policyContent;

    /**
     * @description The description of the tag policy.
     *
     * The description must be 0 to 512 characters in length.
     * @example This is a tag policy example.
     *
     * @var string
     */
    public $policyDesc;

    /**
     * @description The ID of the tag policy.
     *
     * @example p-5732750813924f90****
     *
     * @var string
     */
    public $policyId;

    /**
     * @description The name of the tag policy.
     *
     * The name must be 1 to 128 characters in length and can contain letters, digits, and underscores (\_).
     * @example test
     *
     * @var string
     */
    public $policyName;

    /**
     * @description The region ID. Set the value to cn-shanghai.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;
    protected $_name = [
        'dryRun'               => 'DryRun',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'policyContent'        => 'PolicyContent',
        'policyDesc'           => 'PolicyDesc',
        'policyId'             => 'PolicyId',
        'policyName'           => 'PolicyName',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->policyContent) {
            $res['PolicyContent'] = $this->policyContent;
        }
        if (null !== $this->policyDesc) {
            $res['PolicyDesc'] = $this->policyDesc;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PolicyContent'])) {
            $model->policyContent = $map['PolicyContent'];
        }
        if (isset($map['PolicyDesc'])) {
            $model->policyDesc = $map['PolicyDesc'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        return $model;
    }
}
