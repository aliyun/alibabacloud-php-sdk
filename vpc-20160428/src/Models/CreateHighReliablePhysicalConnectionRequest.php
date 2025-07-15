<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateHighReliablePhysicalConnectionRequest\apList;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateHighReliablePhysicalConnectionRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateHighReliablePhysicalConnectionRequest extends Model
{
    /**
     * @description The language to display the results. Valid values:
     *
     *   **zh-CN** (default): Chinese
     *   **en-US**: English
     *
     * @example zh-CN
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The access points.
     *
     * This parameter is required.
     *
     * @var apList[]
     */
    public $apList;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The advanced features of the device.
     *
     * @var string[]
     */
    public $deviceAdvancedCapacity;

    /**
     * @description Specifies whether to perform a dry run, without performing the actual request. Valid values:
     *
     *   **true**: performs only a dry run. The system checks the request for potential issues, including missing parameter values, incorrect request syntax, and service limits. If the request fails the dry run, an error code is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
     *   **false** (default): performs a dry run and performs the actual request. If the request passes the dry run, a 2xx HTTP status code is returned and the operation is performed.
     *
     * @example false
     *
     * @var string
     */
    public $dryRun;

    /**
     * @description The high availability mode. Valid values:
     *
     * - **MultiApMultiDevice** : This mode supports two access points and two devices, and provides the maximum disaster recovery capability.
     * - **MultiApSingleDevice** : This mode supports two access points and one device, and provides robust disaster recovery capability.
     * - **SingleApMultiDevice** : This mode supports one access point and two devices, and is recommended for non-critical business test and development.
     * - **SingleApMultiConnection** : This mode supports one access point, one device, and multiple physical ports. Only users in the whitelist can use this mode. To use this mode, contact your account manager.
     *
     * This parameter is required.
     *
     * @example MultiApMultiDevice
     *
     * @var string
     */
    public $highReliableType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The port type. Valid values:
     *
     *   **100Base-T**: 100 Mbit/s copper Ethernet port
     *   **1000Base-T**: 1,000 Mbit/s copper Ethernet port
     *   **1000Base-LX**: 1,000 Mbit/s single-mode optical port (10 km)
     *   **10GBase-T**: 10,000 Mbit/s copper Ethernet port
     *   **10GBase-LR**: 10,000 Mbit/s single-mode optical port (10 km)
     *   **40GBase-LR**: 40,000 Mbit/s single-mode optical port
     *   **100GBase-LR**: 100,000 Mbit/s single-mode optical port
     *
     * >  To use ports 40GBase-LR and 100GBase-LR, you must first contact your account manager.
     *
     * This parameter is required.
     *
     * @example 1000Base-T
     *
     * @var string
     */
    public $portType;

    /**
     * @description The region ID of the Express Connect circuit.
     *
     * You can call the [DescribeRegions](https://help.aliyun.com/document_detail/36063.html) operation to query the most recent region list.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmxazb4p****
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
     * @description The tags.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'apList' => 'ApList',
        'clientToken' => 'ClientToken',
        'deviceAdvancedCapacity' => 'DeviceAdvancedCapacity',
        'dryRun' => 'DryRun',
        'highReliableType' => 'HighReliableType',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'portType' => 'PortType',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'tag' => 'Tag',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->apList) {
            $res['ApList'] = [];
            if (null !== $this->apList && \is_array($this->apList)) {
                $n = 0;
                foreach ($this->apList as $item) {
                    $res['ApList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->deviceAdvancedCapacity) {
            $res['DeviceAdvancedCapacity'] = $this->deviceAdvancedCapacity;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->highReliableType) {
            $res['HighReliableType'] = $this->highReliableType;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->portType) {
            $res['PortType'] = $this->portType;
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
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateHighReliablePhysicalConnectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['ApList'])) {
            if (!empty($map['ApList'])) {
                $model->apList = [];
                $n = 0;
                foreach ($map['ApList'] as $item) {
                    $model->apList[$n++] = null !== $item ? apList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DeviceAdvancedCapacity'])) {
            if (!empty($map['DeviceAdvancedCapacity'])) {
                $model->deviceAdvancedCapacity = $map['DeviceAdvancedCapacity'];
            }
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['HighReliableType'])) {
            $model->highReliableType = $map['HighReliableType'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PortType'])) {
            $model->portType = $map['PortType'];
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
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
