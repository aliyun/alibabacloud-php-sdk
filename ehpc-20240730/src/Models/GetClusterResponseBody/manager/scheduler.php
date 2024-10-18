<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\GetClusterResponseBody\manager;

use AlibabaCloud\Tea\Model;

class scheduler extends Model
{
    /**
     * @description The scheduler state. Valid values:
     *
     *   uninit: The scheduler is being installed.
     *   initing: The scheduler is being initialized.
     *   running: The scheduler is running.
     *   exception: The scheduler has run into an exception.
     *   releasing: The scheduler is being released.
     *   stopped: The scheduler is stopped.
     *   pending: The scheduler is waiting to be configured.
     *
     * @example running
     *
     * @var string
     */
    public $status;

    /**
     * @description The scheduler type. Valid values:
     *
     *   SLURM
     *   PBS
     *   OPENGRIDSCHEDULER
     *   LSF_PLUGIN
     *   PBS_PLUGIN
     *
     * @example SLURM
     *
     * @var string
     */
    public $type;

    /**
     * @description The scheduler version.
     *
     * @example 22.05.8
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'status'  => 'Status',
        'type'    => 'Type',
        'version' => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scheduler
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
