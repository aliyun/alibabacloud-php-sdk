<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyCloudNotePhrasesRequest\phrase;
use AlibabaCloud\Tea\Model;

class ModifyCloudNotePhrasesRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example ac7N****
     *
     * @var string
     */
    public $appId;

    /**
     * @description This parameter is required.
     *
     * @var phrase
     */
    public $phrase;
    protected $_name = [
        'appId' => 'AppId',
        'phrase' => 'Phrase',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->phrase) {
            $res['Phrase'] = null !== $this->phrase ? $this->phrase->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCloudNotePhrasesRequest
     */
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
