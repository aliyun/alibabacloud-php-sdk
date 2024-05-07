<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models;

use AlibabaCloud\Tea\Model;

class TtsCommonShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $ttsRequestShrink;
    protected $_name = [
        'ttsRequestShrink' => 'TtsRequest',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ttsRequestShrink) {
            $res['TtsRequest'] = $this->ttsRequestShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TtsCommonShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TtsRequest'])) {
            $model->ttsRequestShrink = $map['TtsRequest'];
        }

        return $model;
    }
}
