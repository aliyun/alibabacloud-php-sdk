<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListInstanceAmountResponseBody\instanceCounts;
use AlibabaCloud\Tea\Model;

class ListInstanceAmountResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var instanceCounts[]
     */
    public $instanceCounts;
    protected $_name = [
        'requestId'      => 'RequestId',
        'instanceCounts' => 'InstanceCounts',
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
        if (null !== $this->instanceCounts) {
            $res['InstanceCounts'] = [];
            if (null !== $this->instanceCounts && \is_array($this->instanceCounts)) {
                $n = 0;
                foreach ($this->instanceCounts as $item) {
                    $res['InstanceCounts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstanceAmountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceCounts'])) {
            if (!empty($map['InstanceCounts'])) {
                $model->instanceCounts = [];
                $n                     = 0;
                foreach ($map['InstanceCounts'] as $item) {
                    $model->instanceCounts[$n++] = null !== $item ? instanceCounts::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
