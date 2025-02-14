<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventTypesResponseBody\eventTypeList;

class DescribeEventTypesResponseBody extends Model
{
    /**
     * @var eventTypeList[]
     */
    public $eventTypeList;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'eventTypeList' => 'EventTypeList',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->eventTypeList)) {
            Model::validateArray($this->eventTypeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventTypeList) {
            if (\is_array($this->eventTypeList)) {
                $res['EventTypeList'] = [];
                $n1                   = 0;
                foreach ($this->eventTypeList as $item1) {
                    $res['EventTypeList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['EventTypeList'])) {
            if (!empty($map['EventTypeList'])) {
                $model->eventTypeList = [];
                $n1                   = 0;
                foreach ($map['EventTypeList'] as $item1) {
                    $model->eventTypeList[$n1++] = eventTypeList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
