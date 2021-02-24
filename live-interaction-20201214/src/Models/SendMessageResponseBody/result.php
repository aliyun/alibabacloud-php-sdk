<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SendMessageResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 消息ID
     *
     * @var string
     */
    public $msgId;

    /**
     * @description 消息创建时间戳(毫秒)
     *
     * @var int
     */
    public $createTime;
    protected $_name = [
        'msgId'      => 'MsgId',
        'createTime' => 'CreateTime',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MsgId'])) {
            $model->msgId = $map['MsgId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        return $model;
    }
}
