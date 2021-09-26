<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetRiskStatisticsResponseBody\timeList;
use AlibabaCloud\Tea\Model;

class GetRiskStatisticsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var timeList[]
     */
    public $timeList;
    protected $_name = [
        'requestId' => 'RequestId',
        'timeList'  => 'TimeList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->timeList) {
            $res['TimeList'] = [];
            if (null !== $this->timeList && \is_array($this->timeList)) {
                $n = 0;
                foreach ($this->timeList as $item) {
                    $res['TimeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRiskStatisticsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TimeList'])) {
            if (!empty($map['TimeList'])) {
                $model->timeList = [];
                $n               = 0;
                foreach ($map['TimeList'] as $item) {
                    $model->timeList[$n++] = null !== $item ? timeList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
