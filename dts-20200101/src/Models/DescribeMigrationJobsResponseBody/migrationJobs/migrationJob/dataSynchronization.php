<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobsResponseBody\migrationJobs\migrationJob;

use AlibabaCloud\Tea\Model;

class dataSynchronization extends Model
{
    /**
     * @description The latency of incremental data migration. Unit: seconds.
     *
     * @example 0
     *
     * @var string
     */
    public $delay;

    /**
     * @description The error message returned if incremental data migration failed.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The progress of incremental data migration. Unit: %.
     *
     * @example 95
     *
     * @var string
     */
    public $percent;

    /**
     * @description The status of incremental data migration. Valid values:
     *
     *   **NotStarted**: Incremental data migration is not started.
     *   **Migrating**: Incremental data migration is in progress.
     *   **Failed**: Incremental data migration failed.
     *   **Finished**: Incremental data migration is completed.
     *   **Catched**: Incremental data migration is not delayed.
     *
     * @example Catched
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'delay'        => 'Delay',
        'errorMessage' => 'ErrorMessage',
        'percent'      => 'Percent',
        'status'       => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->delay) {
            $res['Delay'] = $this->delay;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->percent) {
            $res['Percent'] = $this->percent;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataSynchronization
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Delay'])) {
            $model->delay = $map['Delay'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['Percent'])) {
            $model->percent = $map['Percent'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
