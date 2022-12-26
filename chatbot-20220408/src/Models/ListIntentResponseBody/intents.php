<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\ListIntentResponseBody;

use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListIntentResponseBody\intents\slotInfos;
use AlibabaCloud\Tea\Model;

class intents extends Model
{
    /**
     * @var string
     */
    public $aliasName;

    /**
     * @example 2021-08-12T16:00:01Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 123231
     *
     * @var string
     */
    public $createUserId;

    /**
     * @example test
     *
     * @var string
     */
    public $createUserName;

    /**
     * @example 234234234234
     *
     * @var int
     */
    public $intentId;

    /**
     * @var string
     */
    public $intentName;

    /**
     * @example 2021-08-12T16:00:01Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @example 123231
     *
     * @var string
     */
    public $modifyUserId;

    /**
     * @example test
     *
     * @var string
     */
    public $modifyUserName;

    /**
     * @var slotInfos[]
     */
    public $slotInfos;
    protected $_name = [
        'aliasName'      => 'AliasName',
        'createTime'     => 'CreateTime',
        'createUserId'   => 'CreateUserId',
        'createUserName' => 'CreateUserName',
        'intentId'       => 'IntentId',
        'intentName'     => 'IntentName',
        'modifyTime'     => 'ModifyTime',
        'modifyUserId'   => 'ModifyUserId',
        'modifyUserName' => 'ModifyUserName',
        'slotInfos'      => 'SlotInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['SlotInfos'] = [];
            if (null !== $this->slotInfos && \is_array($this->slotInfos)) {
                $n = 0;
                foreach ($this->slotInfos as $item) {
                    $res['SlotInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return intents
     */
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
                $n                = 0;
                foreach ($map['SlotInfos'] as $item) {
                    $model->slotInfos[$n++] = null !== $item ? slotInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
