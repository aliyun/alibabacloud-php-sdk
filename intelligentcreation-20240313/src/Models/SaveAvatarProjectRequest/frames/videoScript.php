<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SaveAvatarProjectRequest\frames;

use AlibabaCloud\Tea\Model;

class videoScript extends Model
{
    /**
     * @example 1.0
     *
     * @var string
     */
    public $speedRate;

    /**
     * @var string
     */
    public $voiceLanguage;

    /**
     * @example 1
     *
     * @var string
     */
    public $voiceTemplateId;

    /**
     * @example 50
     *
     * @var string
     */
    public $volume;
    protected $_name = [
        'speedRate'       => 'speedRate',
        'voiceLanguage'   => 'voiceLanguage',
        'voiceTemplateId' => 'voiceTemplateId',
        'volume'          => 'volume',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->speedRate) {
            $res['speedRate'] = $this->speedRate;
        }
        if (null !== $this->voiceLanguage) {
            $res['voiceLanguage'] = $this->voiceLanguage;
        }
        if (null !== $this->voiceTemplateId) {
            $res['voiceTemplateId'] = $this->voiceTemplateId;
        }
        if (null !== $this->volume) {
            $res['volume'] = $this->volume;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoScript
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['speedRate'])) {
            $model->speedRate = $map['speedRate'];
        }
        if (isset($map['voiceLanguage'])) {
            $model->voiceLanguage = $map['voiceLanguage'];
        }
        if (isset($map['voiceTemplateId'])) {
            $model->voiceTemplateId = $map['voiceTemplateId'];
        }
        if (isset($map['volume'])) {
            $model->volume = $map['volume'];
        }

        return $model;
    }
}
