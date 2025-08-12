<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponseBody\fcParameters\FCParameter;

class fcParameters extends Model
{
    /**
     * @var FCParameter[]
     */
    public $FCParameter;
    protected $_name = [
        'FCParameter' => 'FCParameter',
    ];

    public function validate()
    {
        if (\is_array($this->FCParameter)) {
            Model::validateArray($this->FCParameter);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->FCParameter) {
            if (\is_array($this->FCParameter)) {
                $res['FCParameter'] = [];
                $n1 = 0;
                foreach ($this->FCParameter as $item1) {
                    $res['FCParameter'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FCParameter'])) {
            if (!empty($map['FCParameter'])) {
                $model->FCParameter = [];
                $n1 = 0;
                foreach ($map['FCParameter'] as $item1) {
                    $model->FCParameter[$n1] = FCParameter::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
