<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetInterveneRuleDetailResponseBody;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetInterveneRuleDetailResponseBody\data\interveneRuleDetail;
use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->interveneRuleDetail) {
            $res['InterveneRuleDetail'] = null !== $this->interveneRuleDetail ? $this->interveneRuleDetail->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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
