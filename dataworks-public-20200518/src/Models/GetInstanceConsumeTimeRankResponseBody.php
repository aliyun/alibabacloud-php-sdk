<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceConsumeTimeRankResponseBody\instanceConsumeTimeRank;

class GetInstanceConsumeTimeRankResponseBody extends Model
{
    /**
     * @var instanceConsumeTimeRank
     */
    public $instanceConsumeTimeRank;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceConsumeTimeRank' => 'InstanceConsumeTimeRank',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->instanceConsumeTimeRank) {
            $this->instanceConsumeTimeRank->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceConsumeTimeRank) {
            $res['InstanceConsumeTimeRank'] = null !== $this->instanceConsumeTimeRank ? $this->instanceConsumeTimeRank->toArray($noStream) : $this->instanceConsumeTimeRank;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
