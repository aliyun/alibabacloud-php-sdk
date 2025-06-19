<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateAlertRuleRequest\triggerCondition\extension;

use AlibabaCloud\Dara\Model;

class error extends Model
{
    /**
     * @var bool
     */
    public $autoRerunAlertEnabled;

    /**
     * @var int[]
     */
    public $streamTaskIds;
    protected $_name = [
        'autoRerunAlertEnabled' => 'AutoRerunAlertEnabled',
        'streamTaskIds' => 'StreamTaskIds',
    ];

    public function validate()
    {
        if (\is_array($this->streamTaskIds)) {
            Model::validateArray($this->streamTaskIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRerunAlertEnabled) {
            $res['AutoRerunAlertEnabled'] = $this->autoRerunAlertEnabled;
        }

        if (null !== $this->streamTaskIds) {
            if (\is_array($this->streamTaskIds)) {
                $res['StreamTaskIds'] = [];
                $n1 = 0;
                foreach ($this->streamTaskIds as $item1) {
                    $res['StreamTaskIds'][$n1] = $item1;
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
        if (isset($map['AutoRerunAlertEnabled'])) {
            $model->autoRerunAlertEnabled = $map['AutoRerunAlertEnabled'];
        }

        if (isset($map['StreamTaskIds'])) {
            if (!empty($map['StreamTaskIds'])) {
                $model->streamTaskIds = [];
                $n1 = 0;
                foreach ($map['StreamTaskIds'] as $item1) {
                    $model->streamTaskIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
