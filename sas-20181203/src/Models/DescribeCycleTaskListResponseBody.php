<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCycleTaskListResponseBody\cycleScheduleResponseList;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCycleTaskListResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

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
     * @example A4EB8B1C-1DEC-5E18-BCD0-D1BBB393****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cycleScheduleResponseList' => 'CycleScheduleResponseList',
        'pageInfo'                  => 'PageInfo',
        'requestId'                 => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cycleScheduleResponseList) {
            $res['CycleScheduleResponseList'] = [];
            if (null !== $this->cycleScheduleResponseList && \is_array($this->cycleScheduleResponseList)) {
                $n = 0;
                foreach ($this->cycleScheduleResponseList as $item) {
                    $res['CycleScheduleResponseList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCycleTaskListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CycleScheduleResponseList'])) {
            if (!empty($map['CycleScheduleResponseList'])) {
                $model->cycleScheduleResponseList = [];
                $n                                = 0;
                foreach ($map['CycleScheduleResponseList'] as $item) {
                    $model->cycleScheduleResponseList[$n++] = null !== $item ? cycleScheduleResponseList::fromMap($item) : $item;
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
