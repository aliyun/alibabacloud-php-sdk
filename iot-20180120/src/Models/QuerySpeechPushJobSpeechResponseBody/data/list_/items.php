<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QuerySpeechPushJobSpeechResponseBody\data\list_;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySpeechPushJobSpeechResponseBody\data\list_\items\speechList;

class items extends Model
{
    /**
     * @var string
     */
    public $bizCode;

    /**
     * @var speechList
     */
    public $speechList;

    /**
     * @var string
     */
    public $speechType;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $voice;
    protected $_name = [
        'bizCode' => 'BizCode',
        'speechList' => 'SpeechList',
        'speechType' => 'SpeechType',
        'text' => 'Text',
        'voice' => 'Voice',
    ];

    public function validate()
    {
        if (null !== $this->speechList) {
            $this->speechList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }

        if (null !== $this->speechList) {
            $res['SpeechList'] = null !== $this->speechList ? $this->speechList->toArray($noStream) : $this->speechList;
        }

        if (null !== $this->speechType) {
            $res['SpeechType'] = $this->speechType;
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        if (null !== $this->voice) {
            $res['Voice'] = $this->voice;
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
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }

        if (isset($map['SpeechList'])) {
            $model->speechList = speechList::fromMap($map['SpeechList']);
        }

        if (isset($map['SpeechType'])) {
            $model->speechType = $map['SpeechType'];
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        if (isset($map['Voice'])) {
            $model->voice = $map['Voice'];
        }

        return $model;
    }
}
