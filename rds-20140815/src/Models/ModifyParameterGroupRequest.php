<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyParameterGroupRequest extends Model
{
    /**
     * @description The modification mode of the parameter template. Valid values:
     *
     *   **Collectivity** (default): adds new parameters or modifies parameters in the original parameter template.
     *
     * > If ModifyMode is set to Collectivity, the system adds the value of **Parameters** to the parameter template or modifies the corresponding parameters in the parameter template. Other parameters in the original parameter template are not affected.
     *
     *   **Individual**: overwrites original parameters.
     *
     * > If ModifyMode is set to Individual, the system uses the value of **Parameters** to overwrite the original parameter in the parameter template.
     * @example Collectivity
     *
     * @var string
     */
    public $modifyMode;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The new description of the parameter template. The description can be up to 200 characters in length.
     *
     * > If you do not specify this parameter, the original description of the parameter template is retained.
     * @example test
     *
     * @var string
     */
    public $parameterGroupDesc;

    /**
     * @description The parameter template ID. You can call the DescribeParameterGroups operation to query the parameter template ID.
     *
     * @example rpg-13ppdh****
     *
     * @var string
     */
    public $parameterGroupId;

    /**
     * @description The parameter template name.
     *
     *   The name can contain letters, digits, periods (.), and underscores (\_). It must start with a letter.
     *   It can be 8 to 64 characters in length.
     *
     * > If you do not specify this parameter, the original name of the parameter template is retained.
     * @example testgroup1
     *
     * @var string
     */
    public $parameterGroupName;

    /**
     * @description A JSON string that consists of parameters and their values in the parameter template. Format: {"Parameter 1":"Value of Parameter 1","Parameter 2":"Value of Parameter 2"...}. For more information about the parameters that can be modified, see [Modify the parameters of an ApsaraDB RDS for MySQL instance](~~96063~~) or [Modify the parameters of an ApsaraDB RDS for PostgreSQL instance](~~96751~~).
     *
     * >
     *
     *   If **ModifyMode** is set to **Individual** and this parameter is specified, the new parameters overwrite the parameters in the original parameter template.
     *
     *   If you set **ModifyMode** to **Collectivity** and specify this parameter, the new parameters are added to the original parameter template, or the parameters in the original parameter template are modified.
     *   If you do not specify this parameter, the parameters in the original parameter template remain unchanged.
     *
     * @example {"back_log":"3000"}
     *
     * @var string
     */
    public $parameters;

    /**
     * @description The region ID. You can call the DescribeRegions operation to query the most recent region list.
     *
     * >  The region of a parameter template cannot be changed. You can call the CloneParameterGroup operation to replicate a parameter template to a specific region.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group ID. You can call the DescribeDBInstanceAttribute operation to query the resource group ID.
     *
     * @example rg-acfmy****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'modifyMode'           => 'ModifyMode',
        'ownerId'              => 'OwnerId',
        'parameterGroupDesc'   => 'ParameterGroupDesc',
        'parameterGroupId'     => 'ParameterGroupId',
        'parameterGroupName'   => 'ParameterGroupName',
        'parameters'           => 'Parameters',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modifyMode) {
            $res['ModifyMode'] = $this->modifyMode;
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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
        if (isset($map['ModifyMode'])) {
            $model->modifyMode = $map['ModifyMode'];
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
