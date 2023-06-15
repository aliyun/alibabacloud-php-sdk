<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSlotsResponseBody\slots;
use AlibabaCloud\Tea\Model;

class DescribeSlotsResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 76AF0609-4195-5DFC-BC78-3AD76FF872BB
     *
     * @var string
     */
    public $requestId;

    /**
     * @description An array that consists of information about replication slots.
     *
     * @var slots[]
     */
    public $slots;
    protected $_name = [
        'requestId' => 'RequestId',
        'slots'     => 'Slots',
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
        if (null !== $this->slots) {
            $res['Slots'] = [];
            if (null !== $this->slots && \is_array($this->slots)) {
                $n = 0;
                foreach ($this->slots as $item) {
                    $res['Slots'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSlotsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Slots'])) {
            if (!empty($map['Slots'])) {
                $model->slots = [];
                $n            = 0;
                foreach ($map['Slots'] as $item) {
                    $model->slots[$n++] = null !== $item ? slots::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
