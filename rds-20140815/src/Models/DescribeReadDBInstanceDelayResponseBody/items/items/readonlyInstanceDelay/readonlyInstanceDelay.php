<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeReadDBInstanceDelayResponseBody\items\items\readonlyInstanceDelay;

use AlibabaCloud\Dara\Model;

class readonlyInstanceDelay extends Model
{
    /**
     * @var string
     */
    public $flushLag;
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
    public $replayLag;
    /**
     * @var string
     */
    public $replayLatency;
    /**
     * @var string
     */
    public $sendLatency;
    /**
     * @var string
     */
    public $writeLag;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
