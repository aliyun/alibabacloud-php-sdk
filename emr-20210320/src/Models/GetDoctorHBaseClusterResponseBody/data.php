<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseClusterResponseBody;

use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseClusterResponseBody\data\analysis;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseClusterResponseBody\data\metrics;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The analysis result.
     *
     * @var analysis
     */
    public $analysis;

    /**
     * @description The metric information.
     *
     * @var metrics
     */
    public $metrics;
    protected $_name = [
        'analysis' => 'Analysis',
        'metrics'  => 'Metrics',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->analysis) {
            $res['Analysis'] = null !== $this->analysis ? $this->analysis->toMap() : null;
        }
        if (null !== $this->metrics) {
            $res['Metrics'] = null !== $this->metrics ? $this->metrics->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Analysis'])) {
            $model->analysis = analysis::fromMap($map['Analysis']);
        }
        if (isset($map['Metrics'])) {
            $model->metrics = metrics::fromMap($map['Metrics']);
        }

        return $model;
    }
}
