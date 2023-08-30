<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListInstancePlansModificationResponseBody\plans;
use AlibabaCloud\Tea\Model;

class ListInstancePlansModificationResponseBody extends Model
{
    /**
     * @description The operating system types supported by the plan.
     *
     * @var plans[]
     */
    public $plans;

    /**
     * @description The request ID.
     *
     * @example 20758A-585D-4A41-A9B2-28DA8F4F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'plans'     => 'Plans',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->plans) {
            $res['Plans'] = [];
            if (null !== $this->plans && \is_array($this->plans)) {
                $n = 0;
                foreach ($this->plans as $item) {
                    $res['Plans'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListInstancePlansModificationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Plans'])) {
            if (!empty($map['Plans'])) {
                $model->plans = [];
                $n            = 0;
                foreach ($map['Plans'] as $item) {
                    $model->plans[$n++] = null !== $item ? plans::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
