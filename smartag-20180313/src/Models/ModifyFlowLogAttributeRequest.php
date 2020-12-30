<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Tea\Model;

class ModifyFlowLogAttributeRequest extends Model
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
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $activeAging;

    /**
     * @var int
     */
    public $inactiveAging;

    /**
     * @var string
     */
    public $outputType;

    /**
     * @var string
     */
    public $slsRegionId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $logstoreName;

    /**
     * @var string
     */
    public $netflowServerIp;

    /**
     * @var int
     */
    public $netflowServerPort;

    /**
     * @var string
     */
    public $netflowVersion;

    /**
     * @var string
     */
    public $flowLogId;
    protected $_name = [
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'regionId'             => 'RegionId',
        'description'          => 'Description',
        'name'                 => 'Name',
        'activeAging'          => 'ActiveAging',
        'inactiveAging'        => 'InactiveAging',
        'outputType'           => 'OutputType',
        'slsRegionId'          => 'SlsRegionId',
        'projectName'          => 'ProjectName',
        'logstoreName'         => 'LogstoreName',
        'netflowServerIp'      => 'NetflowServerIp',
        'netflowServerPort'    => 'NetflowServerPort',
        'netflowVersion'       => 'NetflowVersion',
        'flowLogId'            => 'FlowLogId',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->activeAging) {
            $res['ActiveAging'] = $this->activeAging;
        }
        if (null !== $this->inactiveAging) {
            $res['InactiveAging'] = $this->inactiveAging;
        }
        if (null !== $this->outputType) {
            $res['OutputType'] = $this->outputType;
        }
        if (null !== $this->slsRegionId) {
            $res['SlsRegionId'] = $this->slsRegionId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->logstoreName) {
            $res['LogstoreName'] = $this->logstoreName;
        }
        if (null !== $this->netflowServerIp) {
            $res['NetflowServerIp'] = $this->netflowServerIp;
        }
        if (null !== $this->netflowServerPort) {
            $res['NetflowServerPort'] = $this->netflowServerPort;
        }
        if (null !== $this->netflowVersion) {
            $res['NetflowVersion'] = $this->netflowVersion;
        }
        if (null !== $this->flowLogId) {
            $res['FlowLogId'] = $this->flowLogId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyFlowLogAttributeRequest
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ActiveAging'])) {
            $model->activeAging = $map['ActiveAging'];
        }
        if (isset($map['InactiveAging'])) {
            $model->inactiveAging = $map['InactiveAging'];
        }
        if (isset($map['OutputType'])) {
            $model->outputType = $map['OutputType'];
        }
        if (isset($map['SlsRegionId'])) {
            $model->slsRegionId = $map['SlsRegionId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['LogstoreName'])) {
            $model->logstoreName = $map['LogstoreName'];
        }
        if (isset($map['NetflowServerIp'])) {
            $model->netflowServerIp = $map['NetflowServerIp'];
        }
        if (isset($map['NetflowServerPort'])) {
            $model->netflowServerPort = $map['NetflowServerPort'];
        }
        if (isset($map['NetflowVersion'])) {
            $model->netflowVersion = $map['NetflowVersion'];
        }
        if (isset($map['FlowLogId'])) {
            $model->flowLogId = $map['FlowLogId'];
        }

        return $model;
    }
}
