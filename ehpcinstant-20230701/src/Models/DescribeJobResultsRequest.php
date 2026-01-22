<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models;

use AlibabaCloud\Dara\Model;

class DescribeJobResultsRequest extends Model
{
    /**
     * @var int
     */
    public $arrayIndex;

    /**
     * @var string
     */
    public $contentEncoding;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $limitBytes;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'arrayIndex' => 'ArrayIndex',
        'contentEncoding' => 'ContentEncoding',
        'jobId' => 'JobId',
        'limitBytes' => 'LimitBytes',
        'startTime' => 'StartTime',
        'taskName' => 'TaskName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arrayIndex) {
            $res['ArrayIndex'] = $this->arrayIndex;
        }

        if (null !== $this->contentEncoding) {
            $res['ContentEncoding'] = $this->contentEncoding;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->limitBytes) {
            $res['LimitBytes'] = $this->limitBytes;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
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
        if (isset($map['ArrayIndex'])) {
            $model->arrayIndex = $map['ArrayIndex'];
        }

        if (isset($map['ContentEncoding'])) {
            $model->contentEncoding = $map['ContentEncoding'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['LimitBytes'])) {
            $model->limitBytes = $map['LimitBytes'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
