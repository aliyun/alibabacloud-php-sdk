<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceCountTrendResponseBody\instanceCounts;
use AlibabaCloud\Tea\Model;

class GetInstanceCountTrendResponseBody extends Model
{
    /**
     * @description The quantity trend of instances.
     *
     * @var instanceCounts[]
     */
    public $instanceCounts;

    /**
     * @description The request ID.
     *
     * @example 95279527adhfj****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceCounts' => 'InstanceCounts',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceCounts) {
            $res['InstanceCounts'] = [];
            if (null !== $this->instanceCounts && \is_array($this->instanceCounts)) {
                $n = 0;
                foreach ($this->instanceCounts as $item) {
                    $res['InstanceCounts'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return GetInstanceCountTrendResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceCounts'])) {
            if (!empty($map['InstanceCounts'])) {
                $model->instanceCounts = [];
                $n                     = 0;
                foreach ($map['InstanceCounts'] as $item) {
                    $model->instanceCounts[$n++] = null !== $item ? instanceCounts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
