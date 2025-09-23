<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class DescribeDBLogFilesRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $DBNodeId;

    /**
     * @var string
     */
    public $describeSimulateSwitchMode;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $logType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

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
    public $simulateListId;

    /**
     * @var string
     */
    public $simulateModeList;

    /**
     * @var string
     */
    public $simulateStatusList;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'DBNodeId' => 'DBNodeId',
        'describeSimulateSwitchMode' => 'DescribeSimulateSwitchMode',
        'endTime' => 'EndTime',
        'logType' => 'LogType',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'simulateListId' => 'SimulateListId',
        'simulateModeList' => 'SimulateModeList',
        'simulateStatusList' => 'SimulateStatusList',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->DBNodeId) {
            $res['DBNodeId'] = $this->DBNodeId;
        }

        if (null !== $this->describeSimulateSwitchMode) {
            $res['DescribeSimulateSwitchMode'] = $this->describeSimulateSwitchMode;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->logType) {
            $res['LogType'] = $this->logType;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->simulateListId) {
            $res['SimulateListId'] = $this->simulateListId;
        }

        if (null !== $this->simulateModeList) {
            $res['SimulateModeList'] = $this->simulateModeList;
        }

        if (null !== $this->simulateStatusList) {
            $res['SimulateStatusList'] = $this->simulateStatusList;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['DBNodeId'])) {
            $model->DBNodeId = $map['DBNodeId'];
        }

        if (isset($map['DescribeSimulateSwitchMode'])) {
            $model->describeSimulateSwitchMode = $map['DescribeSimulateSwitchMode'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['LogType'])) {
            $model->logType = $map['LogType'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['SimulateListId'])) {
            $model->simulateListId = $map['SimulateListId'];
        }

        if (isset($map['SimulateModeList'])) {
            $model->simulateModeList = $map['SimulateModeList'];
        }

        if (isset($map['SimulateStatusList'])) {
            $model->simulateStatusList = $map['SimulateStatusList'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
