<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDIJobRunDetailsResponseBody\pagingInfo;

use AlibabaCloud\Tea\Model;

class jobRunInfos extends Model
{
    /**
     * @description The name of the database in the destination.
     *
     * @example dst_db
     *
     * @var string
     */
    public $destinationDatabaseName;

    /**
     * @description The name of the destination.
     *
     * @example dst_name
     *
     * @var string
     */
    public $destinationDatasourceName;

    /**
     * @description The name of the schema of the destination.
     *
     * @example dst_schema
     *
     * @var string
     */
    public $destinationSchemaName;

    /**
     * @description The name of the table in the destination.
     *
     * @example dst_name
     *
     * @var string
     */
    public $destinationTableName;

    /**
     * @description The error message that is returned if an error occurs during full batch synchronization. If no error occurs, no value is returned for this parameter.
     *
     * @example sync table t1 fail.
     *
     * @var string
     */
    public $fullMigrationErrorMessage;

    /**
     * @description The status of full batch synchronization.
     *
     * @example Finished
     *
     * @var string
     */
    public $fullMigrationStatus;

    /**
     * @description The total number of errors that occur during full synchronization.
     *
     * @example 0
     *
     * @var int
     */
    public $offlineErrorRecords;

    /**
     * @description The total number of bytes that are synchronized during full synchronization.
     *
     * @example 100
     *
     * @var int
     */
    public $offlineTotalBytes;

    /**
     * @description The total number of data records that are synchronized during full synchronization.
     *
     * @example 10
     *
     * @var int
     */
    public $offlineTotalRecords;

    /**
     * @description The error message that is returned if an error occurs during real-time synchronization. If no error occurs, no value is returned for this parameter.
     *
     * @example sync table t1 fail.
     *
     * @var string
     */
    public $realtimeMigrationErrorMessage;

    /**
     * @description The status of real-time synchronization.
     *
     * @example Running
     *
     * @var string
     */
    public $realtimeMigrationStatus;

    /**
     * @description The name of the database in the source.
     *
     * @example db_name
     *
     * @var string
     */
    public $sourceDatabaseName;

    /**
     * @description The name of the source.
     *
     * @example ds_name
     *
     * @var string
     */
    public $sourceDatasourceName;

    /**
     * @description The name of the schema of the source.
     *
     * @example schema_name
     *
     * @var string
     */
    public $sourceSchemaName;

    /**
     * @description The name of the table in the source.
     *
     * @example table_name
     *
     * @var string
     */
    public $sourceTableName;

    /**
     * @description The error message that is returned if an error occurs during schema synchronization. If no error occurs, no value is returned for this parameter.
     *
     * @example create table t1 fail.
     *
     * @var string
     */
    public $structureMigrationErrorMessage;

    /**
     * @description The synchronization status of the schema.
     *
     * @example Finished
     *
     * @var string
     */
    public $structureMigrationStatus;
    protected $_name = [
        'destinationDatabaseName'        => 'DestinationDatabaseName',
        'destinationDatasourceName'      => 'DestinationDatasourceName',
        'destinationSchemaName'          => 'DestinationSchemaName',
        'destinationTableName'           => 'DestinationTableName',
        'fullMigrationErrorMessage'      => 'FullMigrationErrorMessage',
        'fullMigrationStatus'            => 'FullMigrationStatus',
        'offlineErrorRecords'            => 'OfflineErrorRecords',
        'offlineTotalBytes'              => 'OfflineTotalBytes',
        'offlineTotalRecords'            => 'OfflineTotalRecords',
        'realtimeMigrationErrorMessage'  => 'RealtimeMigrationErrorMessage',
        'realtimeMigrationStatus'        => 'RealtimeMigrationStatus',
        'sourceDatabaseName'             => 'SourceDatabaseName',
        'sourceDatasourceName'           => 'SourceDatasourceName',
        'sourceSchemaName'               => 'SourceSchemaName',
        'sourceTableName'                => 'SourceTableName',
        'structureMigrationErrorMessage' => 'StructureMigrationErrorMessage',
        'structureMigrationStatus'       => 'StructureMigrationStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return jobRunInfos
     */
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
