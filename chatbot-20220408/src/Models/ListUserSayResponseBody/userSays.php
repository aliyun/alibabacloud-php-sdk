<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\ListUserSayResponseBody;

use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListUserSayResponseBody\userSays\slotInfos;
use AlibabaCloud\Tea\Model;

class userSays extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $intentId;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var slotInfos[]
     */
    public $slotInfos;

    /**
     * @var int
     */
    public $userSayId;
    protected $_name = [
        'content'    => 'Content',
        'createTime' => 'CreateTime',
        'intentId'   => 'IntentId',
        'modifyTime' => 'ModifyTime',
        'slotInfos'  => 'SlotInfos',
        'userSayId'  => 'UserSayId',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->slotInfos) {
            $res['SlotInfos'] = [];
            if (null !== $this->slotInfos && \is_array($this->slotInfos)) {
                $n = 0;
                foreach ($this->slotInfos as $item) {
                    $res['SlotInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['SlotInfos'])) {
            if (!empty($map['SlotInfos'])) {
                $model->slotInfos = [];
                $n                = 0;
                foreach ($map['SlotInfos'] as $item) {
                    $model->slotInfos[$n++] = null !== $item ? slotInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserSayId'])) {
            $model->userSayId = $map['UserSayId'];
        }

        return $model;
    }
}
