<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseRegionServerResponseBody;

use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseRegionServerResponseBody\data\metrics;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The metric information.
     *
     * @var metrics
     */
    public $metrics;
    protected $_name = [
        'metrics' => 'Metrics',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (isset($map['Metrics'])) {
            $model->metrics = metrics::fromMap($map['Metrics']);
        }

        return $model;
    }
}
