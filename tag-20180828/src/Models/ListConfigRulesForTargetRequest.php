<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models;

use AlibabaCloud\Tea\Model;

class ListConfigRulesForTargetRequest extends Model
{
    /**
     * @description The number of entries to return on each page.
     *
     * Default value: 50. Maximum value: 1000.
     * @example 50
     *
     * @var int
     */
    public $maxResult;

    /**
     * @description The token that is used to start the next query.
     *
     * @example caeba0bbb2be03f84eb48b699f0a****
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
     * @description The use scenario of the tag policy. This parameter specifies a filter condition for the query. Valid values:
     *
     *   tags: enables tags with specified tag values to be added to resources.
     *   rg_inherit: enables resources in a resource group to automatically inherit tags from the resource group.
     *
     * @example tags
     *
     * @var string
     */
    public $policyType;

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
     * @description The tag key. This parameter specifies a filter condition for the query.
     *
     * @example CostCenter
     *
     * @var string
     */
    public $tagKey;

    /**
     * @description The ID of the object. This parameter specifies a filter condition for the query.
     *
     * @example 134254031178****
     *
     * @var string
     */
    public $targetId;

    /**
     * @description The type of the object. This parameter specifies a filter condition for the query. Valid values:
     *
     *   USER: the current logon account. This value is available if you use the Tag Policy feature in single-account mode.
     *   ROOT: the Root folder in a resource directory. This value is available if you use the Tag Policy feature in multi-account mode.
     *   FOLDER: a folder other than the Root folder in a resource directory. This value is available if you use the Tag Policy feature in multi-account mode.
     *   ACCOUNT: a member in a resource directory. This value is available if you use the Tag Policy feature in multi-account mode.
     *
     * >  The value of this parameter is not case-sensitive.
     * @example ACCOUNT
     *
     * @var string
     */
    public $targetType;

    /**
     * @description The mode of the Tag Policy feature. This parameter specifies a filter condition for the query. Valid values:
     *
     *   USER: single-account mode
     *   RD: multi-account mode
     *
     * >  The value of this parameter is not case-sensitive.
     * @example USER
     *
     * @var string
     */
    public $userType;
    protected $_name = [
        'maxResult'            => 'MaxResult',
        'nextToken'            => 'NextToken',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'policyType'           => 'PolicyType',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'tagKey'               => 'TagKey',
        'targetId'             => 'TargetId',
        'targetType'           => 'TargetType',
        'userType'             => 'UserType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResult) {
            $res['MaxResult'] = $this->maxResult;
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
        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListConfigRulesForTargetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResult'])) {
            $model->maxResult = $map['MaxResult'];
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
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
