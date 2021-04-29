<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeReadDBInstanceDelayResponseBody\items\items\readonlyInstanceDelay;

use AlibabaCloud\Tea\Model;

class readonlyInstanceDelay extends Model
{
    /**
     * @var string
     */
    public $writeLatency;

    /**
     * @var string
     */
    public $flushLatency;

    /**
     * @var string
     */
    public $readDBInstanceName;

    /**
     * @var string
     */
    public $writeLag;

    /**
     * @var string
     */
    public $flushLag;

    /**
     * @var string
     */
    public $sendLatency;

    /**
     * @var string
     */
    public $replayLag;

    /**
     * @var string
     */
    public $replayLatency;
    protected $_name = [
        'writeLatency'       => 'WriteLatency',
        'flushLatency'       => 'FlushLatency',
        'readDBInstanceName' => 'ReadDBInstanceName',
        'writeLag'           => 'WriteLag',
        'flushLag'           => 'FlushLag',
        'sendLatency'        => 'SendLatency',
        'replayLag'          => 'ReplayLag',
        'replayLatency'      => 'ReplayLatency',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->writeLatency) {
            $res['WriteLatency'] = $this->writeLatency;
        }
        if (null !== $this->flushLatency) {
            $res['FlushLatency'] = $this->flushLatency;
        }
        if (null !== $this->readDBInstanceName) {
            $res['ReadDBInstanceName'] = $this->readDBInstanceName;
        }
        if (null !== $this->writeLag) {
            $res['WriteLag'] = $this->writeLag;
        }
        if (null !== $this->flushLag) {
            $res['FlushLag'] = $this->flushLag;
        }
        if (null !== $this->sendLatency) {
            $res['SendLatency'] = $this->sendLatency;
        }
        if (null !== $this->replayLag) {
            $res['ReplayLag'] = $this->replayLag;
        }
        if (null !== $this->replayLatency) {
            $res['ReplayLatency'] = $this->replayLatency;
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
        if (isset($map['WriteLatency'])) {
            $model->writeLatency = $map['WriteLatency'];
        }
        if (isset($map['FlushLatency'])) {
            $model->flushLatency = $map['FlushLatency'];
        }
        if (isset($map['ReadDBInstanceName'])) {
            $model->readDBInstanceName = $map['ReadDBInstanceName'];
        }
        if (isset($map['WriteLag'])) {
            $model->writeLag = $map['WriteLag'];
        }
        if (isset($map['FlushLag'])) {
            $model->flushLag = $map['FlushLag'];
        }
        if (isset($map['SendLatency'])) {
            $model->sendLatency = $map['SendLatency'];
        }
        if (isset($map['ReplayLag'])) {
            $model->replayLag = $map['ReplayLag'];
        }
        if (isset($map['ReplayLatency'])) {
            $model->replayLatency = $map['ReplayLatency'];
        }

        return $model;
    }
}
