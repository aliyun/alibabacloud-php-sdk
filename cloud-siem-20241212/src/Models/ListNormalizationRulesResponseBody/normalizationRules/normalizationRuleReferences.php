<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListNormalizationRulesResponseBody\normalizationRules;

use AlibabaCloud\Dara\Model;

class normalizationRuleReferences extends Model
{
    /**
     * @var string
     */
    public $dataIngestionId;
    protected $_name = [
        'dataIngestionId' => 'DataIngestionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataIngestionId) {
            $res['DataIngestionId'] = $this->dataIngestionId;
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
        if (isset($map['DataIngestionId'])) {
            $model->dataIngestionId = $map['DataIngestionId'];
        }

        return $model;
    }
}
