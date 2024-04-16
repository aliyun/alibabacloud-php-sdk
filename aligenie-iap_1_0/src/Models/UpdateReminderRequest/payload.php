<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\UpdateReminderRequest;

use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\UpdateReminderRequest\payload\recurrenceRule;
use AlibabaCloud\Tea\Model;

class payload extends Model
{
    /**
     * @example 更新提醒内容
     *
     * @var string
     */
    public $content;

    /**
     * @example 20***34
     *
     * @var int
     */
    public $id;

    /**
     * @example true
     *
     * @var bool
     */
    public $isDebug;

    /**
     * @var recurrenceRule
     */
    public $recurrenceRule;
    protected $_name = [
        'content'        => 'Content',
        'id'             => 'Id',
        'isDebug'        => 'IsDebug',
        'recurrenceRule' => 'RecurrenceRule',
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->isDebug) {
            $res['IsDebug'] = $this->isDebug;
        }
        if (null !== $this->recurrenceRule) {
            $res['RecurrenceRule'] = null !== $this->recurrenceRule ? $this->recurrenceRule->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return payload
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IsDebug'])) {
            $model->isDebug = $map['IsDebug'];
        }
        if (isset($map['RecurrenceRule'])) {
            $model->recurrenceRule = recurrenceRule::fromMap($map['RecurrenceRule']);
        }

        return $model;
    }
}
