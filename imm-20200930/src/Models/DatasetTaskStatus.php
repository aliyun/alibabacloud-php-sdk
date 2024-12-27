<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DatasetTaskStatus extends Model
{
    /**
     * @example 2024-06-29T14:50:13.011643661+08:00
     *
     * @var string
     */
    public $lastSucceededTime;

    /**
     * @example 2024-06-29T14:50:13.011643661+08:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @example Succeeded
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'lastSucceededTime' => 'LastSucceededTime',
        'startTime'         => 'StartTime',
        'status'            => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lastSucceededTime) {
            $res['LastSucceededTime'] = $this->lastSucceededTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DatasetTaskStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LastSucceededTime'])) {
            $model->lastSucceededTime = $map['LastSucceededTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
