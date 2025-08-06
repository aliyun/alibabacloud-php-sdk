<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RunCommandRequest\resourceTag;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RunCommandRequest\tag;

class RunCommandRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $commandContent;

    /**
     * @var string
     */
    public $containerId;

    /**
     * @var string
     */
    public $containerName;

    /**
     * @var string
     */
    public $contentEncoding;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enableParameter;

    /**
     * @var string
     */
    public $frequency;

    /**
     * @var string[]
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $keepCommand;

    /**
     * @var string
     */
    public $launcher;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ossOutputDelivery;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var mixed[]
     */
    public $parameters;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $repeatMode;

    /**
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

    /**
     * @var resourceTag[]
     */
    public $resourceTag;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $terminationMode;

    /**
     * @var bool
     */
    public $timed;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $username;

    /**
     * @var string
     */
    public $windowsPasswordName;

    /**
     * @var string
     */
    public $workingDir;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'commandContent' => 'CommandContent',
        'containerId' => 'ContainerId',
        'containerName' => 'ContainerName',
        'contentEncoding' => 'ContentEncoding',
        'description' => 'Description',
        'enableParameter' => 'EnableParameter',
        'frequency' => 'Frequency',
        'instanceId' => 'InstanceId',
        'keepCommand' => 'KeepCommand',
        'launcher' => 'Launcher',
        'name' => 'Name',
        'ossOutputDelivery' => 'OssOutputDelivery',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'parameters' => 'Parameters',
        'regionId' => 'RegionId',
        'repeatMode' => 'RepeatMode',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'resourceTag' => 'ResourceTag',
        'tag' => 'Tag',
        'terminationMode' => 'TerminationMode',
        'timed' => 'Timed',
        'timeout' => 'Timeout',
        'type' => 'Type',
        'username' => 'Username',
        'windowsPasswordName' => 'WindowsPasswordName',
        'workingDir' => 'WorkingDir',
    ];

    public function validate()
    {
        if (\is_array($this->instanceId)) {
            Model::validateArray($this->instanceId);
        }
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        if (\is_array($this->resourceTag)) {
            Model::validateArray($this->resourceTag);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->commandContent) {
            $res['CommandContent'] = $this->commandContent;
        }

        if (null !== $this->containerId) {
            $res['ContainerId'] = $this->containerId;
        }

        if (null !== $this->containerName) {
            $res['ContainerName'] = $this->containerName;
        }

        if (null !== $this->contentEncoding) {
            $res['ContentEncoding'] = $this->contentEncoding;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enableParameter) {
            $res['EnableParameter'] = $this->enableParameter;
        }

        if (null !== $this->frequency) {
            $res['Frequency'] = $this->frequency;
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

        if (null !== $this->keepCommand) {
            $res['KeepCommand'] = $this->keepCommand;
        }

        if (null !== $this->launcher) {
            $res['Launcher'] = $this->launcher;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->ossOutputDelivery) {
            $res['OssOutputDelivery'] = $this->ossOutputDelivery;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['Parameters'] = [];
                foreach ($this->parameters as $key1 => $value1) {
                    $res['Parameters'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->repeatMode) {
            $res['RepeatMode'] = $this->repeatMode;
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

        if (null !== $this->resourceTag) {
            if (\is_array($this->resourceTag)) {
                $res['ResourceTag'] = [];
                $n1 = 0;
                foreach ($this->resourceTag as $item1) {
                    $res['ResourceTag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->terminationMode) {
            $res['TerminationMode'] = $this->terminationMode;
        }

        if (null !== $this->timed) {
            $res['Timed'] = $this->timed;
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        if (null !== $this->windowsPasswordName) {
            $res['WindowsPasswordName'] = $this->windowsPasswordName;
        }

        if (null !== $this->workingDir) {
            $res['WorkingDir'] = $this->workingDir;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['CommandContent'])) {
            $model->commandContent = $map['CommandContent'];
        }

        if (isset($map['ContainerId'])) {
            $model->containerId = $map['ContainerId'];
        }

        if (isset($map['ContainerName'])) {
            $model->containerName = $map['ContainerName'];
        }

        if (isset($map['ContentEncoding'])) {
            $model->contentEncoding = $map['ContentEncoding'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EnableParameter'])) {
            $model->enableParameter = $map['EnableParameter'];
        }

        if (isset($map['Frequency'])) {
            $model->frequency = $map['Frequency'];
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

        if (isset($map['KeepCommand'])) {
            $model->keepCommand = $map['KeepCommand'];
        }

        if (isset($map['Launcher'])) {
            $model->launcher = $map['Launcher'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OssOutputDelivery'])) {
            $model->ossOutputDelivery = $map['OssOutputDelivery'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                foreach ($map['Parameters'] as $key1 => $value1) {
                    $model->parameters[$key1] = $value1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RepeatMode'])) {
            $model->repeatMode = $map['RepeatMode'];
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

        if (isset($map['ResourceTag'])) {
            if (!empty($map['ResourceTag'])) {
                $model->resourceTag = [];
                $n1 = 0;
                foreach ($map['ResourceTag'] as $item1) {
                    $model->resourceTag[$n1] = resourceTag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TerminationMode'])) {
            $model->terminationMode = $map['TerminationMode'];
        }

        if (isset($map['Timed'])) {
            $model->timed = $map['Timed'];
        }

        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        if (isset($map['WindowsPasswordName'])) {
            $model->windowsPasswordName = $map['WindowsPasswordName'];
        }

        if (isset($map['WorkingDir'])) {
            $model->workingDir = $map['WorkingDir'];
        }

        return $model;
    }
}
