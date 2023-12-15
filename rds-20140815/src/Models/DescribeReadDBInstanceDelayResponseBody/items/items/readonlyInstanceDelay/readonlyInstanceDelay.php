<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeReadDBInstanceDelayResponseBody\items\items\readonlyInstanceDelay;

use AlibabaCloud\Tea\Model;

class readonlyInstanceDelay extends Model
{
    /**
     * @description The duration that is allowed for the latency in the persistence of WAL data. Unit: seconds.
     *
     * @example 0
     *
     * @var string
     */
    public $flushLag;

    /**
     * @description The data size that is allowed for the latency in the persistence of WAL data. Unit: MB.
     *
     * @example 0
     *
     * @var string
     */
    public $flushLatency;

    /**
     * @description The read-only instance ID.
     *
     * @example rr-bp*****
     *
     * @var string
     */
    public $readDBInstanceName;

    /**
     * @description The duration that is allowed for the latency in the playback of WAL data. Unit: seconds.
     *
     * @example 0
     *
     * @var string
     */
    public $replayLag;

    /**
     * @description The data size that is allowed for the latency in the playback of WAL data. Unit: MB.
     *
     * @example 0
     *
     * @var string
     */
    public $replayLatency;

    /**
     * @description The data size that is allowed for the latency in the sending of WAL data. Unit: MB.
     *
     * @example 0
     *
     * @var string
     */
    public $sendLatency;

    /**
     * @description The duration that is allowed for the latency in the write-back of WAL data. Unit: seconds.
     *
     * @example 0
     *
     * @var string
     */
    public $writeLag;

    /**
     * @description The data size that is allowed for the latency in the write-back of WAL data. Unit: MB.
     *
     * @example 0
     *
     * @var string
     */
    public $writeLatency;
    protected $_name = [
        'flushLag'           => 'FlushLag',
        'flushLatency'       => 'FlushLatency',
        'readDBInstanceName' => 'ReadDBInstanceName',
        'replayLag'          => 'ReplayLag',
        'replayLatency'      => 'ReplayLatency',
        'sendLatency'        => 'SendLatency',
        'writeLag'           => 'WriteLag',
        'writeLatency'       => 'WriteLatency',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flushLag) {
            $res['FlushLag'] = $this->flushLag;
        }
        if (null !== $this->flushLatency) {
            $res['FlushLatency'] = $this->flushLatency;
        }
        if (null !== $this->readDBInstanceName) {
            $res['ReadDBInstanceName'] = $this->readDBInstanceName;
        }
        if (null !== $this->replayLag) {
            $res['ReplayLag'] = $this->replayLag;
        }
        if (null !== $this->replayLatency) {
            $res['ReplayLatency'] = $this->replayLatency;
        }
        if (null !== $this->sendLatency) {
            $res['SendLatency'] = $this->sendLatency;
        }
        if (null !== $this->writeLag) {
            $res['WriteLag'] = $this->writeLag;
        }
        if (null !== $this->writeLatency) {
            $res['WriteLatency'] = $this->writeLatency;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return readonlyInstanceDelay
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlushLag'])) {
            $model->flushLag = $map['FlushLag'];
        }
        if (isset($map['FlushLatency'])) {
            $model->flushLatency = $map['FlushLatency'];
        }
        if (isset($map['ReadDBInstanceName'])) {
            $model->readDBInstanceName = $map['ReadDBInstanceName'];
        }
        if (isset($map['ReplayLag'])) {
            $model->replayLag = $map['ReplayLag'];
        }
        if (isset($map['ReplayLatency'])) {
            $model->replayLatency = $map['ReplayLatency'];
        }
        if (isset($map['SendLatency'])) {
            $model->sendLatency = $map['SendLatency'];
        }
        if (isset($map['WriteLag'])) {
            $model->writeLag = $map['WriteLag'];
        }
        if (isset($map['WriteLatency'])) {
            $model->writeLatency = $map['WriteLatency'];
        }

        return $model;
    }
}
