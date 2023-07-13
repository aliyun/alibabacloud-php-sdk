<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QuerySpeechPushJobSpeechResponseBody\data\list_;

use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySpeechPushJobSpeechResponseBody\data\list_\items\speechList;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example ZFDZ
     *
     * @var string
     */
    public $bizCode;

    /**
     * @var speechList
     */
    public $speechList;

    /**
     * @example CUSTOM
     *
     * @var string
     */
    public $speechType;

    /**
     * @var string
     */
    public $text;

    /**
     * @example Xiaoyun
     *
     * @var string
     */
    public $voice;
    protected $_name = [
        'bizCode'    => 'BizCode',
        'speechList' => 'SpeechList',
        'speechType' => 'SpeechType',
        'text'       => 'Text',
        'voice'      => 'Voice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }
        if (null !== $this->speechList) {
            $res['SpeechList'] = null !== $this->speechList ? $this->speechList->toMap() : null;
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
