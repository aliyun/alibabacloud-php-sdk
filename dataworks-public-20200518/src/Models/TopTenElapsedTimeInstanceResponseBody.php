<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\TopTenElapsedTimeInstanceResponseBody\instanceConsumeTimeRank;
use AlibabaCloud\Tea\Model;

class TopTenElapsedTimeInstanceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var instanceConsumeTimeRank
     */
    public $instanceConsumeTimeRank;
    protected $_name = [
        'requestId'               => 'RequestId',
        'instanceConsumeTimeRank' => 'InstanceConsumeTimeRank',
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
        if (null !== $this->instanceConsumeTimeRank) {
            $res['InstanceConsumeTimeRank'] = null !== $this->instanceConsumeTimeRank ? $this->instanceConsumeTimeRank->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TopTenElapsedTimeInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceConsumeTimeRank'])) {
            $model->instanceConsumeTimeRank = instanceConsumeTimeRank::fromMap($map['InstanceConsumeTimeRank']);
        }

        return $model;
    }
}
