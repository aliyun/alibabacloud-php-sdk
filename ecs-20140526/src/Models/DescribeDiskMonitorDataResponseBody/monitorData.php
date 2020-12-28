<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDiskMonitorDataResponseBody;

use AlibabaCloud\Tea\Model;

class monitorData extends Model
{
    /**
     * @var int
     */
    public $BPSRead;

    /**
     * @var int
     */
    public $IOPSRead;

    /**
     * @var int
     */
    public $latencyRead;

    /**
     * @var int
     */
    public $BPSTotal;

    /**
     * @var int
     */
    public $IOPSTotal;

    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var int
     */
    public $latencyWrite;

    /**
     * @var int
     */
    public $IOPSWrite;

    /**
     * @var string
     */
    public $diskId;

    /**
     * @var int
     */
    public $BPSWrite;
    protected $_name = [
        'BPSRead'      => 'BPSRead',
        'IOPSRead'     => 'IOPSRead',
        'latencyRead'  => 'LatencyRead',
        'BPSTotal'     => 'BPSTotal',
        'IOPSTotal'    => 'IOPSTotal',
        'timeStamp'    => 'TimeStamp',
        'latencyWrite' => 'LatencyWrite',
        'IOPSWrite'    => 'IOPSWrite',
        'diskId'       => 'DiskId',
        'BPSWrite'     => 'BPSWrite',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->BPSRead) {
            $res['BPSRead'] = $this->BPSRead;
        }
        if (null !== $this->IOPSRead) {
            $res['IOPSRead'] = $this->IOPSRead;
        }
        if (null !== $this->latencyRead) {
            $res['LatencyRead'] = $this->latencyRead;
        }
        if (null !== $this->BPSTotal) {
            $res['BPSTotal'] = $this->BPSTotal;
        }
        if (null !== $this->IOPSTotal) {
            $res['IOPSTotal'] = $this->IOPSTotal;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->latencyWrite) {
            $res['LatencyWrite'] = $this->latencyWrite;
        }
        if (null !== $this->IOPSWrite) {
            $res['IOPSWrite'] = $this->IOPSWrite;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->BPSWrite) {
            $res['BPSWrite'] = $this->BPSWrite;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return monitorData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BPSRead'])) {
            $model->BPSRead = $map['BPSRead'];
        }
        if (isset($map['IOPSRead'])) {
            $model->IOPSRead = $map['IOPSRead'];
        }
        if (isset($map['LatencyRead'])) {
            $model->latencyRead = $map['LatencyRead'];
        }
        if (isset($map['BPSTotal'])) {
            $model->BPSTotal = $map['BPSTotal'];
        }
        if (isset($map['IOPSTotal'])) {
            $model->IOPSTotal = $map['IOPSTotal'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['LatencyWrite'])) {
            $model->latencyWrite = $map['LatencyWrite'];
        }
        if (isset($map['IOPSWrite'])) {
            $model->IOPSWrite = $map['IOPSWrite'];
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['BPSWrite'])) {
            $model->BPSWrite = $map['BPSWrite'];
        }

        return $model;
    }
}
