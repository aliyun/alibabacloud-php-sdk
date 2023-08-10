<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationObjectModifyStatusResponseBody;

use AlibabaCloud\Tea\Model;

class dataSynchronizationStatus extends Model
{
    /**
     * @description The synchronization latency, in seconds.
     *
     * @example 0
     *
     * @var string
     */
    public $delay;

    /**
     * @description The error message returned if incremental data synchronization failed.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The progress of incremental data synchronization. Unit: %.
     *
     * @example 100
     *
     * @var string
     */
    public $percent;

    /**
     * @description The status of incremental data synchronization. Valid values:
     *
     *   **NotStarted**: Incremental data synchronization is not started.
     *   **Migrating**: Incremental data synchronization is in progress.
     *   **Failed**: Incremental data synchronization failed.
     *   **Finished**: Incremental data synchronization is completed.
     *
     * @example Migrating
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'delay'        => 'Delay',
        'errorMessage' => 'ErrorMessage',
        'percent'      => 'Percent',
        'status'       => 'Status',
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
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataSynchronizationStatus
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
