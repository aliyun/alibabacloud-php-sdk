<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenAlarmEventListResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenAlarmEventListResponseBody\suspEvents;

class DescribeScreenAlarmEventListResponseBody extends Model
{
    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var suspEvents[]
     */
    public $suspEvents;
    protected $_name = [
        'pageInfo' => 'PageInfo',
        'requestId' => 'RequestId',
        'suspEvents' => 'SuspEvents',
    ];

    public function validate()
    {
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        if (\is_array($this->suspEvents)) {
            Model::validateArray($this->suspEvents);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->suspEvents) {
            if (\is_array($this->suspEvents)) {
                $res['SuspEvents'] = [];
                $n1 = 0;
                foreach ($this->suspEvents as $item1) {
                    $res['SuspEvents'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SuspEvents'])) {
            if (!empty($map['SuspEvents'])) {
                $model->suspEvents = [];
                $n1 = 0;
                foreach ($map['SuspEvents'] as $item1) {
                    $model->suspEvents[$n1] = suspEvents::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
