<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCommonTargetResultListResponseBody\targetConfig;
use AlibabaCloud\Tea\Model;

class DescribeCommonTargetResultListResponseBody extends Model
{
    /**
     * @example 6673D49C-A9AB-40DD-B4A2-B92306701AE7
     *
     * @var string
     */
    public $requestId;

    /**
     * @var targetConfig
     */
    public $targetConfig;
    protected $_name = [
        'requestId'    => 'RequestId',
        'targetConfig' => 'TargetConfig',
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
        if (null !== $this->targetConfig) {
            $res['TargetConfig'] = null !== $this->targetConfig ? $this->targetConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCommonTargetResultListResponseBody
     */
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
