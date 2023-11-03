<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListFileProtectEventResponseBody\eventList;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListFileProtectEventResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class ListFileProtectEventResponseBody extends Model
{
    /**
     * @description The events.
     *
     * @var eventList[]
     */
    public $eventList;

    /**
     * @description The pagination information.
     *
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description The request ID.
     *
     * @example 23AD0BD2-8771-5647-819E-6BA51E212F80
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'eventList' => 'EventList',
        'pageInfo'  => 'PageInfo',
        'requestId' => 'RequestId',
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
     * @return ListFileProtectEventResponseBody
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
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
