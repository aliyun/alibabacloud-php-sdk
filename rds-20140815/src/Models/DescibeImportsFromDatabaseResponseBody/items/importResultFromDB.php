<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescibeImportsFromDatabaseResponseBody\items;

use AlibabaCloud\Tea\Model;

class importResultFromDB extends Model
{
    /**
     * @description The status of the migration task. Valid values:
     *
     *   **NotStart**: The migration task has not started.
     *   **FullExporting**: The migration task is exporting full data.
     *   **FullImporting**: The migration task is importing full data.
     *   **Success**: The migration task is successful.
     *   **Failed**: The migration task fails.
     *   **Canceled**: The migration task is canceled.
     *   **Canceling**: The migration task is being canceled.
     *   **IncrementalWaiting**: The migration task is waiting to synchronize incremental data.
     *   **IncrementalImporting**: The migration task is synchronizing incremental data.
     *   **StopSyncing**: The migration task stops synchronizing data.
     *
     * @example NotStart
     *
     * @var string
     */
    public $importDataStatus;

    /**
     * @description The description of the migration task.
     *
     * @example Description
     *
     * @var string
     */
    public $importDataStatusDescription;

    /**
     * @description The type of the migration task. Valid values:
     *
     *   **Full**: full migration
     *   **Incremental**: incremental migration
     *
     * @example Full
     *
     * @var string
     */
    public $importDataType;

    /**
     * @description The ID of the migration task.
     *
     * @example 123
     *
     * @var int
     */
    public $importId;

    /**
     * @description The time when the migration task synchronized incremental data. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2011-06-11T15:00Z
     *
     * @var string
     */
    public $incrementalImportingTime;
    protected $_name = [
        'importDataStatus'            => 'ImportDataStatus',
        'importDataStatusDescription' => 'ImportDataStatusDescription',
        'importDataType'              => 'ImportDataType',
        'importId'                    => 'ImportId',
        'incrementalImportingTime'    => 'IncrementalImportingTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->importDataStatus) {
            $res['ImportDataStatus'] = $this->importDataStatus;
        }
        if (null !== $this->importDataStatusDescription) {
            $res['ImportDataStatusDescription'] = $this->importDataStatusDescription;
        }
        if (null !== $this->importDataType) {
            $res['ImportDataType'] = $this->importDataType;
        }
        if (null !== $this->importId) {
            $res['ImportId'] = $this->importId;
        }
        if (null !== $this->incrementalImportingTime) {
            $res['IncrementalImportingTime'] = $this->incrementalImportingTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return importResultFromDB
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImportDataStatus'])) {
            $model->importDataStatus = $map['ImportDataStatus'];
        }
        if (isset($map['ImportDataStatusDescription'])) {
            $model->importDataStatusDescription = $map['ImportDataStatusDescription'];
        }
        if (isset($map['ImportDataType'])) {
            $model->importDataType = $map['ImportDataType'];
        }
        if (isset($map['ImportId'])) {
            $model->importId = $map['ImportId'];
        }
        if (isset($map['IncrementalImportingTime'])) {
            $model->incrementalImportingTime = $map['IncrementalImportingTime'];
        }

        return $model;
    }
}
