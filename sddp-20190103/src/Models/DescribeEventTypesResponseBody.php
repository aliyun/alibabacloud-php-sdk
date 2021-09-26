<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventTypesResponseBody\eventTypeList;
use AlibabaCloud\Tea\Model;

class DescribeEventTypesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var eventTypeList[]
     */
    public $eventTypeList;
    protected $_name = [
        'requestId'     => 'RequestId',
        'eventTypeList' => 'EventTypeList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->eventTypeList) {
            $res['EventTypeList'] = [];
            if (null !== $this->eventTypeList && \is_array($this->eventTypeList)) {
                $n = 0;
                foreach ($this->eventTypeList as $item) {
                    $res['EventTypeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['EventTypeList'])) {
            if (!empty($map['EventTypeList'])) {
                $model->eventTypeList = [];
                $n                    = 0;
                foreach ($map['EventTypeList'] as $item) {
                    $model->eventTypeList[$n++] = null !== $item ? eventTypeList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
