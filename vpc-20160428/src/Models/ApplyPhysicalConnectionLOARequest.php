<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ApplyPhysicalConnectionLOARequest\PMInfo;
use AlibabaCloud\Tea\Model;

class ApplyPhysicalConnectionLOARequest extends Model
{
    /**
     * @description The bandwidth of the Express Connect circuit. Unit: Mbit/s.
     *
     * Valid values: **2** to **10240**.
     * @example 3
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The client token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The name of the customer company that requires the Express Connect circuit.
     *
     * This parameter is required.
     * @example company
     *
     * @var string
     */
    public $companyName;

    /**
     * @description The time when construction started. Specify the time in the ISO 8601 standard in the YYYY-MM-DDThh:mm:ssZ format. The time is displayed in UTC.
     *
     * This parameter is required.
     * @example 2022-02-28T16:00:00Z
     *
     * @var string
     */
    public $constructionTime;

    /**
     * @description The ID of the Express Connect circuit.
     *
     * This parameter is required.
     * @example pc-bp1qrb3044eqi****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The type of the Express Connect circuit. Valid values:
     *
     *   **MSTP**: MSTP line
     *   **MPLSVPN**: MPLSVPN line
     *   **FIBRE**: fiber line
     *   **Other**: other types
     *
     * This parameter is required.
     * @example FIBRE
     *
     * @var string
     */
    public $lineType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The information about the construction engineer.
     *
     * @var PMInfo[]
     */
    public $PMInfo;

    /**
     * @description The geographic location where the Express Connect circuit is deployed.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $peerLocation;

    /**
     * @description The region ID of the Express Connect circuit.
     *
     * This parameter is required.
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
     * @description The construction company.
     *
     * This parameter is required.
     * @example company
     *
     * @var string
     */
    public $si;
    protected $_name = [
        'bandwidth'            => 'Bandwidth',
        'clientToken'          => 'ClientToken',
        'companyName'          => 'CompanyName',
        'constructionTime'     => 'ConstructionTime',
        'instanceId'           => 'InstanceId',
        'lineType'             => 'LineType',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'PMInfo'               => 'PMInfo',
        'peerLocation'         => 'PeerLocation',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'si'                   => 'Si',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->companyName) {
            $res['CompanyName'] = $this->companyName;
        }
        if (null !== $this->constructionTime) {
            $res['ConstructionTime'] = $this->constructionTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lineType) {
            $res['LineType'] = $this->lineType;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->PMInfo) {
            $res['PMInfo'] = [];
            if (null !== $this->PMInfo && \is_array($this->PMInfo)) {
                $n = 0;
                foreach ($this->PMInfo as $item) {
                    $res['PMInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->peerLocation) {
            $res['PeerLocation'] = $this->peerLocation;
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
        if (null !== $this->si) {
            $res['Si'] = $this->si;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyPhysicalConnectionLOARequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['CompanyName'])) {
            $model->companyName = $map['CompanyName'];
        }
        if (isset($map['ConstructionTime'])) {
            $model->constructionTime = $map['ConstructionTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LineType'])) {
            $model->lineType = $map['LineType'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PMInfo'])) {
            if (!empty($map['PMInfo'])) {
                $model->PMInfo = [];
                $n             = 0;
                foreach ($map['PMInfo'] as $item) {
                    $model->PMInfo[$n++] = null !== $item ? PMInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PeerLocation'])) {
            $model->peerLocation = $map['PeerLocation'];
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
        if (isset($map['Si'])) {
            $model->si = $map['Si'];
        }

        return $model;
    }
}
