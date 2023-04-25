<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetCallDetailRecordResponseBody\data;

use AlibabaCloud\SDK\CCC\V20200701\Models\GetCallDetailRecordResponseBody\data\customerEvents\eventSequence;
use AlibabaCloud\Tea\Model;

class customerEvents extends Model
{
    /**
     * @example 1332315****
     *
     * @var string
     */
    public $customerId;

    /**
     * @var eventSequence[]
     */
    public $eventSequence;
    protected $_name = [
        'customerId'    => 'CustomerId',
        'eventSequence' => 'EventSequence',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customerId) {
            $res['CustomerId'] = $this->customerId;
        }
        if (null !== $this->eventSequence) {
            $res['EventSequence'] = [];
            if (null !== $this->eventSequence && \is_array($this->eventSequence)) {
                $n = 0;
                foreach ($this->eventSequence as $item) {
                    $res['EventSequence'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customerEvents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomerId'])) {
            $model->customerId = $map['CustomerId'];
        }
        if (isset($map['EventSequence'])) {
            if (!empty($map['EventSequence'])) {
                $model->eventSequence = [];
                $n                    = 0;
                foreach ($map['EventSequence'] as $item) {
                    $model->eventSequence[$n++] = null !== $item ? eventSequence::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
