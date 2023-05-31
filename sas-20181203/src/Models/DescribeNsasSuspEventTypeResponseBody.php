<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeNsasSuspEventTypeResponseBody\eventTypes;
use AlibabaCloud\Tea\Model;

class DescribeNsasSuspEventTypeResponseBody extends Model
{
    /**
     * @description An array that consists of the information about the alert type.
     *
     * @var eventTypes[]
     */
    public $eventTypes;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 9FBC6E47-7508-58C9-9E76-528E118CB1CC
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'eventTypes' => 'EventTypes',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventTypes) {
            $res['EventTypes'] = [];
            if (null !== $this->eventTypes && \is_array($this->eventTypes)) {
                $n = 0;
                foreach ($this->eventTypes as $item) {
                    $res['EventTypes'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeNsasSuspEventTypeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventTypes'])) {
            if (!empty($map['EventTypes'])) {
                $model->eventTypes = [];
                $n                 = 0;
                foreach ($map['EventTypes'] as $item) {
                    $model->eventTypes[$n++] = null !== $item ? eventTypes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
