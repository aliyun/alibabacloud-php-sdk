<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventTypesResponseBody\eventTypeList;
use AlibabaCloud\Tea\Model;

class DescribeEventTypesResponseBody extends Model
{
    /**
     * @description An array that consists of the types of anomalous events.
     *
     * > If you leave the ParentTypeId parameter empty, anomalous event types are returned. If you set the ParentTypeId parameter, anomalous event subtypes under the specified anomalous event type are returned.
     * @var eventTypeList[]
     */
    public $eventTypeList;

    /**
     * @description The ID of the request.
     *
     * @example 769FB3C1-F4C9-42DF-9B72-7077A8989C13
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'eventTypeList' => 'EventTypeList',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventTypeList) {
            $res['EventTypeList'] = [];
            if (null !== $this->eventTypeList && \is_array($this->eventTypeList)) {
                $n = 0;
                foreach ($this->eventTypeList as $item) {
                    $res['EventTypeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEventTypesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventTypeList'])) {
            if (!empty($map['EventTypeList'])) {
                $model->eventTypeList = [];
                $n                    = 0;
                foreach ($map['EventTypeList'] as $item) {
                    $model->eventTypeList[$n++] = null !== $item ? eventTypeList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
