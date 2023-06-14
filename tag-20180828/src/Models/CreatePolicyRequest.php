<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models;

use AlibabaCloud\Tea\Model;

class CreatePolicyRequest extends Model
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

    /**
     * @description The mode of the Tag Policy feature. Valid values:
     *
     *   USER: single-account mode. Set the value to USER if you use an Alibaba Cloud account or a member of a resource directory to call this API operation to create a tag policy for the Alibaba Cloud account or member.
     *   RD: multi-account mode. Set the value to RD if you use the management account of a resource directory to call this API operation to create a tag policy for the resource directory.
     *
     * For more information about the modes of the Tag Policy feature, see [Modes of the Tag Policy feature](~~417434~~).
     * @example RD
     *
     * @var string
     */
    public $userType;
    protected $_name = [
        'dryRun'               => 'DryRun',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'policyContent'        => 'PolicyContent',
        'policyDesc'           => 'PolicyDesc',
        'policyName'           => 'PolicyName',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'userType'             => 'UserType',
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
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePolicyRequest
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
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
