<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponseBody\webhookParameters\webhookParameter;

class webhookParameters extends Model
{
    /**
     * @var webhookParameter[]
     */
    public $webhookParameter;
    protected $_name = [
        'webhookParameter' => 'WebhookParameter',
    ];

    public function validate()
    {
        if (\is_array($this->webhookParameter)) {
            Model::validateArray($this->webhookParameter);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->webhookParameter) {
            if (\is_array($this->webhookParameter)) {
                $res['WebhookParameter'] = [];
                $n1 = 0;
                foreach ($this->webhookParameter as $item1) {
                    $res['WebhookParameter'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['WebhookParameter'])) {
            if (!empty($map['WebhookParameter'])) {
                $model->webhookParameter = [];
                $n1 = 0;
                foreach ($map['WebhookParameter'] as $item1) {
                    $model->webhookParameter[$n1] = webhookParameter::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
