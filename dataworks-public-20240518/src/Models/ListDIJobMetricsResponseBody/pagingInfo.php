<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDIJobMetricsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDIJobMetricsResponseBody\pagingInfo\jobMetrics;

class pagingInfo extends Model
{
    /**
     * @var jobMetrics[]
     */
    public $jobMetrics;
    protected $_name = [
        'jobMetrics' => 'JobMetrics',
    ];

    public function validate()
    {
        if (\is_array($this->jobMetrics)) {
            Model::validateArray($this->jobMetrics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobMetrics) {
            if (\is_array($this->jobMetrics)) {
                $res['JobMetrics'] = [];
                $n1 = 0;
                foreach ($this->jobMetrics as $item1) {
                    $res['JobMetrics'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['JobMetrics'])) {
            if (!empty($map['JobMetrics'])) {
                $model->jobMetrics = [];
                $n1 = 0;
                foreach ($map['JobMetrics'] as $item1) {
                    $model->jobMetrics[$n1++] = jobMetrics::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
