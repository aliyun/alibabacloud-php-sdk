<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\acrRegistryInfo;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\container;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\dnsConfig;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\imageRegistryCredential;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\initContainer;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\tag;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\volume;

class UpdateContainerGroupRequest extends Model
{
    /**
     * @var dnsConfig
     */
    public $dnsConfig;

    /**
     * @var acrRegistryInfo[]
     */
    public $acrRegistryInfo;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var container[]
     */
    public $container;

    /**
     * @var string
     */
    public $containerGroupId;

    /**
     * @var float
     */
    public $cpu;

    /**
     * @var imageRegistryCredential[]
     */
    public $imageRegistryCredential;

    /**
     * @var initContainer[]
     */
    public $initContainer;

    /**
     * @var float
     */
    public $memory;

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
    public $regionId;

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
     * @var string
     */
    public $restartPolicy;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $updateType;

    /**
     * @var volume[]
     */
    public $volume;
    protected $_name = [
        'dnsConfig' => 'DnsConfig',
        'acrRegistryInfo' => 'AcrRegistryInfo',
        'clientToken' => 'ClientToken',
        'container' => 'Container',
        'containerGroupId' => 'ContainerGroupId',
        'cpu' => 'Cpu',
        'imageRegistryCredential' => 'ImageRegistryCredential',
        'initContainer' => 'InitContainer',
        'memory' => 'Memory',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'restartPolicy' => 'RestartPolicy',
        'tag' => 'Tag',
        'updateType' => 'UpdateType',
        'volume' => 'Volume',
    ];

    public function validate()
    {
        if (null !== $this->dnsConfig) {
            $this->dnsConfig->validate();
        }
        if (\is_array($this->acrRegistryInfo)) {
            Model::validateArray($this->acrRegistryInfo);
        }
        if (\is_array($this->container)) {
            Model::validateArray($this->container);
        }
        if (\is_array($this->imageRegistryCredential)) {
            Model::validateArray($this->imageRegistryCredential);
        }
        if (\is_array($this->initContainer)) {
            Model::validateArray($this->initContainer);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        if (\is_array($this->volume)) {
            Model::validateArray($this->volume);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dnsConfig) {
            $res['DnsConfig'] = null !== $this->dnsConfig ? $this->dnsConfig->toArray($noStream) : $this->dnsConfig;
        }

        if (null !== $this->acrRegistryInfo) {
            if (\is_array($this->acrRegistryInfo)) {
                $res['AcrRegistryInfo'] = [];
                $n1 = 0;
                foreach ($this->acrRegistryInfo as $item1) {
                    $res['AcrRegistryInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->container) {
            if (\is_array($this->container)) {
                $res['Container'] = [];
                $n1 = 0;
                foreach ($this->container as $item1) {
                    $res['Container'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->containerGroupId) {
            $res['ContainerGroupId'] = $this->containerGroupId;
        }

        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->imageRegistryCredential) {
            if (\is_array($this->imageRegistryCredential)) {
                $res['ImageRegistryCredential'] = [];
                $n1 = 0;
                foreach ($this->imageRegistryCredential as $item1) {
                    $res['ImageRegistryCredential'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->initContainer) {
            if (\is_array($this->initContainer)) {
                $res['InitContainer'] = [];
                $n1 = 0;
                foreach ($this->initContainer as $item1) {
                    $res['InitContainer'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
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

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->restartPolicy) {
            $res['RestartPolicy'] = $this->restartPolicy;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->updateType) {
            $res['UpdateType'] = $this->updateType;
        }

        if (null !== $this->volume) {
            if (\is_array($this->volume)) {
                $res['Volume'] = [];
                $n1 = 0;
                foreach ($this->volume as $item1) {
                    $res['Volume'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['DnsConfig'])) {
            $model->dnsConfig = dnsConfig::fromMap($map['DnsConfig']);
        }

        if (isset($map['AcrRegistryInfo'])) {
            if (!empty($map['AcrRegistryInfo'])) {
                $model->acrRegistryInfo = [];
                $n1 = 0;
                foreach ($map['AcrRegistryInfo'] as $item1) {
                    $model->acrRegistryInfo[$n1++] = acrRegistryInfo::fromMap($item1);
                }
            }
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Container'])) {
            if (!empty($map['Container'])) {
                $model->container = [];
                $n1 = 0;
                foreach ($map['Container'] as $item1) {
                    $model->container[$n1++] = container::fromMap($item1);
                }
            }
        }

        if (isset($map['ContainerGroupId'])) {
            $model->containerGroupId = $map['ContainerGroupId'];
        }

        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['ImageRegistryCredential'])) {
            if (!empty($map['ImageRegistryCredential'])) {
                $model->imageRegistryCredential = [];
                $n1 = 0;
                foreach ($map['ImageRegistryCredential'] as $item1) {
                    $model->imageRegistryCredential[$n1++] = imageRegistryCredential::fromMap($item1);
                }
            }
        }

        if (isset($map['InitContainer'])) {
            if (!empty($map['InitContainer'])) {
                $model->initContainer = [];
                $n1 = 0;
                foreach ($map['InitContainer'] as $item1) {
                    $model->initContainer[$n1++] = initContainer::fromMap($item1);
                }
            }
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
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

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['RestartPolicy'])) {
            $model->restartPolicy = $map['RestartPolicy'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        if (isset($map['UpdateType'])) {
            $model->updateType = $map['UpdateType'];
        }

        if (isset($map['Volume'])) {
            if (!empty($map['Volume'])) {
                $model->volume = [];
                $n1 = 0;
                foreach ($map['Volume'] as $item1) {
                    $model->volume[$n1++] = volume::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
