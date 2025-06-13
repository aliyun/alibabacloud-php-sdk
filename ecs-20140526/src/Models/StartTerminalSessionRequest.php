<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;

class StartTerminalSessionRequest extends Model
{
    /**
     * @var string
     */
    public $commandLine;

    /**
     * @var string
     */
    public $connectionType;

    /**
     * @var string[]
     */
    public $instanceId;

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
    public $passwordName;

    /**
     * @var int
     */
    public $portNumber;

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
    public $targetServer;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'commandLine' => 'CommandLine',
        'connectionType' => 'ConnectionType',
        'instanceId' => 'InstanceId',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'passwordName' => 'PasswordName',
        'portNumber' => 'PortNumber',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'targetServer' => 'TargetServer',
        'username' => 'Username',
    ];

    public function validate()
    {
        if (\is_array($this->instanceId)) {
            Model::validateArray($this->instanceId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commandLine) {
            $res['CommandLine'] = $this->commandLine;
        }

        if (null !== $this->connectionType) {
            $res['ConnectionType'] = $this->connectionType;
        }

        if (null !== $this->instanceId) {
            if (\is_array($this->instanceId)) {
                $res['InstanceId'] = [];
                $n1 = 0;
                foreach ($this->instanceId as $item1) {
                    $res['InstanceId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->passwordName) {
            $res['PasswordName'] = $this->passwordName;
        }

        if (null !== $this->portNumber) {
            $res['PortNumber'] = $this->portNumber;
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

        if (null !== $this->targetServer) {
            $res['TargetServer'] = $this->targetServer;
        }

        if (null !== $this->username) {
            $res['Username'] = $this->username;
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
        if (isset($map['CommandLine'])) {
            $model->commandLine = $map['CommandLine'];
        }

        if (isset($map['ConnectionType'])) {
            $model->connectionType = $map['ConnectionType'];
        }

        if (isset($map['InstanceId'])) {
            if (!empty($map['InstanceId'])) {
                $model->instanceId = [];
                $n1 = 0;
                foreach ($map['InstanceId'] as $item1) {
                    $model->instanceId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PasswordName'])) {
            $model->passwordName = $map['PasswordName'];
        }

        if (isset($map['PortNumber'])) {
            $model->portNumber = $map['PortNumber'];
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

        if (isset($map['TargetServer'])) {
            $model->targetServer = $map['TargetServer'];
        }

        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
