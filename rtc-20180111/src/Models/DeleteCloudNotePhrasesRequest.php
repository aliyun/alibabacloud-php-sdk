<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteCloudNotePhrasesRequest\phrase;

class DeleteCloudNotePhrasesRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var phrase
     */
    public $phrase;
    protected $_name = [
        'appId' => 'AppId',
        'phrase' => 'Phrase',
    ];

    public function validate()
    {
        if (null !== $this->phrase) {
            $this->phrase->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->phrase) {
            $res['Phrase'] = null !== $this->phrase ? $this->phrase->toArray($noStream) : $this->phrase;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['Phrase'])) {
            $model->phrase = phrase::fromMap($map['Phrase']);
        }

        return $model;
    }
}
