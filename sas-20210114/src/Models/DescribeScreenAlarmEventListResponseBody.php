<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models;

use AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenAlarmEventListResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenAlarmEventListResponseBody\suspEvents;
use AlibabaCloud\Tea\Model;

class DescribeScreenAlarmEventListResponseBody extends Model
{
    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @example 09969D2C-4FAD-429E-BFBF-9A60DEF8BF6F
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->suspEvents) {
            $res['SuspEvents'] = [];
            if (null !== $this->suspEvents && \is_array($this->suspEvents)) {
                $n = 0;
                foreach ($this->suspEvents as $item) {
                    $res['SuspEvents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScreenAlarmEventListResponseBody
     */
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
                $n = 0;
                foreach ($map['SuspEvents'] as $item) {
                    $model->suspEvents[$n++] = null !== $item ? suspEvents::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
