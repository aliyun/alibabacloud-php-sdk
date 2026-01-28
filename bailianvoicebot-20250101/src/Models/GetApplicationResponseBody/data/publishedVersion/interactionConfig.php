<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\GetApplicationResponseBody\data\publishedVersion;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\GetApplicationResponseBody\data\publishedVersion\interactionConfig\silenceDetectionConfig;

class interactionConfig extends Model
{
    /**
     * @var silenceDetectionConfig
     */
    public $silenceDetectionConfig;
    protected $_name = [
        'silenceDetectionConfig' => 'SilenceDetectionConfig',
    ];

    public function validate()
    {
        if (null !== $this->silenceDetectionConfig) {
            $this->silenceDetectionConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->silenceDetectionConfig) {
            $res['SilenceDetectionConfig'] = null !== $this->silenceDetectionConfig ? $this->silenceDetectionConfig->toArray($noStream) : $this->silenceDetectionConfig;
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
        if (isset($map['SilenceDetectionConfig'])) {
            $model->silenceDetectionConfig = silenceDetectionConfig::fromMap($map['SilenceDetectionConfig']);
        }

        return $model;
    }
}
