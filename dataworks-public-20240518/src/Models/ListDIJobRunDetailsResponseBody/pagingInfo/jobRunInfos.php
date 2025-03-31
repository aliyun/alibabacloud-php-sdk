<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDIJobRunDetailsResponseBody\pagingInfo;

use AlibabaCloud\Dara\Model;

class jobRunInfos extends Model
{
    /**
     * @var string
     */
    public $destinationDatabaseName;

    /**
     * @var string
     */
    public $destinationDatasourceName;

    /**
     * @var string
     */
    public $destinationSchemaName;

    /**
     * @var string
     */
    public $destinationTableName;

    /**
     * @var string
     */
    public $fullMigrationErrorMessage;

    /**
     * @var string
     */
    public $fullMigrationStatus;

    /**
     * @var int
     */
    public $offlineErrorRecords;

    /**
     * @var int
     */
    public $offlineTotalBytes;

    /**
     * @var int
     */
    public $offlineTotalRecords;

    /**
     * @var string
     */
    public $realtimeMigrationErrorMessage;

    /**
     * @var string
     */
    public $realtimeMigrationStatus;

    /**
     * @var string
     */
    public $sourceDatabaseName;

    /**
     * @var string
     */
    public $sourceDatasourceName;

    /**
     * @var string
     */
    public $sourceSchemaName;

    /**
     * @var string
     */
    public $sourceTableName;

    /**
     * @var string
     */
    public $structureMigrationErrorMessage;

    /**
     * @var string
     */
    public $structureMigrationStatus;
    protected $_name = [
        'destinationDatabaseName' => 'DestinationDatabaseName',
        'destinationDatasourceName' => 'DestinationDatasourceName',
        'destinationSchemaName' => 'DestinationSchemaName',
        'destinationTableName' => 'DestinationTableName',
        'fullMigrationErrorMessage' => 'FullMigrationErrorMessage',
        'fullMigrationStatus' => 'FullMigrationStatus',
        'offlineErrorRecords' => 'OfflineErrorRecords',
        'offlineTotalBytes' => 'OfflineTotalBytes',
        'offlineTotalRecords' => 'OfflineTotalRecords',
        'realtimeMigrationErrorMessage' => 'RealtimeMigrationErrorMessage',
        'realtimeMigrationStatus' => 'RealtimeMigrationStatus',
        'sourceDatabaseName' => 'SourceDatabaseName',
        'sourceDatasourceName' => 'SourceDatasourceName',
        'sourceSchemaName' => 'SourceSchemaName',
        'sourceTableName' => 'SourceTableName',
        'structureMigrationErrorMessage' => 'StructureMigrationErrorMessage',
        'structureMigrationStatus' => 'StructureMigrationStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destinationDatabaseName) {
            $res['DestinationDatabaseName'] = $this->destinationDatabaseName;
        }

        if (null !== $this->destinationDatasourceName) {
            $res['DestinationDatasourceName'] = $this->destinationDatasourceName;
        }

        if (null !== $this->destinationSchemaName) {
            $res['DestinationSchemaName'] = $this->destinationSchemaName;
        }

        if (null !== $this->destinationTableName) {
            $res['DestinationTableName'] = $this->destinationTableName;
        }

        if (null !== $this->fullMigrationErrorMessage) {
            $res['FullMigrationErrorMessage'] = $this->fullMigrationErrorMessage;
        }

        if (null !== $this->fullMigrationStatus) {
            $res['FullMigrationStatus'] = $this->fullMigrationStatus;
        }

        if (null !== $this->offlineErrorRecords) {
            $res['OfflineErrorRecords'] = $this->offlineErrorRecords;
        }

        if (null !== $this->offlineTotalBytes) {
            $res['OfflineTotalBytes'] = $this->offlineTotalBytes;
        }

        if (null !== $this->offlineTotalRecords) {
            $res['OfflineTotalRecords'] = $this->offlineTotalRecords;
        }

        if (null !== $this->realtimeMigrationErrorMessage) {
            $res['RealtimeMigrationErrorMessage'] = $this->realtimeMigrationErrorMessage;
        }

        if (null !== $this->realtimeMigrationStatus) {
            $res['RealtimeMigrationStatus'] = $this->realtimeMigrationStatus;
        }

        if (null !== $this->sourceDatabaseName) {
            $res['SourceDatabaseName'] = $this->sourceDatabaseName;
        }

        if (null !== $this->sourceDatasourceName) {
            $res['SourceDatasourceName'] = $this->sourceDatasourceName;
        }

        if (null !== $this->sourceSchemaName) {
            $res['SourceSchemaName'] = $this->sourceSchemaName;
        }

        if (null !== $this->sourceTableName) {
            $res['SourceTableName'] = $this->sourceTableName;
        }

        if (null !== $this->structureMigrationErrorMessage) {
            $res['StructureMigrationErrorMessage'] = $this->structureMigrationErrorMessage;
        }

        if (null !== $this->structureMigrationStatus) {
            $res['StructureMigrationStatus'] = $this->structureMigrationStatus;
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
        if (isset($map['DestinationDatabaseName'])) {
            $model->destinationDatabaseName = $map['DestinationDatabaseName'];
        }

        if (isset($map['DestinationDatasourceName'])) {
            $model->destinationDatasourceName = $map['DestinationDatasourceName'];
        }

        if (isset($map['DestinationSchemaName'])) {
            $model->destinationSchemaName = $map['DestinationSchemaName'];
        }

        if (isset($map['DestinationTableName'])) {
            $model->destinationTableName = $map['DestinationTableName'];
        }

        if (isset($map['FullMigrationErrorMessage'])) {
            $model->fullMigrationErrorMessage = $map['FullMigrationErrorMessage'];
        }

        if (isset($map['FullMigrationStatus'])) {
            $model->fullMigrationStatus = $map['FullMigrationStatus'];
        }

        if (isset($map['OfflineErrorRecords'])) {
            $model->offlineErrorRecords = $map['OfflineErrorRecords'];
        }

        if (isset($map['OfflineTotalBytes'])) {
            $model->offlineTotalBytes = $map['OfflineTotalBytes'];
        }

        if (isset($map['OfflineTotalRecords'])) {
            $model->offlineTotalRecords = $map['OfflineTotalRecords'];
        }

        if (isset($map['RealtimeMigrationErrorMessage'])) {
            $model->realtimeMigrationErrorMessage = $map['RealtimeMigrationErrorMessage'];
        }

        if (isset($map['RealtimeMigrationStatus'])) {
            $model->realtimeMigrationStatus = $map['RealtimeMigrationStatus'];
        }

        if (isset($map['SourceDatabaseName'])) {
            $model->sourceDatabaseName = $map['SourceDatabaseName'];
        }

        if (isset($map['SourceDatasourceName'])) {
            $model->sourceDatasourceName = $map['SourceDatasourceName'];
        }

        if (isset($map['SourceSchemaName'])) {
            $model->sourceSchemaName = $map['SourceSchemaName'];
        }

        if (isset($map['SourceTableName'])) {
            $model->sourceTableName = $map['SourceTableName'];
        }

        if (isset($map['StructureMigrationErrorMessage'])) {
            $model->structureMigrationErrorMessage = $map['StructureMigrationErrorMessage'];
        }

        if (isset($map['StructureMigrationStatus'])) {
            $model->structureMigrationStatus = $map['StructureMigrationStatus'];
        }

        return $model;
    }
}
