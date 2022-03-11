<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckStatusResponseBody;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckStatusResponseBody\subDistributedJobStatus\jobProgress;
use AlibabaCloud\Tea\Model;

class subDistributedJobStatus extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $errorItem;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var jobProgress[]
     */
    public $jobProgress;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'code'        => 'Code',
        'errorItem'   => 'ErrorItem',
        'jobId'       => 'JobId',
        'jobName'     => 'JobName',
        'jobProgress' => 'JobProgress',
        'state'       => 'State',
        'total'       => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->errorItem) {
            $res['ErrorItem'] = $this->errorItem;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->jobProgress) {
            $res['JobProgress'] = [];
            if (null !== $this->jobProgress && \is_array($this->jobProgress)) {
                $n = 0;
                foreach ($this->jobProgress as $item) {
                    $res['JobProgress'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subDistributedJobStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ErrorItem'])) {
            $model->errorItem = $map['ErrorItem'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['JobProgress'])) {
            if (!empty($map['JobProgress'])) {
                $model->jobProgress = [];
                $n                  = 0;
                foreach ($map['JobProgress'] as $item) {
                    $model->jobProgress[$n++] = null !== $item ? jobProgress::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
