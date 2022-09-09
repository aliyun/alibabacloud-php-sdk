<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetProjectJobSummaryResponseBody;

use AlibabaCloud\SDK\IaCService\V20210806\Models\GetProjectJobSummaryResponseBody\jobSummary\detail;
use AlibabaCloud\Tea\Model;

class jobSummary extends Model
{
    /**
     * @var detail[]
     */
    public $detail;

    /**
     * @var int
     */
    public $failCnt;

    /**
     * @var int
     */
    public $runningCnt;

    /**
     * @var int
     */
    public $successCnt;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'detail'     => 'detail',
        'failCnt'    => 'failCnt',
        'runningCnt' => 'runningCnt',
        'successCnt' => 'successCnt',
        'total'      => 'total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detail) {
            $res['detail'] = [];
            if (null !== $this->detail && \is_array($this->detail)) {
                $n = 0;
                foreach ($this->detail as $item) {
                    $res['detail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->failCnt) {
            $res['failCnt'] = $this->failCnt;
        }
        if (null !== $this->runningCnt) {
            $res['runningCnt'] = $this->runningCnt;
        }
        if (null !== $this->successCnt) {
            $res['successCnt'] = $this->successCnt;
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobSummary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['detail'])) {
            if (!empty($map['detail'])) {
                $model->detail = [];
                $n             = 0;
                foreach ($map['detail'] as $item) {
                    $model->detail[$n++] = null !== $item ? detail::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['failCnt'])) {
            $model->failCnt = $map['failCnt'];
        }
        if (isset($map['runningCnt'])) {
            $model->runningCnt = $map['runningCnt'];
        }
        if (isset($map['successCnt'])) {
            $model->successCnt = $map['successCnt'];
        }
        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
