<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GetInstanceSummaryReportByIntervalResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetInstanceSummaryReportByIntervalResponseBody\instanceTimeIntervalReport\intervalList;

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
        'instanceId' => 'InstanceId',
        'intervalList' => 'IntervalList',
    ];

    public function validate()
    {
        if (null !== $this->intervalList) {
            $this->intervalList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->intervalList) {
            $res['IntervalList'] = null !== $this->intervalList ? $this->intervalList->toArray($noStream) : $this->intervalList;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['IntervalList'])) {
            $model->intervalList = intervalList::fromMap($map['IntervalList']);
        }

        return $model;
    }
}
