<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListDataIngestionsResponseBody;

use AlibabaCloud\Dara\Model;

class dataIngestions extends Model
{
    /**
     * @var int
     */
    public $activeTime;

    /**
     * @var int
     */
    public $capacityCount;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $dataIngestionId;

    /**
     * @var string
     */
    public $dataIngestionMode;

    /**
     * @var bool
     */
    public $dataIngestionModeEditable;

    /**
     * @var string
     */
    public $dataIngestionState;

    /**
     * @var string
     */
    public $dataIngestionStateCode;

    /**
     * @var string
     */
    public $dataIngestionStatus;

    /**
     * @var string
     */
    public $dataIngestionTemplateId;

    /**
     * @var string
     */
    public $dataIngestionType;

    /**
     * @var bool
     */
    public $dataSourceEditable;

    /**
     * @var string
     */
    public $dataSourceId;

    /**
     * @var bool
     */
    public $normalizationRuleEditable;

    /**
     * @var string
     */
    public $normalizationRuleId;

    /**
     * @var string
     */
    public $realtimeDataSourceId;

    /**
     * @var string
     */
    public $scanDataSourceId;

    /**
     * @var string
     */
    public $streamJobId;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'activeTime' => 'ActiveTime',
        'capacityCount' => 'CapacityCount',
        'createTime' => 'CreateTime',
        'dataIngestionId' => 'DataIngestionId',
        'dataIngestionMode' => 'DataIngestionMode',
        'dataIngestionModeEditable' => 'DataIngestionModeEditable',
        'dataIngestionState' => 'DataIngestionState',
        'dataIngestionStateCode' => 'DataIngestionStateCode',
        'dataIngestionStatus' => 'DataIngestionStatus',
        'dataIngestionTemplateId' => 'DataIngestionTemplateId',
        'dataIngestionType' => 'DataIngestionType',
        'dataSourceEditable' => 'DataSourceEditable',
        'dataSourceId' => 'DataSourceId',
        'normalizationRuleEditable' => 'NormalizationRuleEditable',
        'normalizationRuleId' => 'NormalizationRuleId',
        'realtimeDataSourceId' => 'RealtimeDataSourceId',
        'scanDataSourceId' => 'ScanDataSourceId',
        'streamJobId' => 'StreamJobId',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeTime) {
            $res['ActiveTime'] = $this->activeTime;
        }

        if (null !== $this->capacityCount) {
            $res['CapacityCount'] = $this->capacityCount;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->dataIngestionId) {
            $res['DataIngestionId'] = $this->dataIngestionId;
        }

        if (null !== $this->dataIngestionMode) {
            $res['DataIngestionMode'] = $this->dataIngestionMode;
        }

        if (null !== $this->dataIngestionModeEditable) {
            $res['DataIngestionModeEditable'] = $this->dataIngestionModeEditable;
        }

        if (null !== $this->dataIngestionState) {
            $res['DataIngestionState'] = $this->dataIngestionState;
        }

        if (null !== $this->dataIngestionStateCode) {
            $res['DataIngestionStateCode'] = $this->dataIngestionStateCode;
        }

        if (null !== $this->dataIngestionStatus) {
            $res['DataIngestionStatus'] = $this->dataIngestionStatus;
        }

        if (null !== $this->dataIngestionTemplateId) {
            $res['DataIngestionTemplateId'] = $this->dataIngestionTemplateId;
        }

        if (null !== $this->dataIngestionType) {
            $res['DataIngestionType'] = $this->dataIngestionType;
        }

        if (null !== $this->dataSourceEditable) {
            $res['DataSourceEditable'] = $this->dataSourceEditable;
        }

        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }

        if (null !== $this->normalizationRuleEditable) {
            $res['NormalizationRuleEditable'] = $this->normalizationRuleEditable;
        }

        if (null !== $this->normalizationRuleId) {
            $res['NormalizationRuleId'] = $this->normalizationRuleId;
        }

        if (null !== $this->realtimeDataSourceId) {
            $res['RealtimeDataSourceId'] = $this->realtimeDataSourceId;
        }

        if (null !== $this->scanDataSourceId) {
            $res['ScanDataSourceId'] = $this->scanDataSourceId;
        }

        if (null !== $this->streamJobId) {
            $res['StreamJobId'] = $this->streamJobId;
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
        if (isset($map['ActiveTime'])) {
            $model->activeTime = $map['ActiveTime'];
        }

        if (isset($map['CapacityCount'])) {
            $model->capacityCount = $map['CapacityCount'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DataIngestionId'])) {
            $model->dataIngestionId = $map['DataIngestionId'];
        }

        if (isset($map['DataIngestionMode'])) {
            $model->dataIngestionMode = $map['DataIngestionMode'];
        }

        if (isset($map['DataIngestionModeEditable'])) {
            $model->dataIngestionModeEditable = $map['DataIngestionModeEditable'];
        }

        if (isset($map['DataIngestionState'])) {
            $model->dataIngestionState = $map['DataIngestionState'];
        }

        if (isset($map['DataIngestionStateCode'])) {
            $model->dataIngestionStateCode = $map['DataIngestionStateCode'];
        }

        if (isset($map['DataIngestionStatus'])) {
            $model->dataIngestionStatus = $map['DataIngestionStatus'];
        }

        if (isset($map['DataIngestionTemplateId'])) {
            $model->dataIngestionTemplateId = $map['DataIngestionTemplateId'];
        }

        if (isset($map['DataIngestionType'])) {
            $model->dataIngestionType = $map['DataIngestionType'];
        }

        if (isset($map['DataSourceEditable'])) {
            $model->dataSourceEditable = $map['DataSourceEditable'];
        }

        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }

        if (isset($map['NormalizationRuleEditable'])) {
            $model->normalizationRuleEditable = $map['NormalizationRuleEditable'];
        }

        if (isset($map['NormalizationRuleId'])) {
            $model->normalizationRuleId = $map['NormalizationRuleId'];
        }

        if (isset($map['RealtimeDataSourceId'])) {
            $model->realtimeDataSourceId = $map['RealtimeDataSourceId'];
        }

        if (isset($map['ScanDataSourceId'])) {
            $model->scanDataSourceId = $map['ScanDataSourceId'];
        }

        if (isset($map['StreamJobId'])) {
            $model->streamJobId = $map['StreamJobId'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
