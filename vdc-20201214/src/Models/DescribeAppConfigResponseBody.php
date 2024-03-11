<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeAppConfigResponseBody\thresholdConfig;
use AlibabaCloud\Tea\Model;

class DescribeAppConfigResponseBody extends Model
{
    /**
     * @example 231470C1-ACFB-4C9F-844F-4CFE1E3804C5
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1000
     *
     * @var thresholdConfig
     */
    public $thresholdConfig;
    protected $_name = [
        'requestId'       => 'RequestId',
        'thresholdConfig' => 'ThresholdConfig',
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
        if (null !== $this->thresholdConfig) {
            $res['ThresholdConfig'] = null !== $this->thresholdConfig ? $this->thresholdConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAppConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ThresholdConfig'])) {
            $model->thresholdConfig = thresholdConfig::fromMap($map['ThresholdConfig']);
        }

        return $model;
    }
}
