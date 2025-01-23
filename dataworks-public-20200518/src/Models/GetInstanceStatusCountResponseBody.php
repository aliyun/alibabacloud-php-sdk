<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceStatusCountResponseBody\statusCount;

class GetInstanceStatusCountResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var statusCount
     */
    public $statusCount;
    protected $_name = [
        'requestId'   => 'RequestId',
        'statusCount' => 'StatusCount',
    ];

    public function validate()
    {
        if (null !== $this->statusCount) {
            $this->statusCount->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->statusCount) {
            $res['StatusCount'] = null !== $this->statusCount ? $this->statusCount->toArray($noStream) : $this->statusCount;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StatusCount'])) {
            $model->statusCount = statusCount::fromMap($map['StatusCount']);
        }

        return $model;
    }
}
