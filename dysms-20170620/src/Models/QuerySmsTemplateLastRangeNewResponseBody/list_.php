<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsTemplateLastRangeNewResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsTemplateLastRangeNewResponseBody\list_\smsTemplate;

class list_ extends Model
{
    /**
     * @var smsTemplate[]
     */
    public $smsTemplate;
    protected $_name = [
        'smsTemplate' => 'SmsTemplate',
    ];

    public function validate()
    {
        if (\is_array($this->smsTemplate)) {
            Model::validateArray($this->smsTemplate);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->smsTemplate) {
            if (\is_array($this->smsTemplate)) {
                $res['SmsTemplate'] = [];
                $n1 = 0;
                foreach ($this->smsTemplate as $item1) {
                    $res['SmsTemplate'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SmsTemplate'])) {
            if (!empty($map['SmsTemplate'])) {
                $model->smsTemplate = [];
                $n1 = 0;
                foreach ($map['SmsTemplate'] as $item1) {
                    $model->smsTemplate[$n1] = smsTemplate::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
