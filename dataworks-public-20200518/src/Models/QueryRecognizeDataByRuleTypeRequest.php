<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class QueryRecognizeDataByRuleTypeRequest extends Model
{
    /**
     * @example 2
     *
     * @var string
     */
    public $recognizeRulesType;

    /**
     * @example 10241024
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'recognizeRulesType' => 'RecognizeRulesType',
        'tenantId'           => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recognizeRulesType) {
            $res['RecognizeRulesType'] = $this->recognizeRulesType;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryRecognizeDataByRuleTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecognizeRulesType'])) {
            $model->recognizeRulesType = $map['RecognizeRulesType'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
