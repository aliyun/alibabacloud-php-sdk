<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GetInstanceSummaryReportByIntervalResponseBody\instanceTimeIntervalReport;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetInstanceSummaryReportByIntervalResponseBody\instanceTimeIntervalReport\intervalList\instanceSummaryReport;

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
        if (\is_array($this->instanceSummaryReport)) {
            Model::validateArray($this->instanceSummaryReport);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceSummaryReport) {
            if (\is_array($this->instanceSummaryReport)) {
                $res['InstanceSummaryReport'] = [];
                $n1 = 0;
                foreach ($this->instanceSummaryReport as $item1) {
                    $res['InstanceSummaryReport'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['InstanceSummaryReport'])) {
            if (!empty($map['InstanceSummaryReport'])) {
                $model->instanceSummaryReport = [];
                $n1 = 0;
                foreach ($map['InstanceSummaryReport'] as $item1) {
                    $model->instanceSummaryReport[$n1] = instanceSummaryReport::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
