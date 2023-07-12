<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QuerySpeechListResponse\data\list_\items\speechList;

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
    public $speechCode;

    /**
     * @var string
     */
    public $text;

    /**
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
        Model::validateRequired('bizCode', $this->bizCode, true);
        Model::validateRequired('speechCode', $this->speechCode, true);
        Model::validateRequired('text', $this->text, true);
        Model::validateRequired('voice', $this->voice, true);
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
