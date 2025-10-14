<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;

class CreateDataIngestionRequest extends Model
{
    /**
     * @var int
     */
    public $capacityCount;

    /**
     * @var string
     */
    public $dataIngestionMode;

    /**
     * @var string
     */
    public $dataIngestionStateCode;

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
     * @var string
     */
    public $lang;

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
    public $productId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $roleFor;

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
        'capacityCount' => 'CapacityCount',
        'dataIngestionMode' => 'DataIngestionMode',
        'dataIngestionStateCode' => 'DataIngestionStateCode',
        'dataIngestionType' => 'DataIngestionType',
        'dataSourceEditable' => 'DataSourceEditable',
        'dataSourceId' => 'DataSourceId',
        'lang' => 'Lang',
        'normalizationRuleEditable' => 'NormalizationRuleEditable',
        'normalizationRuleId' => 'NormalizationRuleId',
        'productId' => 'ProductId',
        'regionId' => 'RegionId',
        'roleFor' => 'RoleFor',
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
        if (null !== $this->capacityCount) {
            $res['CapacityCount'] = $this->capacityCount;
        }

        if (null !== $this->dataIngestionMode) {
            $res['DataIngestionMode'] = $this->dataIngestionMode;
        }

        if (null !== $this->dataIngestionStateCode) {
            $res['DataIngestionStateCode'] = $this->dataIngestionStateCode;
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

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->normalizationRuleEditable) {
            $res['NormalizationRuleEditable'] = $this->normalizationRuleEditable;
        }

        if (null !== $this->normalizationRuleId) {
            $res['NormalizationRuleId'] = $this->normalizationRuleId;
        }

        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
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
        if (isset($map['CapacityCount'])) {
            $model->capacityCount = $map['CapacityCount'];
        }

        if (isset($map['DataIngestionMode'])) {
            $model->dataIngestionMode = $map['DataIngestionMode'];
        }

        if (isset($map['DataIngestionStateCode'])) {
            $model->dataIngestionStateCode = $map['DataIngestionStateCode'];
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

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['NormalizationRuleEditable'])) {
            $model->normalizationRuleEditable = $map['NormalizationRuleEditable'];
        }

        if (isset($map['NormalizationRuleId'])) {
            $model->normalizationRuleId = $map['NormalizationRuleId'];
        }

        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
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
