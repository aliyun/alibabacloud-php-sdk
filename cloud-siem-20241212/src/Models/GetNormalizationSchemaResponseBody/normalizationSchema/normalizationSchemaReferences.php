<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetNormalizationSchemaResponseBody\normalizationSchema;

use AlibabaCloud\Dara\Model;

class normalizationSchemaReferences extends Model
{
    /**
     * @var string
     */
    public $normalizationRuleId;
    protected $_name = [
        'normalizationRuleId' => 'NormalizationRuleId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->normalizationRuleId) {
            $res['NormalizationRuleId'] = $this->normalizationRuleId;
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
        if (isset($map['NormalizationRuleId'])) {
            $model->normalizationRuleId = $map['NormalizationRuleId'];
        }

        return $model;
    }
}
