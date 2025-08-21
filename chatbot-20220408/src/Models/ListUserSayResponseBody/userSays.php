<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\ListUserSayResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListUserSayResponseBody\userSays\slotInfos;

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
        'content' => 'Content',
        'createTime' => 'CreateTime',
        'intentId' => 'IntentId',
        'modifyTime' => 'ModifyTime',
        'slotInfos' => 'SlotInfos',
        'userSayId' => 'UserSayId',
    ];

    public function validate()
    {
        if (\is_array($this->slotInfos)) {
            Model::validateArray($this->slotInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->slotInfos)) {
                $res['SlotInfos'] = [];
                $n1 = 0;
                foreach ($this->slotInfos as $item1) {
                    $res['SlotInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userSayId) {
            $res['UserSayId'] = $this->userSayId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['SlotInfos'] as $item1) {
                    $model->slotInfos[$n1] = slotInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['UserSayId'])) {
            $model->userSayId = $map['UserSayId'];
        }

        return $model;
    }
}
