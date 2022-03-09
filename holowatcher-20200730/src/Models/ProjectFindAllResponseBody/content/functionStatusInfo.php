<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\ProjectFindAllResponseBody\content;

use AlibabaCloud\Tea\Model;

class functionStatusInfo extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tips;
    protected $_name = [
        'endTime'   => 'EndTime',
        'progress'  => 'Progress',
        'startTime' => 'StartTime',
        'status'    => 'Status',
        'tips'      => 'Tips',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tips) {
            $res['Tips'] = $this->tips;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return functionStatusInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tips'])) {
            $model->tips = $map['Tips'];
        }

        return $model;
    }
}
