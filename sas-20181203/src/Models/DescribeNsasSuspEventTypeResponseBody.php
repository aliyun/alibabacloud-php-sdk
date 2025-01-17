<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeNsasSuspEventTypeResponseBody\eventTypes;

class DescribeNsasSuspEventTypeResponseBody extends Model
{
    /**
     * @var eventTypes[]
     */
    public $eventTypes;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'eventTypes' => 'EventTypes',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->eventTypes)) {
            Model::validateArray($this->eventTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventTypes) {
            if (\is_array($this->eventTypes)) {
                $res['EventTypes'] = [];
                $n1                = 0;
                foreach ($this->eventTypes as $item1) {
                    $res['EventTypes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EventTypes'])) {
            if (!empty($map['EventTypes'])) {
                $model->eventTypes = [];
                $n1                = 0;
                foreach ($map['EventTypes'] as $item1) {
                    $model->eventTypes[$n1++] = eventTypes::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
