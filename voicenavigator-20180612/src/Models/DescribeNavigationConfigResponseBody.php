<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\DescribeNavigationConfigResponseBody\greetingConfig;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\DescribeNavigationConfigResponseBody\silenceTimeoutConfig;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\DescribeNavigationConfigResponseBody\unrecognizingConfig;
use AlibabaCloud\Tea\Model;

class DescribeNavigationConfigResponseBody extends Model
{
    /**
     * @var greetingConfig
     */
    public $greetingConfig;

    /**
     * @example 14C39896-AE6D-4643-9C9A-E0566B2C2DDD
     *
     * @var string
     */
    public $requestId;

    /**
     * @var silenceTimeoutConfig
     */
    public $silenceTimeoutConfig;

    /**
     * @var unrecognizingConfig
     */
    public $unrecognizingConfig;
    protected $_name = [
        'greetingConfig'       => 'GreetingConfig',
        'requestId'            => 'RequestId',
        'silenceTimeoutConfig' => 'SilenceTimeoutConfig',
        'unrecognizingConfig'  => 'UnrecognizingConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->greetingConfig) {
            $res['GreetingConfig'] = null !== $this->greetingConfig ? $this->greetingConfig->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->silenceTimeoutConfig) {
            $res['SilenceTimeoutConfig'] = null !== $this->silenceTimeoutConfig ? $this->silenceTimeoutConfig->toMap() : null;
        }
        if (null !== $this->unrecognizingConfig) {
            $res['UnrecognizingConfig'] = null !== $this->unrecognizingConfig ? $this->unrecognizingConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNavigationConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GreetingConfig'])) {
            $model->greetingConfig = greetingConfig::fromMap($map['GreetingConfig']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SilenceTimeoutConfig'])) {
            $model->silenceTimeoutConfig = silenceTimeoutConfig::fromMap($map['SilenceTimeoutConfig']);
        }
        if (isset($map['UnrecognizingConfig'])) {
            $model->unrecognizingConfig = unrecognizingConfig::fromMap($map['UnrecognizingConfig']);
        }

        return $model;
    }
}
