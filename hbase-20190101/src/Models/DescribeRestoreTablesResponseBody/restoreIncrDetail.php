<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreTablesResponseBody;

use AlibabaCloud\Tea\Model;

class restoreIncrDetail extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $process;

    /**
     * @var string
     */
    public $restoreStartTs;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $restoredTs;

    /**
     * @var string
     */
    public $restoreDelay;
    protected $_name = [
        'endTime'        => 'EndTime',
        'startTime'      => 'StartTime',
        'process'        => 'Process',
        'restoreStartTs' => 'RestoreStartTs',
        'state'          => 'State',
        'restoredTs'     => 'RestoredTs',
        'restoreDelay'   => 'RestoreDelay',
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
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->process) {
            $res['Process'] = $this->process;
        }
        if (null !== $this->restoreStartTs) {
            $res['RestoreStartTs'] = $this->restoreStartTs;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->restoredTs) {
            $res['RestoredTs'] = $this->restoredTs;
        }
        if (null !== $this->restoreDelay) {
            $res['RestoreDelay'] = $this->restoreDelay;
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
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Process'])) {
            $model->process = $map['Process'];
        }
        if (isset($map['RestoreStartTs'])) {
            $model->restoreStartTs = $map['RestoreStartTs'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['RestoredTs'])) {
            $model->restoredTs = $map['RestoredTs'];
        }
        if (isset($map['RestoreDelay'])) {
            $model->restoreDelay = $map['RestoreDelay'];
        }

        return $model;
    }
}
