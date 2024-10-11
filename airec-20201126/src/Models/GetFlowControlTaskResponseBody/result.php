<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\GetFlowControlTaskResponseBody;

use AlibabaCloud\SDK\Airec\V20201126\Models\GetFlowControlTaskResponseBody\result\meta;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The time when the task was created. The time follows the ISO 8601 standard in the yyyy-MM-ddThh:mm:ssZ format. The time is displayed in Coordinated Universal Time (UTC).
     *
     * @example 2018-12-07T02:24:26.000Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the data source was last modified. The time follows the ISO 8601 standard in the yyyy-MM-ddThh:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2020-04-23T06:08:48.000Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The metadata of the task.
     *
     * @var meta
     */
    public $meta;

    /**
     * @description The task state. Valid values: DRAFT, READY, RUNNING, ENDED, and AUTO_END. The value AUTO_END is not used.
     *
     * @example DRAFT
     *
     * @var string
     */
    public $status;

    /**
     * @description The task ID.
     *
     * @example 1666854602398
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'gmtCreate'   => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'meta'        => 'meta',
        'status'      => 'status',
        'taskId'      => 'taskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->meta) {
            $res['meta'] = null !== $this->meta ? $this->meta->toMap() : null;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['meta'])) {
            $model->meta = meta::fromMap($map['meta']);
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
