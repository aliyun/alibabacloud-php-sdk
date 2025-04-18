<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Dara\Model;

class ModifyDtsJobShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $dataInitialization;

    /**
     * @var bool
     */
    public $dataSynchronization;

    /**
     * @var string
     */
    public $dbListShrink;

    /**
     * @var string
     */
    public $dtsInstanceId;

    /**
     * @var string
     */
    public $dtsJobId;

    /**
     * @var string
     */
    public $etlOperatorColumnReference;

    /**
     * @var string
     */
    public $fileOssUrl;

    /**
     * @var string
     */
    public $filterTableName;

    /**
     * @var string
     */
    public $modifyTypeEnum;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $reserved;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var bool
     */
    public $structureInitialization;

    /**
     * @var string
     */
    public $synchronizationDirection;

    /**
     * @var bool
     */
    public $zeroEtlJob;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'dataInitialization' => 'DataInitialization',
        'dataSynchronization' => 'DataSynchronization',
        'dbListShrink' => 'DbList',
        'dtsInstanceId' => 'DtsInstanceId',
        'dtsJobId' => 'DtsJobId',
        'etlOperatorColumnReference' => 'EtlOperatorColumnReference',
        'fileOssUrl' => 'FileOssUrl',
        'filterTableName' => 'FilterTableName',
        'modifyTypeEnum' => 'ModifyTypeEnum',
        'regionId' => 'RegionId',
        'reserved' => 'Reserved',
        'resourceGroupId' => 'ResourceGroupId',
        'structureInitialization' => 'StructureInitialization',
        'synchronizationDirection' => 'SynchronizationDirection',
        'zeroEtlJob' => 'ZeroEtlJob',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->dataInitialization) {
            $res['DataInitialization'] = $this->dataInitialization;
        }

        if (null !== $this->dataSynchronization) {
            $res['DataSynchronization'] = $this->dataSynchronization;
        }

        if (null !== $this->dbListShrink) {
            $res['DbList'] = $this->dbListShrink;
        }

        if (null !== $this->dtsInstanceId) {
            $res['DtsInstanceId'] = $this->dtsInstanceId;
        }

        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }

        if (null !== $this->etlOperatorColumnReference) {
            $res['EtlOperatorColumnReference'] = $this->etlOperatorColumnReference;
        }

        if (null !== $this->fileOssUrl) {
            $res['FileOssUrl'] = $this->fileOssUrl;
        }

        if (null !== $this->filterTableName) {
            $res['FilterTableName'] = $this->filterTableName;
        }

        if (null !== $this->modifyTypeEnum) {
            $res['ModifyTypeEnum'] = $this->modifyTypeEnum;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->reserved) {
            $res['Reserved'] = $this->reserved;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->structureInitialization) {
            $res['StructureInitialization'] = $this->structureInitialization;
        }

        if (null !== $this->synchronizationDirection) {
            $res['SynchronizationDirection'] = $this->synchronizationDirection;
        }

        if (null !== $this->zeroEtlJob) {
            $res['ZeroEtlJob'] = $this->zeroEtlJob;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DataInitialization'])) {
            $model->dataInitialization = $map['DataInitialization'];
        }

        if (isset($map['DataSynchronization'])) {
            $model->dataSynchronization = $map['DataSynchronization'];
        }

        if (isset($map['DbList'])) {
            $model->dbListShrink = $map['DbList'];
        }

        if (isset($map['DtsInstanceId'])) {
            $model->dtsInstanceId = $map['DtsInstanceId'];
        }

        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }

        if (isset($map['EtlOperatorColumnReference'])) {
            $model->etlOperatorColumnReference = $map['EtlOperatorColumnReference'];
        }

        if (isset($map['FileOssUrl'])) {
            $model->fileOssUrl = $map['FileOssUrl'];
        }

        if (isset($map['FilterTableName'])) {
            $model->filterTableName = $map['FilterTableName'];
        }

        if (isset($map['ModifyTypeEnum'])) {
            $model->modifyTypeEnum = $map['ModifyTypeEnum'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Reserved'])) {
            $model->reserved = $map['Reserved'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['StructureInitialization'])) {
            $model->structureInitialization = $map['StructureInitialization'];
        }

        if (isset($map['SynchronizationDirection'])) {
            $model->synchronizationDirection = $map['SynchronizationDirection'];
        }

        if (isset($map['ZeroEtlJob'])) {
            $model->zeroEtlJob = $map['ZeroEtlJob'];
        }

        return $model;
    }
}
