<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models;

use AlibabaCloud\Tea\Model;

class CreateOnlineEvalTaskShrinkRequest extends Model
{
    /**
     * @description The request data.
     *
     * @var string
     */
    public $bodyShrink;
    protected $_name = [
        'bodyShrink' => 'body',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bodyShrink) {
            $res['body'] = $this->bodyShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOnlineEvalTaskShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->bodyShrink = $map['body'];
        }

        return $model;
    }
}
