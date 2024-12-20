<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\SubmitChatQuestionResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1869307330227937280
     *
     * @var string
     */
    public $batchId;
    protected $_name = [
        'batchId' => 'batchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchId) {
            $res['batchId'] = $this->batchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['batchId'])) {
            $model->batchId = $map['batchId'];
        }

        return $model;
    }
}
