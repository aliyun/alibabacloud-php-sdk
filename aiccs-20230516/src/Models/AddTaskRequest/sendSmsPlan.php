<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models\AddTaskRequest;

use AlibabaCloud\Tea\Model;

class sendSmsPlan extends Model
{
    /**
     * @description 意向标签
     *
     * @var string[]
     */
    public $intentTags;

    /**
     * @description 短信模板ID
     *
     * @example 71
     *
     * @var int
     */
    public $smsTemplateId;
    protected $_name = [
        'intentTags'    => 'IntentTags',
        'smsTemplateId' => 'SmsTemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->intentTags) {
            $res['IntentTags'] = $this->intentTags;
        }
        if (null !== $this->smsTemplateId) {
            $res['SmsTemplateId'] = $this->smsTemplateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sendSmsPlan
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IntentTags'])) {
            if (!empty($map['IntentTags'])) {
                $model->intentTags = $map['IntentTags'];
            }
        }
        if (isset($map['SmsTemplateId'])) {
            $model->smsTemplateId = $map['SmsTemplateId'];
        }

        return $model;
    }
}
