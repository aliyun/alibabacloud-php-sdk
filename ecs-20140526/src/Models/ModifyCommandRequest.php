<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class ModifyCommandRequest extends Model
{
    /**
     * @description The command content. The command content can be plaintext or Base64-encoded. Take note of the following items:
     *
     *   The Base64-encoded command content can be up to 16 KB in size.
     *
     *   If the command content is Base64-encoded, set `ContentEncoding` to Base64.
     *
     *   If you set `EnableParameter` to true, the custom parameter feature is enabled and you can specify custom parameters based on the following rules:
     *
     *   Specify custom parameters in the `{{}}` format. When parameter names are enclosed in `{{}}`, the spaces and line feeds before and after the parameter names are ignored.
     *   You can specify up to 20 custom parameters.
     *   A custom parameter name can contain only letters, digits, underscores (\_), and hyphens (-). The name is not case-sensitive.
     *   Each custom parameter name cannot exceed 64 bytes in length.
     *
     * @example echo
     *
     * @var string
     */
    public $commandContent;

    /**
     * @description The command ID. You can call the [DescribeCommands](~~64843~~) operation to query all available command IDs.
     *
     * @example c-hz01272yr52****
     *
     * @var string
     */
    public $commandId;

    /**
     * @description The command description. The description supports all character sets and can be up to 512 characters in length.
     *
     * @example This is description.
     *
     * @var string
     */
    public $description;

    /**
     * @description The command name. The name supports all character sets and can be up to 128 characters in length.
     *
     * @example test-CommandName
     *
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
     * @description The region ID of the command. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
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
     * @description The maximum timeout period for the command to be run on the instance. Unit: seconds. When a command cannot run within the specified time range, the command times out. Then, the command process is forcibly terminated by canceling the process ID (PID) of the command.
     *
     * @example 120
     *
     * @var int
     */
    public $timeout;

    /**
     * @description The working directory of the command.
     *
     * @example /home/
     *
     * @var string
     */
    public $workingDir;
    protected $_name = [
        'commandContent'       => 'CommandContent',
        'commandId'            => 'CommandId',
        'description'          => 'Description',
        'name'                 => 'Name',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'timeout'              => 'Timeout',
        'workingDir'           => 'WorkingDir',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commandContent) {
            $res['CommandContent'] = $this->commandContent;
        }
        if (null !== $this->commandId) {
            $res['CommandId'] = $this->commandId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->workingDir) {
            $res['WorkingDir'] = $this->workingDir;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCommandRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommandContent'])) {
            $model->commandContent = $map['CommandContent'];
        }
        if (isset($map['CommandId'])) {
            $model->commandId = $map['CommandId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['WorkingDir'])) {
            $model->workingDir = $map['WorkingDir'];
        }

        return $model;
    }
}
