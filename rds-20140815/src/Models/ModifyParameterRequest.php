<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyParameterRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example ETnLKlblzczshOTUbOCzxxxxxxxxxx
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the instance.
     *
     * @example rm-uf6wjk5xxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description Specifies whether to restart the instance for a new parameter value to take effect. Valid values:
     *
     *   **true**: The system forcefully restarts the instance. If a new parameter value takes effect only after the instance restarts, you must set this parameter to true. Otherwise, the new parameter value cannot take effect.
     *   **false**: The system does not forcefully restart the instance.
     *
     * Default value: **false**.
     * @example false
     *
     * @var bool
     */
    public $forcerestart;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the parameter template.
     *
     * >
     *
     *   If you specify this parameter, you do not need to specify **Parameters**.
     *
     *   If the parameter template can be applied only after the instance is restarted, you must specify **Forcerestart**.
     *
     * @example rpg-xxxxxxxxx
     *
     * @var string
     */
    public $parameterGroupId;

    /**
     * @description The JSON strings of parameters and their values. All the parameter values are of the string type. Format: {"Parameter name 1":"Parameter value 1","Parameter name 2":"Parameter value 2"...}. You can call the [DescribeParameterTemplates](~~26284~~) operation to query parameter names and values.
     *
     * > If you specify this parameter, you do not need to specify **ParameterGroupId**.
     * @example {"delayed_insert_timeout":"600","max_length_for_sort_data":"2048"}
     *
     * @var string
     */
    public $parameters;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The time at which the modification takes effect. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * > This time must be later than the time at which you call this operation.
     * @example 2022-05-06T09:24:00Z
     *
     * @var string
     */
    public $switchTime;

    /**
     * @description The time at which the modification takes effect. Valid values:
     *
     *   **Immediately**: immediately modifies the parameter. This is the default value.
     *   **MaintainTime**: modifies the parameter during the maintenance window of the instance. You can call the [ModifyDBInstanceMaintainTime](~~26249~~) operation to change the maintenance window of the instance.
     *   **ScheduleTime**: The modification takes effect at the point in time that you specify. If you specify this value, you must also specify **SwitchTime**.
     *
     * @example ScheduleTime
     *
     * @var string
     */
    public $switchTimeMode;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'DBInstanceId'         => 'DBInstanceId',
        'forcerestart'         => 'Forcerestart',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'parameterGroupId'     => 'ParameterGroupId',
        'parameters'           => 'Parameters',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'switchTime'           => 'SwitchTime',
        'switchTimeMode'       => 'SwitchTimeMode',
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
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->forcerestart) {
            $res['Forcerestart'] = $this->forcerestart;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->parameterGroupId) {
            $res['ParameterGroupId'] = $this->parameterGroupId;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->switchTime) {
            $res['SwitchTime'] = $this->switchTime;
        }
        if (null !== $this->switchTimeMode) {
            $res['SwitchTimeMode'] = $this->switchTimeMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyParameterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['Forcerestart'])) {
            $model->forcerestart = $map['Forcerestart'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ParameterGroupId'])) {
            $model->parameterGroupId = $map['ParameterGroupId'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SwitchTime'])) {
            $model->switchTime = $map['SwitchTime'];
        }
        if (isset($map['SwitchTimeMode'])) {
            $model->switchTimeMode = $map['SwitchTimeMode'];
        }

        return $model;
    }
}
