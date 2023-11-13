<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody;

use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\analysis;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\formats;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\metrics;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The analysis results.
     *
     * @var analysis
     */
    public $analysis;

    /**
     * @description The information from the perspective of storage formats.
     *
     * @var formats[]
     */
    public $formats;

    /**
     * @description The metric information.
     *
     * @var metrics
     */
    public $metrics;
    protected $_name = [
        'analysis' => 'Analysis',
        'formats'  => 'Formats',
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
        if (null !== $this->formats) {
            $res['Formats'] = [];
            if (null !== $this->formats && \is_array($this->formats)) {
                $n = 0;
                foreach ($this->formats as $item) {
                    $res['Formats'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Formats'])) {
            if (!empty($map['Formats'])) {
                $model->formats = [];
                $n              = 0;
                foreach ($map['Formats'] as $item) {
                    $model->formats[$n++] = null !== $item ? formats::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Metrics'])) {
            $model->metrics = metrics::fromMap($map['Metrics']);
        }

        return $model;
    }
}
