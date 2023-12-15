<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models;

use AlibabaCloud\Tea\Model;

class GetMonitorResultRequest extends Model
{
    /**
     * @example damo
     *
     * @var string
     */
    public $algorithmVendor;

    /**
     * @example 10001
     *
     * @var string
     */
    public $corpId;

    /**
     * @example 1590409851000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 1
     *
     * @var string
     */
    public $minRecordId;

    /**
     * @example 1590409851000
     *
     * @var int
     */
    public $startTime;

    /**
     * @example d5b65bb43c5242d89b199a360211930c
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'algorithmVendor' => 'AlgorithmVendor',
        'corpId'          => 'CorpId',
        'endTime'         => 'EndTime',
        'minRecordId'     => 'MinRecordId',
        'startTime'       => 'StartTime',
        'taskId'          => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithmVendor) {
            $res['AlgorithmVendor'] = $this->algorithmVendor;
        }
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->minRecordId) {
            $res['MinRecordId'] = $this->minRecordId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMonitorResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgorithmVendor'])) {
            $model->algorithmVendor = $map['AlgorithmVendor'];
        }
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['MinRecordId'])) {
            $model->minRecordId = $map['MinRecordId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
