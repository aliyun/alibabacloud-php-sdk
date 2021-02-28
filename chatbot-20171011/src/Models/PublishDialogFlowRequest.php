<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class PublishDialogFlowRequest extends Model
{
    /**
     * @var int
     */
    public $dialogId;
    protected $_name = [
        'dialogId' => 'DialogId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dialogId) {
            $res['DialogId'] = $this->dialogId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PublishDialogFlowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DialogId'])) {
            $model->dialogId = $map['DialogId'];
        }

        return $model;
    }
}
