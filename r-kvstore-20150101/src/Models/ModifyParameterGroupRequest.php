<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class ModifyParameterGroupRequest extends Model
{
    /**
     * @description The service category. Valid values:
     *
     *   **standard**: Community Edition
     *   **enterprise**: Enhanced Edition (Tair)
     *
     * This parameter is required.
     * @example enterprise
     *
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The description of the parameter template. The description must be 0 to 200 characters in length.
     *
     * @example test
     *
     * @var string
     */
    public $parameterGroupDesc;

    /**
     * @description The parameter template ID.
     *
     * This parameter is required.
     * @example sys-001****
     *
     * @var string
     */
    public $parameterGroupId;

    /**
     * @description The new name of the parameter template. The name must meet the following requirements:
     *
     *   The name can contain letters, digits, and underscores (_). It must start with a letter and cannot contain Chinese characters.
     *   The name can be 8 to 64 characters in length.
     *
     * @example testGroupName
     *
     * @var string
     */
    public $parameterGroupName;

    /**
     * @description A JSON-formatted object that specifies the parameter-value pairs. Format: {"Parameter 1":"Value 1","Parameter 2":"Value 2"...}. The specified value overwrites the original content.
     *
     * This parameter is required.
     * @example {"hz":"12"}
     *
     * @var string
     */
    public $parameters;

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
    public $securityToken;
    protected $_name = [
        'category'             => 'Category',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'parameterGroupDesc'   => 'ParameterGroupDesc',
        'parameterGroupId'     => 'ParameterGroupId',
        'parameterGroupName'   => 'ParameterGroupName',
        'parameters'           => 'Parameters',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'securityToken'        => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->parameterGroupDesc) {
            $res['ParameterGroupDesc'] = $this->parameterGroupDesc;
        }
        if (null !== $this->parameterGroupId) {
            $res['ParameterGroupId'] = $this->parameterGroupId;
        }
        if (null !== $this->parameterGroupName) {
            $res['ParameterGroupName'] = $this->parameterGroupName;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
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
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyParameterGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ParameterGroupDesc'])) {
            $model->parameterGroupDesc = $map['ParameterGroupDesc'];
        }
        if (isset($map['ParameterGroupId'])) {
            $model->parameterGroupId = $map['ParameterGroupId'];
        }
        if (isset($map['ParameterGroupName'])) {
            $model->parameterGroupName = $map['ParameterGroupName'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
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
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
