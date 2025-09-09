<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRdsPerformanceSummaryResponseBody\rdsPerformanceInfos;

class DescribeRdsPerformanceSummaryResponseBody extends Model
{
    /**
     * @var rdsPerformanceInfos[]
     */
    public $rdsPerformanceInfos;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'rdsPerformanceInfos' => 'RdsPerformanceInfos',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->rdsPerformanceInfos)) {
            Model::validateArray($this->rdsPerformanceInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rdsPerformanceInfos) {
            if (\is_array($this->rdsPerformanceInfos)) {
                $res['RdsPerformanceInfos'] = [];
                $n1 = 0;
                foreach ($this->rdsPerformanceInfos as $item1) {
                    $res['RdsPerformanceInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['RdsPerformanceInfos'])) {
            if (!empty($map['RdsPerformanceInfos'])) {
                $model->rdsPerformanceInfos = [];
                $n1 = 0;
                foreach ($map['RdsPerformanceInfos'] as $item1) {
                    $model->rdsPerformanceInfos[$n1] = rdsPerformanceInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
