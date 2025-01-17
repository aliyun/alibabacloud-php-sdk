<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListFileProtectEventResponseBody\eventList;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListFileProtectEventResponseBody\pageInfo;

class ListFileProtectEventResponseBody extends Model
{
    /**
     * @var eventList[]
     */
    public $eventList;
    /**
     * @var pageInfo
     */
    public $pageInfo;
    /**
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
        if (\is_array($this->eventList)) {
            Model::validateArray($this->eventList);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventList) {
            if (\is_array($this->eventList)) {
                $res['EventList'] = [];
                $n1               = 0;
                foreach ($this->eventList as $item1) {
                    $res['EventList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EventList'])) {
            if (!empty($map['EventList'])) {
                $model->eventList = [];
                $n1               = 0;
                foreach ($map['EventList'] as $item1) {
                    $model->eventList[$n1++] = eventList::fromMap($item1);
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
