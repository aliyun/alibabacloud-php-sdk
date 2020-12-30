<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Tea\Model;

class CreateHealthCheckRequest extends Model
{
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
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $smartAGId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $dstIpAddr;

    /**
     * @var int
     */
    public $dstPort;

    /**
     * @var string
     */
    public $srcIpAddr;

    /**
     * @var int
     */
    public $srcPort;

    /**
     * @var int
     */
    public $probeInterval;

    /**
     * @var int
     */
    public $probeCount;

    /**
     * @var int
     */
    public $probeTimeout;

    /**
     * @var int
     */
    public $rttThreshold;

    /**
     * @var int
     */
    public $rttFailThreshold;

    /**
     * @var int
     */
    public $failCountThreshold;
    protected $_name = [
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'regionId'             => 'RegionId',
        'smartAGId'            => 'SmartAGId',
        'name'                 => 'Name',
        'description'          => 'Description',
        'type'                 => 'Type',
        'dstIpAddr'            => 'DstIpAddr',
        'dstPort'              => 'DstPort',
        'srcIpAddr'            => 'SrcIpAddr',
        'srcPort'              => 'SrcPort',
        'probeInterval'        => 'ProbeInterval',
        'probeCount'           => 'ProbeCount',
        'probeTimeout'         => 'ProbeTimeout',
        'rttThreshold'         => 'RttThreshold',
        'rttFailThreshold'     => 'RttFailThreshold',
        'failCountThreshold'   => 'FailCountThreshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->smartAGId) {
            $res['SmartAGId'] = $this->smartAGId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->dstIpAddr) {
            $res['DstIpAddr'] = $this->dstIpAddr;
        }
        if (null !== $this->dstPort) {
            $res['DstPort'] = $this->dstPort;
        }
        if (null !== $this->srcIpAddr) {
            $res['SrcIpAddr'] = $this->srcIpAddr;
        }
        if (null !== $this->srcPort) {
            $res['SrcPort'] = $this->srcPort;
        }
        if (null !== $this->probeInterval) {
            $res['ProbeInterval'] = $this->probeInterval;
        }
        if (null !== $this->probeCount) {
            $res['ProbeCount'] = $this->probeCount;
        }
        if (null !== $this->probeTimeout) {
            $res['ProbeTimeout'] = $this->probeTimeout;
        }
        if (null !== $this->rttThreshold) {
            $res['RttThreshold'] = $this->rttThreshold;
        }
        if (null !== $this->rttFailThreshold) {
            $res['RttFailThreshold'] = $this->rttFailThreshold;
        }
        if (null !== $this->failCountThreshold) {
            $res['FailCountThreshold'] = $this->failCountThreshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateHealthCheckRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SmartAGId'])) {
            $model->smartAGId = $map['SmartAGId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['DstIpAddr'])) {
            $model->dstIpAddr = $map['DstIpAddr'];
        }
        if (isset($map['DstPort'])) {
            $model->dstPort = $map['DstPort'];
        }
        if (isset($map['SrcIpAddr'])) {
            $model->srcIpAddr = $map['SrcIpAddr'];
        }
        if (isset($map['SrcPort'])) {
            $model->srcPort = $map['SrcPort'];
        }
        if (isset($map['ProbeInterval'])) {
            $model->probeInterval = $map['ProbeInterval'];
        }
        if (isset($map['ProbeCount'])) {
            $model->probeCount = $map['ProbeCount'];
        }
        if (isset($map['ProbeTimeout'])) {
            $model->probeTimeout = $map['ProbeTimeout'];
        }
        if (isset($map['RttThreshold'])) {
            $model->rttThreshold = $map['RttThreshold'];
        }
        if (isset($map['RttFailThreshold'])) {
            $model->rttFailThreshold = $map['RttFailThreshold'];
        }
        if (isset($map['FailCountThreshold'])) {
            $model->failCountThreshold = $map['FailCountThreshold'];
        }

        return $model;
    }
}
