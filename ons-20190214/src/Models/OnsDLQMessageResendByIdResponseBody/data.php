<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsDLQMessageResendByIdResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $msgId;
    protected $_name = [
        'msgId' => 'MsgId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->msgId) {
            $res['MsgId'] = $this->msgId;
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
        if (isset($map['MsgId'])) {
            if (!empty($map['MsgId'])) {
                $model->msgId = $map['MsgId'];
            }
        }

        return $model;
    }
}
