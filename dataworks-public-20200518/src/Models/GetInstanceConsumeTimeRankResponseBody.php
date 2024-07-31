<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceConsumeTimeRankResponseBody\instanceConsumeTimeRank;
use AlibabaCloud\Tea\Model;

class GetInstanceConsumeTimeRankResponseBody extends Model
{
    /**
     * @description The ranking record of the running durations of instances.
     *
     * @var instanceConsumeTimeRank
     */
    public $instanceConsumeTimeRank;

    /**
     * @description The request ID.
     *
     * @example 6347364dadsfadf****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceConsumeTimeRank' => 'InstanceConsumeTimeRank',
        'requestId'               => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceConsumeTimeRank) {
            $res['InstanceConsumeTimeRank'] = null !== $this->instanceConsumeTimeRank ? $this->instanceConsumeTimeRank->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceConsumeTimeRankResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceConsumeTimeRank'])) {
            $model->instanceConsumeTimeRank = instanceConsumeTimeRank::fromMap($map['InstanceConsumeTimeRank']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
