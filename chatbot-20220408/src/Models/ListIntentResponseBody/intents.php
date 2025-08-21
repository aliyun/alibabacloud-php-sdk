<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\ListIntentResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListIntentResponseBody\intents\slotInfos;

class intents extends Model
{
    /**
     * @var string
     */
    public $aliasName;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $createUserId;

    /**
     * @var string
     */
    public $createUserName;

    /**
     * @var int
     */
    public $intentId;

    /**
     * @var string
     */
    public $intentName;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $modifyUserId;

    /**
     * @var string
     */
    public $modifyUserName;

    /**
     * @var slotInfos[]
     */
    public $slotInfos;
    protected $_name = [
        'aliasName' => 'AliasName',
        'createTime' => 'CreateTime',
        'createUserId' => 'CreateUserId',
        'createUserName' => 'CreateUserName',
        'intentId' => 'IntentId',
        'intentName' => 'IntentName',
        'modifyTime' => 'ModifyTime',
        'modifyUserId' => 'ModifyUserId',
        'modifyUserName' => 'ModifyUserName',
        'slotInfos' => 'SlotInfos',
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
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->createUserId) {
            $res['CreateUserId'] = $this->createUserId;
        }

        if (null !== $this->createUserName) {
            $res['CreateUserName'] = $this->createUserName;
        }

        if (null !== $this->intentId) {
            $res['IntentId'] = $this->intentId;
        }

        if (null !== $this->intentName) {
            $res['IntentName'] = $this->intentName;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->modifyUserId) {
            $res['ModifyUserId'] = $this->modifyUserId;
        }

        if (null !== $this->modifyUserName) {
            $res['ModifyUserName'] = $this->modifyUserName;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CreateUserId'])) {
            $model->createUserId = $map['CreateUserId'];
        }

        if (isset($map['CreateUserName'])) {
            $model->createUserName = $map['CreateUserName'];
        }

        if (isset($map['IntentId'])) {
            $model->intentId = $map['IntentId'];
        }

        if (isset($map['IntentName'])) {
            $model->intentName = $map['IntentName'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['ModifyUserId'])) {
            $model->modifyUserId = $map['ModifyUserId'];
        }

        if (isset($map['ModifyUserName'])) {
            $model->modifyUserName = $map['ModifyUserName'];
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

        return $model;
    }
}
