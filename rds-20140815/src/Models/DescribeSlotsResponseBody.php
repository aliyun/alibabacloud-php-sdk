<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSlotsResponseBody\slots;

class DescribeSlotsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var slots[]
     */
    public $slots;
    protected $_name = [
        'requestId' => 'RequestId',
        'slots' => 'Slots',
    ];

    public function validate()
    {
        if (\is_array($this->slots)) {
            Model::validateArray($this->slots);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->slots) {
            if (\is_array($this->slots)) {
                $res['Slots'] = [];
                $n1 = 0;
                foreach ($this->slots as $item1) {
                    $res['Slots'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Slots'])) {
            if (!empty($map['Slots'])) {
                $model->slots = [];
                $n1 = 0;
                foreach ($map['Slots'] as $item1) {
                    $model->slots[$n1] = slots::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
