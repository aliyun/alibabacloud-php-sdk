<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\DecodeDiagnosticMessageResponseBody\decodedDiagnosticMessage;

use AlibabaCloud\Tea\Model;

class authConditions extends Model
{
    /**
     * @description The key of the condition.
     *
     * @example acs:SourceIp
     *
     * @var string
     */
    public $conditionKey;

    /**
     * @description The values that correspond to the key.
     *
     * @var string[]
     */
    public $conditionValues;
    protected $_name = [
        'conditionKey'    => 'ConditionKey',
        'conditionValues' => 'ConditionValues',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditionKey) {
            $res['ConditionKey'] = $this->conditionKey;
        }
        if (null !== $this->conditionValues) {
            $res['ConditionValues'] = $this->conditionValues;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authConditions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConditionKey'])) {
            $model->conditionKey = $map['ConditionKey'];
        }
        if (isset($map['ConditionValues'])) {
            if (!empty($map['ConditionValues'])) {
                $model->conditionValues = $map['ConditionValues'];
            }
        }

        return $model;
    }
}
