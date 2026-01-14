<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models\AddTaskRequest;

use AlibabaCloud\Dara\Model;

class sendSmsPlan extends Model
{
    /**
     * @var string[]
     */
    public $intentTags;

    /**
     * @var int
     */
    public $smsTemplateId;
    protected $_name = [
        'intentTags' => 'IntentTags',
        'smsTemplateId' => 'SmsTemplateId',
    ];

    public function validate()
    {
        if (\is_array($this->intentTags)) {
            Model::validateArray($this->intentTags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->intentTags) {
            if (\is_array($this->intentTags)) {
                $res['IntentTags'] = [];
                $n1 = 0;
                foreach ($this->intentTags as $item1) {
                    $res['IntentTags'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->smsTemplateId) {
            $res['SmsTemplateId'] = $this->smsTemplateId;
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
        if (isset($map['IntentTags'])) {
            if (!empty($map['IntentTags'])) {
                $model->intentTags = [];
                $n1 = 0;
                foreach ($map['IntentTags'] as $item1) {
                    $model->intentTags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SmsTemplateId'])) {
            $model->smsTemplateId = $map['SmsTemplateId'];
        }

        return $model;
    }
}
