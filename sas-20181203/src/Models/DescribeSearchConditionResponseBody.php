<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSearchConditionResponseBody\conditionList;

class DescribeSearchConditionResponseBody extends Model
{
    /**
     * @var conditionList[]
     */
    public $conditionList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'conditionList' => 'ConditionList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->conditionList)) {
            Model::validateArray($this->conditionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conditionList) {
            if (\is_array($this->conditionList)) {
                $res['ConditionList'] = [];
                $n1 = 0;
                foreach ($this->conditionList as $item1) {
                    $res['ConditionList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ConditionList'])) {
            if (!empty($map['ConditionList'])) {
                $model->conditionList = [];
                $n1 = 0;
                foreach ($map['ConditionList'] as $item1) {
                    $model->conditionList[$n1] = conditionList::fromMap($item1);
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
