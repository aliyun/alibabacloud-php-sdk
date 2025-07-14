<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeBeebotIntentResponseBody;

use AlibabaCloud\Tea\Model;

class intent extends Model
{
    /**
     * @var string
     */
    public $aliasName;

    /**
     * @example 2025-04-21 10:29:59.+0800
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1252504
     *
     * @var string
     */
    public $createUserId;

    /**
     * @example xxx@voice-navigator-testonaliyun.com
     *
     * @var string
     */
    public $createUserName;

    /**
     * @example 10717802
     *
     * @var int
     */
    public $intentId;

    /**
     * @var string
     */
    public $intentName;

    /**
     * @example 2025-04-21 15:52:57.+0800
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @example 1252504
     *
     * @var string
     */
    public $modifyUserId;

    /**
     * @example xxx@voice-navigator-testonaliyun.com
     *
     * @var string
     */
    public $modifyUserName;
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
    ];

    public function validate() {}

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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return intent
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

        return $model;
    }
}
