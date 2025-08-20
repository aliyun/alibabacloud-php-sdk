<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListEventCenterRuleNameResponseBody\ruleNames;

class ListEventCenterRuleNameResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $isSuccess;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var ruleNames[]
     */
    public $ruleNames;
    protected $_name = [
        'code' => 'Code',
        'isSuccess' => 'IsSuccess',
        'requestId' => 'RequestId',
        'ruleNames' => 'RuleNames',
    ];

    public function validate()
    {
        if (\is_array($this->ruleNames)) {
            Model::validateArray($this->ruleNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->ruleNames) {
            if (\is_array($this->ruleNames)) {
                $res['RuleNames'] = [];
                $n1 = 0;
                foreach ($this->ruleNames as $item1) {
                    $res['RuleNames'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RuleNames'])) {
            if (!empty($map['RuleNames'])) {
                $model->ruleNames = [];
                $n1 = 0;
                foreach ($map['RuleNames'] as $item1) {
                    $model->ruleNames[$n1] = ruleNames::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
