<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\ListDpiConfigErrorResponseBody;

use AlibabaCloud\SDK\Smartag\V20180313\Models\ListDpiConfigErrorResponseBody\dpiConfigError\ruleConfigErrorList;
use AlibabaCloud\Tea\Model;

class dpiConfigError extends Model
{
    /**
     * @var string
     */
    public $SN;

    /**
     * @var string
     */
    public $smartAGId;

    /**
     * @var string
     */
    public $errorType;

    /**
     * @var ruleConfigErrorList[]
     */
    public $ruleConfigErrorList;
    protected $_name = [
        'SN'                  => 'SN',
        'smartAGId'           => 'SmartAGId',
        'errorType'           => 'ErrorType',
        'ruleConfigErrorList' => 'RuleConfigErrorList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->SN) {
            $res['SN'] = $this->SN;
        }
        if (null !== $this->smartAGId) {
            $res['SmartAGId'] = $this->smartAGId;
        }
        if (null !== $this->errorType) {
            $res['ErrorType'] = $this->errorType;
        }
        if (null !== $this->ruleConfigErrorList) {
            $res['RuleConfigErrorList'] = [];
            if (null !== $this->ruleConfigErrorList && \is_array($this->ruleConfigErrorList)) {
                $n = 0;
                foreach ($this->ruleConfigErrorList as $item) {
                    $res['RuleConfigErrorList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dpiConfigError
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SN'])) {
            $model->SN = $map['SN'];
        }
        if (isset($map['SmartAGId'])) {
            $model->smartAGId = $map['SmartAGId'];
        }
        if (isset($map['ErrorType'])) {
            $model->errorType = $map['ErrorType'];
        }
        if (isset($map['RuleConfigErrorList'])) {
            if (!empty($map['RuleConfigErrorList'])) {
                $model->ruleConfigErrorList = [];
                $n                          = 0;
                foreach ($map['RuleConfigErrorList'] as $item) {
                    $model->ruleConfigErrorList[$n++] = null !== $item ? ruleConfigErrorList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
