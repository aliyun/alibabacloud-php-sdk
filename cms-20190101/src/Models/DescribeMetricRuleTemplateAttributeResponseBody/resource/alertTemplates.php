<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateAttributeResponseBody\resource;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateAttributeResponseBody\resource\alertTemplates\alertTemplate;

class alertTemplates extends Model
{
    /**
     * @var alertTemplate[]
     */
    public $alertTemplate;
    protected $_name = [
        'alertTemplate' => 'AlertTemplate',
    ];

    public function validate()
    {
        if (\is_array($this->alertTemplate)) {
            Model::validateArray($this->alertTemplate);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertTemplate) {
            if (\is_array($this->alertTemplate)) {
                $res['AlertTemplate'] = [];
                $n1 = 0;
                foreach ($this->alertTemplate as $item1) {
                    $res['AlertTemplate'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AlertTemplate'])) {
            if (!empty($map['AlertTemplate'])) {
                $model->alertTemplate = [];
                $n1 = 0;
                foreach ($map['AlertTemplate'] as $item1) {
                    $model->alertTemplate[$n1] = alertTemplate::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
