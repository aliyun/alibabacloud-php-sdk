<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetInterveneRuleDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetInterveneRuleDetailResponseBody\data\interveneRuleDetail;

class data extends Model
{
    /**
     * @var int
     */
    public $code;

    /**
     * @var interveneRuleDetail
     */
    public $interveneRuleDetail;
    protected $_name = [
        'code' => 'Code',
        'interveneRuleDetail' => 'InterveneRuleDetail',
    ];

    public function validate()
    {
        if (null !== $this->interveneRuleDetail) {
            $this->interveneRuleDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->interveneRuleDetail) {
            $res['InterveneRuleDetail'] = null !== $this->interveneRuleDetail ? $this->interveneRuleDetail->toArray($noStream) : $this->interveneRuleDetail;
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

        if (isset($map['InterveneRuleDetail'])) {
            $model->interveneRuleDetail = interveneRuleDetail::fromMap($map['InterveneRuleDetail']);
        }

        return $model;
    }
}
