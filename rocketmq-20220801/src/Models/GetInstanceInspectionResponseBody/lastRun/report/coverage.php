<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceInspectionResponseBody\lastRun\report;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceInspectionResponseBody\lastRun\report\coverage\timeRange;

class coverage extends Model
{
    /**
     * @var string
     */
    public $diagnosisStatus;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $observedAt;

    /**
     * @var string
     */
    public $result;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $templateCode;

    /**
     * @var timeRange
     */
    public $timeRange;
    protected $_name = [
        'diagnosisStatus' => 'diagnosisStatus',
        'name' => 'name',
        'observedAt' => 'observedAt',
        'result' => 'result',
        'status' => 'status',
        'templateCode' => 'templateCode',
        'timeRange' => 'timeRange',
    ];

    public function validate()
    {
        if (null !== $this->timeRange) {
            $this->timeRange->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->diagnosisStatus) {
            $res['diagnosisStatus'] = $this->diagnosisStatus;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->observedAt) {
            $res['observedAt'] = $this->observedAt;
        }

        if (null !== $this->result) {
            $res['result'] = $this->result;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->templateCode) {
            $res['templateCode'] = $this->templateCode;
        }

        if (null !== $this->timeRange) {
            $res['timeRange'] = null !== $this->timeRange ? $this->timeRange->toArray($noStream) : $this->timeRange;
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
        if (isset($map['diagnosisStatus'])) {
            $model->diagnosisStatus = $map['diagnosisStatus'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['observedAt'])) {
            $model->observedAt = $map['observedAt'];
        }

        if (isset($map['result'])) {
            $model->result = $map['result'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['templateCode'])) {
            $model->templateCode = $map['templateCode'];
        }

        if (isset($map['timeRange'])) {
            $model->timeRange = timeRange::fromMap($map['timeRange']);
        }

        return $model;
    }
}
