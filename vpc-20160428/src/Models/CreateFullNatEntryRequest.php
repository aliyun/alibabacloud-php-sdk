<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateFullNatEntryRequest extends Model
{
    /**
     * @description 需要进行转发的后端IP
     *
     * @var string
     */
    public $accessIp;

    /**
     * @description 需要进行端口转发的内部端口，取值范围：1~65535。
     *
     * @var string
     */
    public $accessPort;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $fullNatEntryDescription;

    /**
     * @description FULLNAT规则的名称。 长度为2~128个字符，必须以大小写字母或中文开头，但不能以http://或https://开头。
     *
     * @var string
     */
    public $fullNatEntryName;

    /**
     * @description FullNAT条目所属的FullNAT列表的ID。
     *
     * @var string
     */
    public $fullNatTableId;

    /**
     * @description 协议类型，取值： • TCP：转发TCP协议的报文。 • UDP：转发UDP协议的报文。
     *
     * @var string
     */
    public $ipProtocol;

    /**
     * @description 提供入方向访问的IP地址，该公网IP需要是当前VpcNat下的NatIP
     *
     * @var string
     */
    public $natIp;

    /**
     * @description 需要进行端口转发的外部端口，取值范围：1~65535。
     *
     * @var string
     */
    public $natIpPort;

    /**
     * @var string
     */
    public $networkInterfaceId;

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
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'accessIp'                => 'AccessIp',
        'accessPort'              => 'AccessPort',
        'clientToken'             => 'ClientToken',
        'dryRun'                  => 'DryRun',
        'fullNatEntryDescription' => 'FullNatEntryDescription',
        'fullNatEntryName'        => 'FullNatEntryName',
        'fullNatTableId'          => 'FullNatTableId',
        'ipProtocol'              => 'IpProtocol',
        'natIp'                   => 'NatIp',
        'natIpPort'               => 'NatIpPort',
        'networkInterfaceId'      => 'NetworkInterfaceId',
        'ownerAccount'            => 'OwnerAccount',
        'ownerId'                 => 'OwnerId',
        'regionId'                => 'RegionId',
        'resourceOwnerAccount'    => 'ResourceOwnerAccount',
        'resourceOwnerId'         => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessIp) {
            $res['AccessIp'] = $this->accessIp;
        }
        if (null !== $this->accessPort) {
            $res['AccessPort'] = $this->accessPort;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->fullNatEntryDescription) {
            $res['FullNatEntryDescription'] = $this->fullNatEntryDescription;
        }
        if (null !== $this->fullNatEntryName) {
            $res['FullNatEntryName'] = $this->fullNatEntryName;
        }
        if (null !== $this->fullNatTableId) {
            $res['FullNatTableId'] = $this->fullNatTableId;
        }
        if (null !== $this->ipProtocol) {
            $res['IpProtocol'] = $this->ipProtocol;
        }
        if (null !== $this->natIp) {
            $res['NatIp'] = $this->natIp;
        }
        if (null !== $this->natIpPort) {
            $res['NatIpPort'] = $this->natIpPort;
        }
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFullNatEntryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessIp'])) {
            $model->accessIp = $map['AccessIp'];
        }
        if (isset($map['AccessPort'])) {
            $model->accessPort = $map['AccessPort'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['FullNatEntryDescription'])) {
            $model->fullNatEntryDescription = $map['FullNatEntryDescription'];
        }
        if (isset($map['FullNatEntryName'])) {
            $model->fullNatEntryName = $map['FullNatEntryName'];
        }
        if (isset($map['FullNatTableId'])) {
            $model->fullNatTableId = $map['FullNatTableId'];
        }
        if (isset($map['IpProtocol'])) {
            $model->ipProtocol = $map['IpProtocol'];
        }
        if (isset($map['NatIp'])) {
            $model->natIp = $map['NatIp'];
        }
        if (isset($map['NatIpPort'])) {
            $model->natIpPort = $map['NatIpPort'];
        }
        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
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

        return $model;
    }
}
