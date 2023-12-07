<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorComputeSummaryResponseBody;

use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorComputeSummaryResponseBody\data\analysis;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorComputeSummaryResponseBody\data\metrics;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The resource analysis results.
     *
     * @var analysis
     */
    public $analysis;

    /**
     * @description The name of the resource whose details are obtained based on the value of ComponentTypes. For example, if the value of ComponentTypes is Queue, the value of this parameter is a queue, such as DW.
     *
     * @example DW
     *
     * @var string
     */
    public $componentName;

    /**
     * @description The metric information.
     *
     * @var metrics
     */
    public $metrics;
    protected $_name = [
        'analysis'      => 'Analysis',
        'componentName' => 'ComponentName',
        'metrics'       => 'Metrics',
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
        if (null !== $this->componentName) {
            $res['ComponentName'] = $this->componentName;
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
        if (isset($map['ComponentName'])) {
            $model->componentName = $map['ComponentName'];
        }
        if (isset($map['Metrics'])) {
            $model->metrics = metrics::fromMap($map['Metrics']);
        }

        return $model;
    }
}
