<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\Tea\Model;

class ExecContainerCommandRequest extends Model
{
    /**
     * @description The commands to run in the container. You can specify up to 20 commands. Each command can be up to 256 characters in length.\
     * The strings must be in the JSON format. Example: `["/bin/sh", "-c", "ls -a"]`.
     * @example ["/bin/sh", "-c", "ls -a"]
     *
     * @var string
     */
    public $command;

    /**
     * @description The ID of the elastic container instance.
     *
     * @example eci-2zebxkiifulhl****
     *
     * @var string
     */
    public $containerGroupId;

    /**
     * @description The name of the container.
     *
     * @example nginx
     *
     * @var string
     */
    public $containerName;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the instance.
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
     * @description Specifies whether to read the commands from standard input (stdin). Default value: true.
     *
     * @example true
     *
     * @var bool
     */
    public $stdin;

    /**
     * @description Specifies whether to run the command immediately and return the result. Default value: false.\
     * If you set this parameter to true, set the value of TTY to false.
     * @example false
     *
     * @var bool
     */
    public $sync;

    /**
     * @description Specifies whether to enable interaction. Default value: false.\
     * If the command is a /bin/bash command, set the value to true.
     * @example false
     *
     * @var bool
     */
    public $TTY;
    protected $_name = [
        'command'              => 'Command',
        'containerGroupId'     => 'ContainerGroupId',
        'containerName'        => 'ContainerName',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'stdin'                => 'Stdin',
        'sync'                 => 'Sync',
        'TTY'                  => 'TTY',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        if (null !== $this->containerGroupId) {
            $res['ContainerGroupId'] = $this->containerGroupId;
        }
        if (null !== $this->containerName) {
            $res['ContainerName'] = $this->containerName;
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
        if (null !== $this->stdin) {
            $res['Stdin'] = $this->stdin;
        }
        if (null !== $this->sync) {
            $res['Sync'] = $this->sync;
        }
        if (null !== $this->TTY) {
            $res['TTY'] = $this->TTY;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecContainerCommandRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }
        if (isset($map['ContainerGroupId'])) {
            $model->containerGroupId = $map['ContainerGroupId'];
        }
        if (isset($map['ContainerName'])) {
            $model->containerName = $map['ContainerName'];
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
        if (isset($map['Stdin'])) {
            $model->stdin = $map['Stdin'];
        }
        if (isset($map['Sync'])) {
            $model->sync = $map['Sync'];
        }
        if (isset($map['TTY'])) {
            $model->TTY = $map['TTY'];
        }

        return $model;
    }
}
