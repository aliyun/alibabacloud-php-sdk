<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponseBody\slsParameters\slsParameter;

class slsParameters extends Model
{
    /**
     * @var slsParameter[]
     */
    public $slsParameter;
    protected $_name = [
        'slsParameter' => 'SlsParameter',
    ];

    public function validate()
    {
        if (\is_array($this->slsParameter)) {
            Model::validateArray($this->slsParameter);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->slsParameter) {
            if (\is_array($this->slsParameter)) {
                $res['SlsParameter'] = [];
                $n1 = 0;
                foreach ($this->slsParameter as $item1) {
                    $res['SlsParameter'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SlsParameter'])) {
            if (!empty($map['SlsParameter'])) {
                $model->slsParameter = [];
                $n1 = 0;
                foreach ($map['SlsParameter'] as $item1) {
                    $model->slsParameter[$n1] = slsParameter::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
