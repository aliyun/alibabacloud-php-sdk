<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListBeebotIntentUserSayResponseBody;

use AlibabaCloud\Tea\Model;

class userSays extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @example 2025-04-21 14:16:05.+0800
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 10717802
     *
     * @var int
     */
    public $intentId;

    /**
     * @example 2025-04-21 14:16:05.+0800
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @example 17448458
     *
     * @var string
     */
    public $userSayId;
    protected $_name = [
        'content' => 'Content',
        'createTime' => 'CreateTime',
        'intentId' => 'IntentId',
        'modifyTime' => 'ModifyTime',
        'userSayId' => 'UserSayId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->intentId) {
            $res['IntentId'] = $this->intentId;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->userSayId) {
            $res['UserSayId'] = $this->userSayId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userSays
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['IntentId'])) {
            $model->intentId = $map['IntentId'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['UserSayId'])) {
            $model->userSayId = $map['UserSayId'];
        }

        return $model;
    }
}
