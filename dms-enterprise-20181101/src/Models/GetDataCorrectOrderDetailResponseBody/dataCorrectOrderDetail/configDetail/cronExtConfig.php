<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailResponseBody\dataCorrectOrderDetail\configDetail;

use AlibabaCloud\Tea\Model;

class cronExtConfig extends Model
{
    /**
     * @description The number of times defragmentation is performed. This parameter is valid only if the value of OptimizeTableAfterEveryClearTimes is greater than 0.
     *
     * @example 0
     *
     * @var int
     */
    public $currentClearTaskCount;

    /**
     * @description Indicates whether the Periodically Optimize Table feature is enabled. Valid values:
     *
     *   **0** (default): The feature is disabled.
     *   **A value greater than 0**: The feature is enabled. The value indicates the number of cleanups after which the system performs defragmentation.
     *
     * @example 0
     *
     * @var int
     */
    public $optimizeTableAfterEveryClearTimes;
    protected $_name = [
        'currentClearTaskCount'             => 'CurrentClearTaskCount',
        'optimizeTableAfterEveryClearTimes' => 'OptimizeTableAfterEveryClearTimes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentClearTaskCount) {
            $res['CurrentClearTaskCount'] = $this->currentClearTaskCount;
        }
        if (null !== $this->optimizeTableAfterEveryClearTimes) {
            $res['OptimizeTableAfterEveryClearTimes'] = $this->optimizeTableAfterEveryClearTimes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cronExtConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentClearTaskCount'])) {
            $model->currentClearTaskCount = $map['CurrentClearTaskCount'];
        }
        if (isset($map['OptimizeTableAfterEveryClearTimes'])) {
            $model->optimizeTableAfterEveryClearTimes = $map['OptimizeTableAfterEveryClearTimes'];
        }

        return $model;
    }
}
