<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GetInstanceSummaryReportByIntervalResponseBody\instanceTimeIntervalReport;

use AlibabaCloud\SDK\CCC\V20170705\Models\GetInstanceSummaryReportByIntervalResponseBody\instanceTimeIntervalReport\intervalList\instanceSummaryReport;
use AlibabaCloud\Tea\Model;

class intervalList extends Model
{
    /**
     * @var instanceSummaryReport[]
     */
    public $instanceSummaryReport;
    protected $_name = [
        'instanceSummaryReport' => 'InstanceSummaryReport',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceSummaryReport) {
            $res['InstanceSummaryReport'] = [];
            if (null !== $this->instanceSummaryReport && \is_array($this->instanceSummaryReport)) {
                $n = 0;
                foreach ($this->instanceSummaryReport as $item) {
                    $res['InstanceSummaryReport'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return intervalList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceSummaryReport'])) {
            if (!empty($map['InstanceSummaryReport'])) {
                $model->instanceSummaryReport = [];
                $n                            = 0;
                foreach ($map['InstanceSummaryReport'] as $item) {
                    $model->instanceSummaryReport[$n++] = null !== $item ? instanceSummaryReport::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
