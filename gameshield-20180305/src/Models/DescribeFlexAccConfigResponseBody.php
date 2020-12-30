<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeFlexAccConfigResponseBody\flexAccConfig;
use AlibabaCloud\Tea\Model;

class DescribeFlexAccConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var flexAccConfig
     */
    public $flexAccConfig;

    /**
     * @var mixed[]
     */
    public $promptInfo;
    protected $_name = [
        'requestId'     => 'RequestId',
        'flexAccConfig' => 'FlexAccConfig',
        'promptInfo'    => 'PromptInfo',
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
        if (null !== $this->flexAccConfig) {
            $res['FlexAccConfig'] = null !== $this->flexAccConfig ? $this->flexAccConfig->toMap() : null;
        }
        if (null !== $this->promptInfo) {
            $res['PromptInfo'] = $this->promptInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFlexAccConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['FlexAccConfig'])) {
            $model->flexAccConfig = flexAccConfig::fromMap($map['FlexAccConfig']);
        }
        if (isset($map['PromptInfo'])) {
            $model->promptInfo = $map['PromptInfo'];
        }

        return $model;
    }
}
