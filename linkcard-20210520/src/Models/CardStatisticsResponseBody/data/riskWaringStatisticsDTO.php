<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models\CardStatisticsResponseBody\data;

use AlibabaCloud\Tea\Model;

class riskWaringStatisticsDTO extends Model
{
    /**
     * @var int
     */
    public $stopCount;

    /**
     * @var int
     */
    public $waringTotalCount;

    /**
     * @var int
     */
    public $warningCount;
    protected $_name = [
        'stopCount'        => 'StopCount',
        'waringTotalCount' => 'WaringTotalCount',
        'warningCount'     => 'WarningCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
