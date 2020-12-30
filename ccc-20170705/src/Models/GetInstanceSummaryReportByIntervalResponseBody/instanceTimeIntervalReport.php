<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GetInstanceSummaryReportByIntervalResponseBody;

use AlibabaCloud\SDK\CCC\V20170705\Models\GetInstanceSummaryReportByIntervalResponseBody\instanceTimeIntervalReport\intervalList;
use AlibabaCloud\Tea\Model;

class instanceTimeIntervalReport extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var intervalList
     */
    public $intervalList;
    protected $_name = [
        'instanceId'   => 'InstanceId',
        'intervalList' => 'IntervalList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->intervalList) {
            $res['IntervalList'] = null !== $this->intervalList ? $this->intervalList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceTimeIntervalReport
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IntervalList'])) {
            $model->intervalList = intervalList::fromMap($map['IntervalList']);
        }

        return $model;
    }
}
