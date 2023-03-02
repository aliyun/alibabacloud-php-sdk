<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceStatusCountResponseBody\statusCount;
use AlibabaCloud\Tea\Model;

class GetInstanceStatusCountResponseBody extends Model
{
    /**
     * @description The request ID, which is used to locate the logs and troubleshoot problems.
     *
     * @example 0000-ABCD-EFG****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status statistics of the instance.
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
     * @return GetInstanceStatusCountResponseBody
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
