<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDIJobMetricsResponseBody\pagingInfo;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDIJobMetricsResponseBody\pagingInfo\jobMetrics\seriesList;
use AlibabaCloud\Tea\Model;

class jobMetrics extends Model
{
    /**
     * @description The name of the metric.
     *
     * @example JobDelay
     *
     * @var string
     */
    public $name;

    /**
     * @description The metric data.
     *
     * @var seriesList[]
     */
    public $seriesList;
    protected $_name = [
        'name'       => 'Name',
        'seriesList' => 'SeriesList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->seriesList) {
            $res['SeriesList'] = [];
            if (null !== $this->seriesList && \is_array($this->seriesList)) {
                $n = 0;
                foreach ($this->seriesList as $item) {
                    $res['SeriesList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobMetrics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SeriesList'])) {
            if (!empty($map['SeriesList'])) {
                $model->seriesList = [];
                $n                 = 0;
                foreach ($map['SeriesList'] as $item) {
                    $model->seriesList[$n++] = null !== $item ? seriesList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
