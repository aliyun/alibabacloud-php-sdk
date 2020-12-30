<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeFlexConfigResponseBody\flexConfig;
use AlibabaCloud\Tea\Model;

class DescribeFlexConfigResponseBody extends Model
{
    /**
     * @var flexConfig
     */
    public $flexConfig;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $promptInfo;
    protected $_name = [
        'flexConfig' => 'FlexConfig',
        'requestId'  => 'RequestId',
        'promptInfo' => 'PromptInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flexConfig) {
            $res['FlexConfig'] = null !== $this->flexConfig ? $this->flexConfig->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->promptInfo) {
            $res['PromptInfo'] = $this->promptInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFlexConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlexConfig'])) {
            $model->flexConfig = flexConfig::fromMap($map['FlexConfig']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PromptInfo'])) {
            $model->promptInfo = $map['PromptInfo'];
        }

        return $model;
    }
}
