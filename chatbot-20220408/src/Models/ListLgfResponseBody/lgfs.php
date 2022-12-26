<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\ListLgfResponseBody;

use AlibabaCloud\Tea\Model;

class lgfs extends Model
{
    /**
     * @example 2021-08-12T16:00:01Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 256756734345
     *
     * @var int
     */
    public $intentId;

    /**
     * @description LGF ID
     *
     * @example 123
     *
     * @var int
     */
    public $lgfId;

    /**
     * @example 2021-08-12T16:00:01Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $ruleText;
    protected $_name = [
        'createTime' => 'CreateTime',
        'intentId'   => 'IntentId',
        'lgfId'      => 'LgfId',
        'modifyTime' => 'ModifyTime',
        'ruleText'   => 'RuleText',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->intentId) {
            $res['IntentId'] = $this->intentId;
        }
        if (null !== $this->lgfId) {
            $res['LgfId'] = $this->lgfId;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->ruleText) {
            $res['RuleText'] = $this->ruleText;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lgfs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['IntentId'])) {
            $model->intentId = $map['IntentId'];
        }
        if (isset($map['LgfId'])) {
            $model->lgfId = $map['LgfId'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['RuleText'])) {
            $model->ruleText = $map['RuleText'];
        }

        return $model;
    }
}
