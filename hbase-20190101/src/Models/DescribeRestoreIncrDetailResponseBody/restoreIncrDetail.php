<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreIncrDetailResponseBody;

use AlibabaCloud\Tea\Model;

class restoreIncrDetail extends Model
{
    /**
     * @example 2020-11-05T06:45:44Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 0/0
     *
     * @var string
     */
    public $process;

    /**
     * @example 0 ms
     *
     * @var string
     */
    public $restoreDelay;

    /**
     * @example 2020-11-02T18:00:00Z
     *
     * @var string
     */
    public $restoreStartTs;

    /**
     * @example \"\"
     *
     * @var string
     */
    public $restoredTs;

    /**
     * @example 2020-11-05T06:45:44Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example SUCCEEDED
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'endTime'        => 'EndTime',
        'process'        => 'Process',
        'restoreDelay'   => 'RestoreDelay',
        'restoreStartTs' => 'RestoreStartTs',
        'restoredTs'     => 'RestoredTs',
        'startTime'      => 'StartTime',
        'state'          => 'State',
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
        if (null !== $this->process) {
            $res['Process'] = $this->process;
        }
        if (null !== $this->restoreDelay) {
            $res['RestoreDelay'] = $this->restoreDelay;
        }
        if (null !== $this->restoreStartTs) {
            $res['RestoreStartTs'] = $this->restoreStartTs;
        }
        if (null !== $this->restoredTs) {
            $res['RestoredTs'] = $this->restoredTs;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return restoreIncrDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Process'])) {
            $model->process = $map['Process'];
        }
        if (isset($map['RestoreDelay'])) {
            $model->restoreDelay = $map['RestoreDelay'];
        }
        if (isset($map['RestoreStartTs'])) {
            $model->restoreStartTs = $map['RestoreStartTs'];
        }
        if (isset($map['RestoredTs'])) {
            $model->restoredTs = $map['RestoredTs'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
