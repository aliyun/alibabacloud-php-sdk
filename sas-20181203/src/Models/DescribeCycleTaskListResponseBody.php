<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCycleTaskListResponseBody\cycleScheduleResponseList;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCycleTaskListResponseBody\pageInfo;

class DescribeCycleTaskListResponseBody extends Model
{
    /**
     * @var cycleScheduleResponseList[]
     */
    public $cycleScheduleResponseList;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cycleScheduleResponseList' => 'CycleScheduleResponseList',
        'pageInfo' => 'PageInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->cycleScheduleResponseList)) {
            Model::validateArray($this->cycleScheduleResponseList);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cycleScheduleResponseList) {
            if (\is_array($this->cycleScheduleResponseList)) {
                $res['CycleScheduleResponseList'] = [];
                $n1 = 0;
                foreach ($this->cycleScheduleResponseList as $item1) {
                    $res['CycleScheduleResponseList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['CycleScheduleResponseList'])) {
            if (!empty($map['CycleScheduleResponseList'])) {
                $model->cycleScheduleResponseList = [];
                $n1 = 0;
                foreach ($map['CycleScheduleResponseList'] as $item1) {
                    $model->cycleScheduleResponseList[$n1] = cycleScheduleResponseList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
