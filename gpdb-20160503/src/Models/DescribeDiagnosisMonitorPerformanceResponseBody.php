<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDiagnosisMonitorPerformanceResponseBody\performances;

class DescribeDiagnosisMonitorPerformanceResponseBody extends Model
{
    /**
     * @var performances[]
     */
    public $performances;

    /**
     * @var int
     */
    public $performancesThreshold;

    /**
     * @var bool
     */
    public $performancesTruncated;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'performances' => 'Performances',
        'performancesThreshold' => 'PerformancesThreshold',
        'performancesTruncated' => 'PerformancesTruncated',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->performances)) {
            Model::validateArray($this->performances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->performances) {
            if (\is_array($this->performances)) {
                $res['Performances'] = [];
                $n1 = 0;
                foreach ($this->performances as $item1) {
                    $res['Performances'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->performancesThreshold) {
            $res['PerformancesThreshold'] = $this->performancesThreshold;
        }

        if (null !== $this->performancesTruncated) {
            $res['PerformancesTruncated'] = $this->performancesTruncated;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Performances'])) {
            if (!empty($map['Performances'])) {
                $model->performances = [];
                $n1 = 0;
                foreach ($map['Performances'] as $item1) {
                    $model->performances[$n1] = performances::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PerformancesThreshold'])) {
            $model->performancesThreshold = $map['PerformancesThreshold'];
        }

        if (isset($map['PerformancesTruncated'])) {
            $model->performancesTruncated = $map['PerformancesTruncated'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
