<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models;

use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\ListSlotsResponseBody\slots;
use AlibabaCloud\Tea\Model;

class ListSlotsResponseBody extends Model
{
    /**
     * @example A731A84D-55C9-44F7-99BB-E1CF0CF19197
     *
     * @var string
     */
    public $requestId;

    /**
     * @var slots[]
     */
    public $slots;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'  => 'RequestId',
        'slots'      => 'Slots',
        'totalCount' => 'TotalCount',
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSlotsResponseBody
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
