<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\DescribeNavigationConfigResponseBody\greetingConfig;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\DescribeNavigationConfigResponseBody\silenceTimeoutConfig;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\DescribeNavigationConfigResponseBody\unrecognizingConfig;

class DescribeNavigationConfigResponseBody extends Model
{
    /**
     * @var greetingConfig
     */
    public $greetingConfig;
    /**
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
        if (null !== $this->greetingConfig) {
            $this->greetingConfig->validate();
        }
        if (null !== $this->silenceTimeoutConfig) {
            $this->silenceTimeoutConfig->validate();
        }
        if (null !== $this->unrecognizingConfig) {
            $this->unrecognizingConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->greetingConfig) {
            $res['GreetingConfig'] = null !== $this->greetingConfig ? $this->greetingConfig->toArray($noStream) : $this->greetingConfig;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->silenceTimeoutConfig) {
            $res['SilenceTimeoutConfig'] = null !== $this->silenceTimeoutConfig ? $this->silenceTimeoutConfig->toArray($noStream) : $this->silenceTimeoutConfig;
        }

        if (null !== $this->unrecognizingConfig) {
            $res['UnrecognizingConfig'] = null !== $this->unrecognizingConfig ? $this->unrecognizingConfig->toArray($noStream) : $this->unrecognizingConfig;
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
