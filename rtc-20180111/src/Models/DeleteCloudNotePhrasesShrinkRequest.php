<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Tea\Model;

class DeleteCloudNotePhrasesShrinkRequest extends Model
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
     * @var string
     */
    public $phraseShrink;
    protected $_name = [
        'appId' => 'AppId',
        'phraseShrink' => 'Phrase',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->phraseShrink) {
            $res['Phrase'] = $this->phraseShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCloudNotePhrasesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Phrase'])) {
            $model->phraseShrink = $map['Phrase'];
        }

        return $model;
    }
}
