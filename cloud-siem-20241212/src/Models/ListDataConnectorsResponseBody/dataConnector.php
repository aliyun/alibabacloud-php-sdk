<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListDataConnectorsResponseBody;

use AlibabaCloud\Dara\Model;

class dataConnector extends Model
{
    /**
     * @var string
     */
    public $authConfigId;

    /**
     * @var string
     */
    public $authConfigProduct;

    /**
     * @var string
     */
    public $authConfigVendor;

    /**
     * @var int
     */
    public $creationTime;

    /**
     * @var string
     */
    public $dataConnectorConfig;

    /**
     * @var string
     */
    public $dataConnectorId;

    /**
     * @var string
     */
    public $dataConnectorName;

    /**
     * @var string
     */
    public $dataConnectorStatus;

    /**
     * @var string
     */
    public $dataConnectorType;

    /**
     * @var string
     */
    public $destDataSourceId;

    /**
     * @var string
     */
    public $logProjectName;

    /**
     * @var string
     */
    public $logRegionId;

    /**
     * @var string
     */
    public $logStoreName;

    /**
     * @var string
     */
    public $slsIngestionJobName;

    /**
     * @var string
     */
    public $slsIngestionJobState;

    /**
     * @var string
     */
    public $srcDataType;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'authConfigId' => 'AuthConfigId',
        'authConfigProduct' => 'AuthConfigProduct',
        'authConfigVendor' => 'AuthConfigVendor',
        'creationTime' => 'CreationTime',
        'dataConnectorConfig' => 'DataConnectorConfig',
        'dataConnectorId' => 'DataConnectorId',
        'dataConnectorName' => 'DataConnectorName',
        'dataConnectorStatus' => 'DataConnectorStatus',
        'dataConnectorType' => 'DataConnectorType',
        'destDataSourceId' => 'DestDataSourceId',
        'logProjectName' => 'LogProjectName',
        'logRegionId' => 'LogRegionId',
        'logStoreName' => 'LogStoreName',
        'slsIngestionJobName' => 'SlsIngestionJobName',
        'slsIngestionJobState' => 'SlsIngestionJobState',
        'srcDataType' => 'SrcDataType',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authConfigId) {
            $res['AuthConfigId'] = $this->authConfigId;
        }

        if (null !== $this->authConfigProduct) {
            $res['AuthConfigProduct'] = $this->authConfigProduct;
        }

        if (null !== $this->authConfigVendor) {
            $res['AuthConfigVendor'] = $this->authConfigVendor;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->dataConnectorConfig) {
            $res['DataConnectorConfig'] = $this->dataConnectorConfig;
        }

        if (null !== $this->dataConnectorId) {
            $res['DataConnectorId'] = $this->dataConnectorId;
        }

        if (null !== $this->dataConnectorName) {
            $res['DataConnectorName'] = $this->dataConnectorName;
        }

        if (null !== $this->dataConnectorStatus) {
            $res['DataConnectorStatus'] = $this->dataConnectorStatus;
        }

        if (null !== $this->dataConnectorType) {
            $res['DataConnectorType'] = $this->dataConnectorType;
        }

        if (null !== $this->destDataSourceId) {
            $res['DestDataSourceId'] = $this->destDataSourceId;
        }

        if (null !== $this->logProjectName) {
            $res['LogProjectName'] = $this->logProjectName;
        }

        if (null !== $this->logRegionId) {
            $res['LogRegionId'] = $this->logRegionId;
        }

        if (null !== $this->logStoreName) {
            $res['LogStoreName'] = $this->logStoreName;
        }

        if (null !== $this->slsIngestionJobName) {
            $res['SlsIngestionJobName'] = $this->slsIngestionJobName;
        }

        if (null !== $this->slsIngestionJobState) {
            $res['SlsIngestionJobState'] = $this->slsIngestionJobState;
        }

        if (null !== $this->srcDataType) {
            $res['SrcDataType'] = $this->srcDataType;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['AuthConfigId'])) {
            $model->authConfigId = $map['AuthConfigId'];
        }

        if (isset($map['AuthConfigProduct'])) {
            $model->authConfigProduct = $map['AuthConfigProduct'];
        }

        if (isset($map['AuthConfigVendor'])) {
            $model->authConfigVendor = $map['AuthConfigVendor'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['DataConnectorConfig'])) {
            $model->dataConnectorConfig = $map['DataConnectorConfig'];
        }

        if (isset($map['DataConnectorId'])) {
            $model->dataConnectorId = $map['DataConnectorId'];
        }

        if (isset($map['DataConnectorName'])) {
            $model->dataConnectorName = $map['DataConnectorName'];
        }

        if (isset($map['DataConnectorStatus'])) {
            $model->dataConnectorStatus = $map['DataConnectorStatus'];
        }

        if (isset($map['DataConnectorType'])) {
            $model->dataConnectorType = $map['DataConnectorType'];
        }

        if (isset($map['DestDataSourceId'])) {
            $model->destDataSourceId = $map['DestDataSourceId'];
        }

        if (isset($map['LogProjectName'])) {
            $model->logProjectName = $map['LogProjectName'];
        }

        if (isset($map['LogRegionId'])) {
            $model->logRegionId = $map['LogRegionId'];
        }

        if (isset($map['LogStoreName'])) {
            $model->logStoreName = $map['LogStoreName'];
        }

        if (isset($map['SlsIngestionJobName'])) {
            $model->slsIngestionJobName = $map['SlsIngestionJobName'];
        }

        if (isset($map['SlsIngestionJobState'])) {
            $model->slsIngestionJobState = $map['SlsIngestionJobState'];
        }

        if (isset($map['SrcDataType'])) {
            $model->srcDataType = $map['SrcDataType'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
