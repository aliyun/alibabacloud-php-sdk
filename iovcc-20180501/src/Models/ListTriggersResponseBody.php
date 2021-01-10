<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListTriggersResponseBody\triggerList;
use AlibabaCloud\Tea\Model;

class ListTriggersResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var triggerList
     */
    public $triggerList;
    protected $_name = [
        'requestId'   => 'RequestId',
        'triggerList' => 'TriggerList',
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
        if (null !== $this->triggerList) {
            $res['TriggerList'] = null !== $this->triggerList ? $this->triggerList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTriggersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TriggerList'])) {
            $model->triggerList = triggerList::fromMap($map['TriggerList']);
        }

        return $model;
    }
}
