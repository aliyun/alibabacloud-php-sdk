<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobsResponseBody\migrationJobs\migrationJob;

use AlibabaCloud\Tea\Model;

class structureInitialization extends Model
{
    /**
     * @description The error message returned if schema migration failed.
     *
     * @example DTS-1020042 Execute sql error sql: ERROR: type "geometry" does not exist;
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The progress of schema migration. Unit: %.
     *
     * @example 100
     *
     * @var string
     */
    public $percent;

    /**
     * @description The number of tables whose schemas have been migrated.
     *
     * @example 1
     *
     * @var string
     */
    public $progress;

    /**
     * @description The status of schema migration. Valid values:
     *
     *   **NotStarted**: Schema migration is not started.
     *   **Migrating**: Schema migration is in progress.
     *   **Failed**: Schema migration failed.
     *   **Finished**: Schema migration is completed.
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
     * @return structureInitialization
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
