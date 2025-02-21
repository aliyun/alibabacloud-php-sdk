<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorComputeSummaryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorComputeSummaryResponseBody\data\analysis;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorComputeSummaryResponseBody\data\metrics;

class data extends Model
{
    /**
     * @var analysis
     */
    public $analysis;
    /**
     * @var metrics
     */
    public $metrics;
    protected $_name = [
        'analysis' => 'Analysis',
        'metrics'  => 'Metrics',
    ];

    public function validate()
    {
        if (null !== $this->analysis) {
            $this->analysis->validate();
        }
        if (null !== $this->metrics) {
            $this->metrics->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->analysis) {
            $res['Analysis'] = null !== $this->analysis ? $this->analysis->toArray($noStream) : $this->analysis;
        }

        if (null !== $this->metrics) {
            $res['Metrics'] = null !== $this->metrics ? $this->metrics->toArray($noStream) : $this->metrics;
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
        if (isset($map['Analysis'])) {
            $model->analysis = analysis::fromMap($map['Analysis']);
        }

        if (isset($map['Metrics'])) {
            $model->metrics = metrics::fromMap($map['Metrics']);
        }

        return $model;
    }
}
