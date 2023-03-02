<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListInstanceAmountResponseBody\instanceCounts;
use AlibabaCloud\Tea\Model;

class ListInstanceAmountResponseBody extends Model
{
    /**
     * @description The trend of the number of auto triggered node instances within the specified period of time.
     *
     * @var instanceCounts[]
     */
    public $instanceCounts;

    /**
     * @description The ID of the request. You can use the ID to troubleshoot issues.
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
     * @return ListInstanceAmountResponseBody
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
