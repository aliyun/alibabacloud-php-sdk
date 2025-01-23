<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class QueryRecognizeDataByRuleTypeRequest extends Model
{
    /**
     * @var string
     */
    public $recognizeRulesType;
    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'recognizeRulesType' => 'RecognizeRulesType',
        'tenantId'           => 'TenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
