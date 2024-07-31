<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceStatusStatisticResponseBody\statusCount;
use AlibabaCloud\Tea\Model;

class GetInstanceStatusStatisticResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 0000-ABCD-EFG****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The numbers of instances in different states.
     *
     * @var statusCount
     */
    public $statusCount;
    protected $_name = [
        'requestId'   => 'RequestId',
        'statusCount' => 'StatusCount',
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
        if (null !== $this->statusCount) {
            $res['StatusCount'] = null !== $this->statusCount ? $this->statusCount->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceStatusStatisticResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StatusCount'])) {
            $model->statusCount = statusCount::fromMap($map['StatusCount']);
        }

        return $model;
    }
}
