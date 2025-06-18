<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetCallDetailRecordResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetCallDetailRecordResponseBody\data\customerEvents\eventSequence;

class customerEvents extends Model
{
    /**
     * @var string
     */
    public $customerId;

    /**
     * @var eventSequence[]
     */
    public $eventSequence;
    protected $_name = [
        'customerId' => 'CustomerId',
        'eventSequence' => 'EventSequence',
    ];

    public function validate()
    {
        if (\is_array($this->eventSequence)) {
            Model::validateArray($this->eventSequence);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customerId) {
            $res['CustomerId'] = $this->customerId;
        }

        if (null !== $this->eventSequence) {
            if (\is_array($this->eventSequence)) {
                $res['EventSequence'] = [];
                $n1 = 0;
                foreach ($this->eventSequence as $item1) {
                    $res['EventSequence'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CustomerId'])) {
            $model->customerId = $map['CustomerId'];
        }

        if (isset($map['EventSequence'])) {
            if (!empty($map['EventSequence'])) {
                $model->eventSequence = [];
                $n1 = 0;
                foreach ($map['EventSequence'] as $item1) {
                    $model->eventSequence[$n1] = eventSequence::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
