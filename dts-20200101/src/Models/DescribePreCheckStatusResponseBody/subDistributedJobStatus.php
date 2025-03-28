<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckStatusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckStatusResponseBody\subDistributedJobStatus\jobProgress;

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
        'code' => 'Code',
        'errorItem' => 'ErrorItem',
        'jobId' => 'JobId',
        'jobName' => 'JobName',
        'jobProgress' => 'JobProgress',
        'state' => 'State',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->jobProgress)) {
            Model::validateArray($this->jobProgress);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->jobProgress)) {
                $res['JobProgress'] = [];
                $n1 = 0;
                foreach ($this->jobProgress as $item1) {
                    $res['JobProgress'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['JobProgress'] as $item1) {
                    $model->jobProgress[$n1++] = jobProgress::fromMap($item1);
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
