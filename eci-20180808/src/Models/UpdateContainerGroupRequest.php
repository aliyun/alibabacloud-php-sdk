<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\acrRegistryInfo;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\container;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\dnsConfig;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\imageRegistryCredential;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\initContainer;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\tag;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\volume;
use AlibabaCloud\Tea\Model;

class UpdateContainerGroupRequest extends Model
{
    /**
     * @var dnsConfig
     */
    public $dnsConfig;

    /**
     * @description Details of the Container Registry Enterprise Edition instance that hosts the image of the init container.
     *
     * @var acrRegistryInfo[]
     */
    public $acrRegistryInfo;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must ensure that the value is unique among different requests. The token can only contain ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotency](https://help.aliyun.com/document_detail/25693.html).
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The new configurations of the container group.
     *
     * @var container[]
     */
    public $container;

    /**
     * @description The ID of the elastic container instance that you want to update.
     *
     * This parameter is required.
     * @example eci-2zelg8vwnlzdhf8hv****
     *
     * @var string
     */
    public $containerGroupId;

    /**
     * @description The number of vCPUs that are allocated to the elastic container instance.
     *
     * @example 2.0
     *
     * @var float
     */
    public $cpu;

    /**
     * @description The information about the credentials of the image repository.
     *
     * @var imageRegistryCredential[]
     */
    public $imageRegistryCredential;

    /**
     * @description The information about the new init container.
     *
     * @var initContainer[]
     */
    public $initContainer;

    /**
     * @description The size of the memory that is allocated to the elastic container instance. Unit: GiB.
     *
     * @example 4.0
     *
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
     * @description The region ID of the instance.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-2df3isufhi38****
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

    /**
     * @description The restart policy of the elastic container instance. Valid values:
     *
     *   Always: Always restarts the instance if a container in the instance exits upon termination.
     *   Never: Never restarts the instance if a container in the instance exits upon termination.
     *   OnFailure: Restarts the instance only if a container in the instance exists upon failure with a status code of non-zero.
     *
     * @example Always
     *
     * @var string
     */
    public $restartPolicy;

    /**
     * @description The tags that are bound to the instance.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The update type. Valid values:
     *
     *   RenewUpdate: full updates. You must specify all relevant parameters to update the elastic container instance. For a parameter of the list type, you must specify all the items contained in the parameter even if you want to update only some of the items. For a parameter of the struct type, you must specify all the members even if you want to update only some of the members.
     *   IncrementalUpdate: incremental updates. You may specify only the parameter that you want to update. Other related parameters remain unchanged.
     *
     * Default value: RenewUpdate.
     * @example RenewUpdate
     *
     * @var string
     */
    public $updateType;

    /**
     * @description The volumes that are mounted to the instance.
     *
     * @var volume[]
     */
    public $volume;
    protected $_name = [
        'dnsConfig'               => 'DnsConfig',
        'acrRegistryInfo'         => 'AcrRegistryInfo',
        'clientToken'             => 'ClientToken',
        'container'               => 'Container',
        'containerGroupId'        => 'ContainerGroupId',
        'cpu'                     => 'Cpu',
        'imageRegistryCredential' => 'ImageRegistryCredential',
        'initContainer'           => 'InitContainer',
        'memory'                  => 'Memory',
        'ownerAccount'            => 'OwnerAccount',
        'ownerId'                 => 'OwnerId',
        'regionId'                => 'RegionId',
        'resourceGroupId'         => 'ResourceGroupId',
        'resourceOwnerAccount'    => 'ResourceOwnerAccount',
        'resourceOwnerId'         => 'ResourceOwnerId',
        'restartPolicy'           => 'RestartPolicy',
        'tag'                     => 'Tag',
        'updateType'              => 'UpdateType',
        'volume'                  => 'Volume',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dnsConfig) {
            $res['DnsConfig'] = null !== $this->dnsConfig ? $this->dnsConfig->toMap() : null;
        }
        if (null !== $this->acrRegistryInfo) {
            $res['AcrRegistryInfo'] = [];
            if (null !== $this->acrRegistryInfo && \is_array($this->acrRegistryInfo)) {
                $n = 0;
                foreach ($this->acrRegistryInfo as $item) {
                    $res['AcrRegistryInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->container) {
            $res['Container'] = [];
            if (null !== $this->container && \is_array($this->container)) {
                $n = 0;
                foreach ($this->container as $item) {
                    $res['Container'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['ImageRegistryCredential'] = [];
            if (null !== $this->imageRegistryCredential && \is_array($this->imageRegistryCredential)) {
                $n = 0;
                foreach ($this->imageRegistryCredential as $item) {
                    $res['ImageRegistryCredential'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->initContainer) {
            $res['InitContainer'] = [];
            if (null !== $this->initContainer && \is_array($this->initContainer)) {
                $n = 0;
                foreach ($this->initContainer as $item) {
                    $res['InitContainer'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->updateType) {
            $res['UpdateType'] = $this->updateType;
        }
        if (null !== $this->volume) {
            $res['Volume'] = [];
            if (null !== $this->volume && \is_array($this->volume)) {
                $n = 0;
                foreach ($this->volume as $item) {
                    $res['Volume'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateContainerGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DnsConfig'])) {
            $model->dnsConfig = dnsConfig::fromMap($map['DnsConfig']);
        }
        if (isset($map['AcrRegistryInfo'])) {
            if (!empty($map['AcrRegistryInfo'])) {
                $model->acrRegistryInfo = [];
                $n                      = 0;
                foreach ($map['AcrRegistryInfo'] as $item) {
                    $model->acrRegistryInfo[$n++] = null !== $item ? acrRegistryInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Container'])) {
            if (!empty($map['Container'])) {
                $model->container = [];
                $n                = 0;
                foreach ($map['Container'] as $item) {
                    $model->container[$n++] = null !== $item ? container::fromMap($item) : $item;
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
                $n                              = 0;
                foreach ($map['ImageRegistryCredential'] as $item) {
                    $model->imageRegistryCredential[$n++] = null !== $item ? imageRegistryCredential::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InitContainer'])) {
            if (!empty($map['InitContainer'])) {
                $model->initContainer = [];
                $n                    = 0;
                foreach ($map['InitContainer'] as $item) {
                    $model->initContainer[$n++] = null !== $item ? initContainer::fromMap($item) : $item;
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
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UpdateType'])) {
            $model->updateType = $map['UpdateType'];
        }
        if (isset($map['Volume'])) {
            if (!empty($map['Volume'])) {
                $model->volume = [];
                $n             = 0;
                foreach ($map['Volume'] as $item) {
                    $model->volume[$n++] = null !== $item ? volume::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
