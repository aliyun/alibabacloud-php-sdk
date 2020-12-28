<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class GetHealthMonitorLogsRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var bool
     */
    public $enableReverse;

    /**
     * @var string
     */
    public $filter;
    protected $_name = [
        'clusterId'     => 'ClusterId',
        'startTime'     => 'StartTime',
        'endTime'       => 'EndTime',
        'enableReverse' => 'EnableReverse',
        'filter'        => 'Filter',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->enableReverse) {
            $res['EnableReverse'] = $this->enableReverse;
        }
        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetHealthMonitorLogsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EnableReverse'])) {
            $model->enableReverse = $map['EnableReverse'];
        }
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }

        return $model;
    }
}
