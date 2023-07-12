<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetSpeechVoiceResponse\data;

use AlibabaCloud\SDK\Iot\V20180120\Models\GetSpeechVoiceResponse\data\items\voiceList;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $value;

    /**
     * @var voiceList
     */
    public $voiceList;
    protected $_name = [
        'label'     => 'Label',
        'value'     => 'Value',
        'voiceList' => 'VoiceList',
    ];

    public function validate()
    {
        Model::validateRequired('label', $this->label, true);
        Model::validateRequired('value', $this->value, true);
        Model::validateRequired('voiceList', $this->voiceList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->voiceList) {
            $res['VoiceList'] = null !== $this->voiceList ? $this->voiceList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['VoiceList'])) {
            $model->voiceList = voiceList::fromMap($map['VoiceList']);
        }

        return $model;
    }
}
