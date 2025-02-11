<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListRulesResponseBody\rules\ruleConditions;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListRulesResponseBody\rules\ruleConditions\cookieConfig\values;

class cookieConfig extends Model
{
    /**
     * @var values[]
     */
    public $values;
    protected $_name = [
        'values' => 'Values',
    ];

    public function validate()
    {
        if (\is_array($this->values)) {
            Model::validateArray($this->values);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->values) {
            if (\is_array($this->values)) {
                $res['Values'] = [];
                $n1            = 0;
                foreach ($this->values as $item1) {
                    $res['Values'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = [];
                $n1            = 0;
                foreach ($map['Values'] as $item1) {
                    $model->values[$n1++] = values::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
