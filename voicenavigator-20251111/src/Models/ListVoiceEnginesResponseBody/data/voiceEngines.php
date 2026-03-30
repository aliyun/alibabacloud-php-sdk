<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListVoiceEnginesResponseBody\data;

use AlibabaCloud\Dara\Model;

class voiceEngines extends Model
{
    /**
     * @var string
     */
    public $configSchema;

    /**
     * @var string
     */
    public $nlsEngine;

    /**
     * @var string
     */
    public $nlsEngineName;
    protected $_name = [
        'configSchema' => 'ConfigSchema',
        'nlsEngine' => 'NlsEngine',
        'nlsEngineName' => 'NlsEngineName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configSchema) {
            $res['ConfigSchema'] = $this->configSchema;
        }

        if (null !== $this->nlsEngine) {
            $res['NlsEngine'] = $this->nlsEngine;
        }

        if (null !== $this->nlsEngineName) {
            $res['NlsEngineName'] = $this->nlsEngineName;
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
        if (isset($map['ConfigSchema'])) {
            $model->configSchema = $map['ConfigSchema'];
        }

        if (isset($map['NlsEngine'])) {
            $model->nlsEngine = $map['NlsEngine'];
        }

        if (isset($map['NlsEngineName'])) {
            $model->nlsEngineName = $map['NlsEngineName'];
        }

        return $model;
    }
}
