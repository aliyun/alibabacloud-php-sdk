<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceRolloutResponseBody\rollout;

class DescribeServiceRolloutResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var rollout
     */
    public $rollout;
    protected $_name = [
        'requestId' => 'RequestId',
        'rollout' => 'Rollout',
    ];

    public function validate()
    {
        if (null !== $this->rollout) {
            $this->rollout->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->rollout) {
            $res['Rollout'] = null !== $this->rollout ? $this->rollout->toArray($noStream) : $this->rollout;
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

        if (isset($map['Rollout'])) {
            $model->rollout = rollout::fromMap($map['Rollout']);
        }

        return $model;
    }
}
