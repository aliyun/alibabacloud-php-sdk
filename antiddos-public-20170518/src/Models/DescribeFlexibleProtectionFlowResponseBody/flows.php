<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeFlexibleProtectionFlowResponseBody;

use AlibabaCloud\Tea\Model;

class flows extends Model
{
    /**
     * @var float
     */
    public $usedFlow;

    /**
     * @var int
     */
    public $time;

    /**
     * @var float
     */
    public $addFlow;

    /**
     * @var float
     */
    public $useableFlow;
    protected $_name = [
        'usedFlow'    => 'UsedFlow',
        'time'        => 'Time',
        'addFlow'     => 'AddFlow',
        'useableFlow' => 'UseableFlow',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->usedFlow) {
            $res['UsedFlow'] = $this->usedFlow;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->addFlow) {
            $res['AddFlow'] = $this->addFlow;
        }
        if (null !== $this->useableFlow) {
            $res['UseableFlow'] = $this->useableFlow;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flows
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UsedFlow'])) {
            $model->usedFlow = $map['UsedFlow'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['AddFlow'])) {
            $model->addFlow = $map['AddFlow'];
        }
        if (isset($map['UseableFlow'])) {
            $model->useableFlow = $map['UseableFlow'];
        }

        return $model;
    }
}
