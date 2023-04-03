<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models\GetCardStatusStatisticsResponseBody\data;

use AlibabaCloud\Tea\Model;

class riskWaringStatisticsDTO extends Model
{
    /**
     * @example 40
     *
     * @var int
     */
    public $leftFlowPercentageWarnCount;

    /**
     * @example 40
     *
     * @var int
     */
    public $stopCount;

    /**
     * @example 100
     *
     * @var int
     */
    public $waringTotalCount;

    /**
     * @example 20
     *
     * @var int
     */
    public $warningCount;
    protected $_name = [
        'leftFlowPercentageWarnCount' => 'LeftFlowPercentageWarnCount',
        'stopCount'                   => 'StopCount',
        'waringTotalCount'            => 'WaringTotalCount',
        'warningCount'                => 'WarningCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->leftFlowPercentageWarnCount) {
            $res['LeftFlowPercentageWarnCount'] = $this->leftFlowPercentageWarnCount;
        }
        if (null !== $this->stopCount) {
            $res['StopCount'] = $this->stopCount;
        }
        if (null !== $this->waringTotalCount) {
            $res['WaringTotalCount'] = $this->waringTotalCount;
        }
        if (null !== $this->warningCount) {
            $res['WarningCount'] = $this->warningCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return riskWaringStatisticsDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LeftFlowPercentageWarnCount'])) {
            $model->leftFlowPercentageWarnCount = $map['LeftFlowPercentageWarnCount'];
        }
        if (isset($map['StopCount'])) {
            $model->stopCount = $map['StopCount'];
        }
        if (isset($map['WaringTotalCount'])) {
            $model->waringTotalCount = $map['WaringTotalCount'];
        }
        if (isset($map['WarningCount'])) {
            $model->warningCount = $map['WarningCount'];
        }

        return $model;
    }
}
