<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\ListConfigRuleOperatorsResponseBody\operators;

class ListConfigRuleOperatorsResponseBody extends Model
{
    /**
     * @var operators[]
     */
    public $operators;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'operators' => 'Operators',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->operators)) {
            Model::validateArray($this->operators);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operators) {
            if (\is_array($this->operators)) {
                $res['Operators'] = [];
                $n1 = 0;
                foreach ($this->operators as $item1) {
                    $res['Operators'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Operators'])) {
            if (!empty($map['Operators'])) {
                $model->operators = [];
                $n1 = 0;
                foreach ($map['Operators'] as $item1) {
                    $model->operators[$n1] = operators::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
