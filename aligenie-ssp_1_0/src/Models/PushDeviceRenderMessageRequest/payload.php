<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\PushDeviceRenderMessageRequest;

use AlibabaCloud\Dara\Model;

class payload extends Model
{
    /**
     * @var bool
     */
    public $hasNext;

    /**
     * @var int
     */
    public $msgId;

    /**
     * @var string
     */
    public $tts;

    /**
     * @var string
     */
    public $uiContent;
    protected $_name = [
        'hasNext' => 'HasNext',
        'msgId' => 'MsgId',
        'tts' => 'Tts',
        'uiContent' => 'UiContent',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hasNext) {
            $res['HasNext'] = $this->hasNext;
        }

        if (null !== $this->msgId) {
            $res['MsgId'] = $this->msgId;
        }

        if (null !== $this->tts) {
            $res['Tts'] = $this->tts;
        }

        if (null !== $this->uiContent) {
            $res['UiContent'] = $this->uiContent;
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
        if (isset($map['HasNext'])) {
            $model->hasNext = $map['HasNext'];
        }

        if (isset($map['MsgId'])) {
            $model->msgId = $map['MsgId'];
        }

        if (isset($map['Tts'])) {
            $model->tts = $map['Tts'];
        }

        if (isset($map['UiContent'])) {
            $model->uiContent = $map['UiContent'];
        }

        return $model;
    }
}
