<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponseBody\contactParameters\contactParameter;

class contactParameters extends Model
{
    /**
     * @var contactParameter[]
     */
    public $contactParameter;
    protected $_name = [
        'contactParameter' => 'ContactParameter',
    ];

    public function validate()
    {
        if (\is_array($this->contactParameter)) {
            Model::validateArray($this->contactParameter);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactParameter) {
            if (\is_array($this->contactParameter)) {
                $res['ContactParameter'] = [];
                $n1 = 0;
                foreach ($this->contactParameter as $item1) {
                    $res['ContactParameter'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ContactParameter'])) {
            if (!empty($map['ContactParameter'])) {
                $model->contactParameter = [];
                $n1 = 0;
                foreach ($map['ContactParameter'] as $item1) {
                    $model->contactParameter[$n1] = contactParameter::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
