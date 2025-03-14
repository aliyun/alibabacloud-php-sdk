<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDomainSecureAlarmListResponseBody\alarmList;
use AlibabaCloud\Tea\Model;

class DescribeDomainSecureAlarmListResponseBody extends Model
{
    /**
     * @description The security alerts in your website assets.
     *
     * @var alarmList[]
     */
    public $alarmList;

    /**
     * @description The request ID.
     *
     * @example D03DD0FD-6041-5107-AC00-383E28F1****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 42
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'alarmList' => 'AlarmList',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmList) {
            $res['AlarmList'] = [];
            if (null !== $this->alarmList && \is_array($this->alarmList)) {
                $n = 0;
                foreach ($this->alarmList as $item) {
                    $res['AlarmList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainSecureAlarmListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmList'])) {
            if (!empty($map['AlarmList'])) {
                $model->alarmList = [];
                $n = 0;
                foreach ($map['AlarmList'] as $item) {
                    $model->alarmList[$n++] = null !== $item ? alarmList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
