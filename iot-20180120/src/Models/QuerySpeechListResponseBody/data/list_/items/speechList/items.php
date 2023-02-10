<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QuerySpeechListResponseBody\data\list_\items\speechList;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example identifying
     *
     * @var string
     */
    public $bizCode;

    /**
     * @example 4de2c367****8c585e5992**
     *
     * @var string
     */
    public $speechCode;

    /**
     * @example test
     *
     * @var string
     */
    public $text;

    /**
     * @example Siyue
     *
     * @var string
     */
    public $voice;
    protected $_name = [
        'bizCode'    => 'BizCode',
        'speechCode' => 'SpeechCode',
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
        if (null !== $this->speechCode) {
            $res['SpeechCode'] = $this->speechCode;
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
        if (isset($map['SpeechCode'])) {
            $model->speechCode = $map['SpeechCode'];
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
