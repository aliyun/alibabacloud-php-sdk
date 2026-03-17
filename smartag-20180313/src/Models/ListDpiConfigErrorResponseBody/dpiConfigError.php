<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\ListDpiConfigErrorResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ListDpiConfigErrorResponseBody\dpiConfigError\ruleConfigErrorList;

class dpiConfigError extends Model
{
    /**
     * @var string
     */
    public $errorType;

    /**
     * @var ruleConfigErrorList[]
     */
    public $ruleConfigErrorList;

    /**
     * @var string
     */
    public $SN;

    /**
     * @var string
     */
    public $smartAGId;
    protected $_name = [
        'errorType' => 'ErrorType',
        'ruleConfigErrorList' => 'RuleConfigErrorList',
        'SN' => 'SN',
        'smartAGId' => 'SmartAGId',
    ];

    public function validate()
    {
        if (\is_array($this->ruleConfigErrorList)) {
            Model::validateArray($this->ruleConfigErrorList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorType) {
            $res['ErrorType'] = $this->errorType;
        }

        if (null !== $this->ruleConfigErrorList) {
            if (\is_array($this->ruleConfigErrorList)) {
                $res['RuleConfigErrorList'] = [];
                $n1 = 0;
                foreach ($this->ruleConfigErrorList as $item1) {
                    $res['RuleConfigErrorList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->SN) {
            $res['SN'] = $this->SN;
        }

        if (null !== $this->smartAGId) {
            $res['SmartAGId'] = $this->smartAGId;
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
        if (isset($map['ErrorType'])) {
            $model->errorType = $map['ErrorType'];
        }

        if (isset($map['RuleConfigErrorList'])) {
            if (!empty($map['RuleConfigErrorList'])) {
                $model->ruleConfigErrorList = [];
                $n1 = 0;
                foreach ($map['RuleConfigErrorList'] as $item1) {
                    $model->ruleConfigErrorList[$n1] = ruleConfigErrorList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SN'])) {
            $model->SN = $map['SN'];
        }

        if (isset($map['SmartAGId'])) {
            $model->smartAGId = $map['SmartAGId'];
        }

        return $model;
    }
}
