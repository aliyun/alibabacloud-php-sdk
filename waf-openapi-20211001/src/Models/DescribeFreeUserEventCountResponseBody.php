<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFreeUserEventCountResponseBody\event;
use AlibabaCloud\Tea\Model;

class DescribeFreeUserEventCountResponseBody extends Model
{
    /**
     * @description The information about the security events that are detected by using the basic detection feature.
     *
     * @var event
     */
    public $event;

    /**
     * @description The request ID.
     *
     * @example 0D9FB3BC-0DE9-58A8-9663-ACE56F24F405
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'event'     => 'Event',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->event) {
            $res['Event'] = null !== $this->event ? $this->event->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFreeUserEventCountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Event'])) {
            $model->event = event::fromMap($map['Event']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
