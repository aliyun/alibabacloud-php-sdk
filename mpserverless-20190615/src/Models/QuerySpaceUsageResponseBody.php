<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\SDK\MPServerless\V20190615\Models\QuerySpaceUsageResponseBody\spaceUsageDataList;
use AlibabaCloud\Tea\Model;

class QuerySpaceUsageResponseBody extends Model
{
    /**
     * @example 2022-06-18T16:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example A9FB71D5-2C06-5810-A5FA-B88E45FEA677
     *
     * @var string
     */
    public $requestId;

    /**
     * @example mp-23c7c857-****-4512-bab0-3dbf986e7576
     *
     * @var string
     */
    public $spaceId;

    /**
     * @var spaceUsageDataList[]
     */
    public $spaceUsageDataList;

    /**
     * @example 2022-06-17T16:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'            => 'EndTime',
        'requestId'          => 'RequestId',
        'spaceId'            => 'SpaceId',
        'spaceUsageDataList' => 'SpaceUsageDataList',
        'startTime'          => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }
        if (null !== $this->spaceUsageDataList) {
            $res['SpaceUsageDataList'] = [];
            if (null !== $this->spaceUsageDataList && \is_array($this->spaceUsageDataList)) {
                $n = 0;
                foreach ($this->spaceUsageDataList as $item) {
                    $res['SpaceUsageDataList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySpaceUsageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['SpaceUsageDataList'])) {
            if (!empty($map['SpaceUsageDataList'])) {
                $model->spaceUsageDataList = [];
                $n                         = 0;
                foreach ($map['SpaceUsageDataList'] as $item) {
                    $model->spaceUsageDataList[$n++] = null !== $item ? spaceUsageDataList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
