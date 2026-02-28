<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetSpeechVoiceResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetSpeechVoiceResponseBody\data\items\voiceList;

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
        'label' => 'Label',
        'value' => 'Value',
        'voiceList' => 'VoiceList',
    ];

    public function validate()
    {
        if (null !== $this->voiceList) {
            $this->voiceList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        if (null !== $this->voiceList) {
            $res['VoiceList'] = null !== $this->voiceList ? $this->voiceList->toArray($noStream) : $this->voiceList;
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
