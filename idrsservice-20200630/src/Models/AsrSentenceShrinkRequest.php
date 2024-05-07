<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models;

use AlibabaCloud\Tea\Model;

class AsrSentenceShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $asrRequestShrink;
    protected $_name = [
        'asrRequestShrink' => 'AsrRequest',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asrRequestShrink) {
            $res['AsrRequest'] = $this->asrRequestShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AsrSentenceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsrRequest'])) {
            $model->asrRequestShrink = $map['AsrRequest'];
        }

        return $model;
    }
}
