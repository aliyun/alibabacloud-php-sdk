<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInvadeEventListResponseBody\eventList;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInvadeEventListResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class DescribeInvadeEventListResponseBody extends Model
{
    /**
     * @var eventList[]
     */
    public $eventList;

    /**
     * @var int
     */
    public $highLevelPercent;

    /**
     * @var int
     */
    public $lowLevelPercent;

    /**
     * @var int
     */
    public $middleLevelPercent;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'eventList'          => 'EventList',
        'highLevelPercent'   => 'HighLevelPercent',
        'lowLevelPercent'    => 'LowLevelPercent',
        'middleLevelPercent' => 'MiddleLevelPercent',
        'pageInfo'           => 'PageInfo',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventList) {
            $res['EventList'] = [];
            if (null !== $this->eventList && \is_array($this->eventList)) {
                $n = 0;
                foreach ($this->eventList as $item) {
                    $res['EventList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->highLevelPercent) {
            $res['HighLevelPercent'] = $this->highLevelPercent;
        }
        if (null !== $this->lowLevelPercent) {
            $res['LowLevelPercent'] = $this->lowLevelPercent;
        }
        if (null !== $this->middleLevelPercent) {
            $res['MiddleLevelPercent'] = $this->middleLevelPercent;
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
     * @return DescribeInvadeEventListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventList'])) {
            if (!empty($map['EventList'])) {
                $model->eventList = [];
                $n                = 0;
                foreach ($map['EventList'] as $item) {
                    $model->eventList[$n++] = null !== $item ? eventList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HighLevelPercent'])) {
            $model->highLevelPercent = $map['HighLevelPercent'];
        }
        if (isset($map['LowLevelPercent'])) {
            $model->lowLevelPercent = $map['LowLevelPercent'];
        }
        if (isset($map['MiddleLevelPercent'])) {
            $model->middleLevelPercent = $map['MiddleLevelPercent'];
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
