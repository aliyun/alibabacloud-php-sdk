<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\UpdateReminderRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\UpdateReminderRequest\payload\recurrenceRule;

class payload extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $isDebug;

    /**
     * @var recurrenceRule
     */
    public $recurrenceRule;
    protected $_name = [
        'content' => 'Content',
        'id' => 'Id',
        'isDebug' => 'IsDebug',
        'recurrenceRule' => 'RecurrenceRule',
    ];

    public function validate()
    {
        if (null !== $this->recurrenceRule) {
            $this->recurrenceRule->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['RecurrenceRule'] = null !== $this->recurrenceRule ? $this->recurrenceRule->toArray($noStream) : $this->recurrenceRule;
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
