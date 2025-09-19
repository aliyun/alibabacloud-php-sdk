<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCommonTargetResultListResponseBody\targetConfig;

class DescribeCommonTargetResultListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var targetConfig
     */
    public $targetConfig;
    protected $_name = [
        'requestId' => 'RequestId',
        'targetConfig' => 'TargetConfig',
    ];

    public function validate()
    {
        if (null !== $this->targetConfig) {
            $this->targetConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->targetConfig) {
            $res['TargetConfig'] = null !== $this->targetConfig ? $this->targetConfig->toArray($noStream) : $this->targetConfig;
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

        if (isset($map['TargetConfig'])) {
            $model->targetConfig = targetConfig::fromMap($map['TargetConfig']);
        }

        return $model;
    }
}
