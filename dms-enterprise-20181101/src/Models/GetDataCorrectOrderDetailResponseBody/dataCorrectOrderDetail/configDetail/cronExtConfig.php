<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailResponseBody\dataCorrectOrderDetail\configDetail;

use AlibabaCloud\Dara\Model;

class cronExtConfig extends Model
{
    /**
     * @var int
     */
    public $currentClearTaskCount;
    /**
     * @var int
     */
    public $optimizeTableAfterEveryClearTimes;
    protected $_name = [
        'currentClearTaskCount'             => 'CurrentClearTaskCount',
        'optimizeTableAfterEveryClearTimes' => 'OptimizeTableAfterEveryClearTimes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
