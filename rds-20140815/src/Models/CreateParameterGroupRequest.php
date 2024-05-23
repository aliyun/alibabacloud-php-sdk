<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateParameterGroupRequest extends Model
{
    /**
     * @description The database engine. Valid values:
     *
     *   **mysql**
     *   **PostgreSQL**
     *
     * This parameter is required.
     * @example mysql
     *
     * @var string
     */
    public $engine;

    /**
     * @description The database engine version of the instance.
     *
     *   If the instance runs MySQL, the instance must run one of the following MySQL versions:
     *
     *   **5.6**
     *   **5.7**
     *   **8.0**
     *
     *   If the instance runs PostgreSQL, the instance must run one of the following PostgreSQL versions:
     *
     *   **10.0**
     *   **11.0**
     *   **12.0**
     *   **13.0**
     *   **14.0**
     *   **15.0**
     *
     * This parameter is required.
     * @example 5.7
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The description of the parameter template. The value can be up to 200 characters in length.
     *
     * @example test
     *
     * @var string
     */
    public $parameterGroupDesc;

    /**
     * @description The name of the parameter template.
     *
     *   The value must start with a letter and can contain letters, digits, periods (.), and underscores (_).
     *   The value can be 8 to 64 characters in length.
     *
     * This parameter is required.
     * @example test1234
     *
     * @var string
     */
    public $parameterGroupName;

    /**
     * @description A JSON string that consists of parameters and their values in the parameter template. Format: {"Parameter 1":"Value of Parameter 1","Parameter 2":"Value of Parameter 2"...}. For more information about the parameters that can be modified, see [Modify the parameters of an ApsaraDB RDS for MySQL instance](https://help.aliyun.com/document_detail/96063.html) or [Modify the parameters of an ApsaraDB RDS for PostgreSQL instance](https://help.aliyun.com/document_detail/96751.html).
     *
     * This parameter is required.
     * @example {"back_log":"3000","wait_timeout":"86400"}
     *
     * @var string
     */
    public $parameters;

    /**
     * @description The region ID of the parameter template. You can call the DescribeRegions operation to query the most recent zone list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group ID. You can call the DescribeDBInstanceAttribute operation to obtain the resource group ID.
     *
     * @example rg-acfmy*****
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
        'engine'               => 'Engine',
        'engineVersion'        => 'EngineVersion',
        'ownerId'              => 'OwnerId',
        'parameterGroupDesc'   => 'ParameterGroupDesc',
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
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->parameterGroupDesc) {
            $res['ParameterGroupDesc'] = $this->parameterGroupDesc;
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
     * @return CreateParameterGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ParameterGroupDesc'])) {
            $model->parameterGroupDesc = $map['ParameterGroupDesc'];
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
