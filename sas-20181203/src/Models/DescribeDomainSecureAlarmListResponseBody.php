<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDomainSecureAlarmListResponseBody\alarmList;

class DescribeDomainSecureAlarmListResponseBody extends Model
{
    /**
     * @var alarmList[]
     */
    public $alarmList;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'alarmList'  => 'AlarmList',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->alarmList)) {
            Model::validateArray($this->alarmList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmList) {
            if (\is_array($this->alarmList)) {
                $res['AlarmList'] = [];
                $n1               = 0;
                foreach ($this->alarmList as $item1) {
                    $res['AlarmList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmList'])) {
            if (!empty($map['AlarmList'])) {
                $model->alarmList = [];
                $n1               = 0;
                foreach ($map['AlarmList'] as $item1) {
                    $model->alarmList[$n1++] = alarmList::fromMap($item1);
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
