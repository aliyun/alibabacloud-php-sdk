<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QuerySpeechPushJobSpeechResponse\data\list_;

use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySpeechPushJobSpeechResponse\data\list_\items\speechList;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $bizCode;

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

    /**
     * @var speechList
     */
    public $speechList;
    protected $_name = [
        'bizCode'    => 'BizCode',
        'speechType' => 'SpeechType',
        'text'       => 'Text',
        'voice'      => 'Voice',
        'speechList' => 'SpeechList',
    ];

    public function validate()
    {
        Model::validateRequired('bizCode', $this->bizCode, true);
        Model::validateRequired('speechType', $this->speechType, true);
        Model::validateRequired('text', $this->text, true);
        Model::validateRequired('voice', $this->voice, true);
        Model::validateRequired('speechList', $this->speechList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
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
        if (null !== $this->speechList) {
            $res['SpeechList'] = null !== $this->speechList ? $this->speechList->toMap() : null;
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
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
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
        if (isset($map['SpeechList'])) {
            $model->speechList = speechList::fromMap($map['SpeechList']);
        }

        return $model;
    }
}
