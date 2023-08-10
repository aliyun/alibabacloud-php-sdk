<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobsResponseBody\migrationJobs\migrationJob;

use AlibabaCloud\Tea\Model;

class dataInitialization extends Model
{
    /**
     * @description The error message returned if full data migration failed.
     *
     * @example java.lang.NumberFormatException: For input string: ""
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The migration progress. Unit: %.
     *
     * @example 100
     *
     * @var string
     */
    public $percent;

    /**
     * @description The number of records that have been migrated during full data migration.
     *
     * @example 200001
     *
     * @var string
     */
    public $progress;

    /**
     * @description The status of full data migration. Valid values:
     *
     *   **NotStarted**: Full data migration is not started.
     *   **Migrating**: Full data migration is in progress.
     *   **Failed**: Full data migration failed.
     *   **Finished**: Full data migration is completed.
     *
     * @example Finished
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'errorMessage' => 'ErrorMessage',
        'percent'      => 'Percent',
        'progress'     => 'Progress',
        'status'       => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->percent) {
            $res['Percent'] = $this->percent;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataInitialization
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['Percent'])) {
            $model->percent = $map['Percent'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
