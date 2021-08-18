<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeAppConfigResponseBody\thresholdConfig;
use AlibabaCloud\Tea\Model;

class DescribeAppConfigResponseBody extends Model
{
    /**
     * @description 阈值配置对象
     *
     * @var thresholdConfig
     */
    public $thresholdConfig;

    /**
     * @description 请求ID
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'thresholdConfig' => 'ThresholdConfig',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->thresholdConfig) {
            $res['ThresholdConfig'] = null !== $this->thresholdConfig ? $this->thresholdConfig->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ThresholdConfig'])) {
            $model->thresholdConfig = thresholdConfig::fromMap($map['ThresholdConfig']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
