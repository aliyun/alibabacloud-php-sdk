<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\CreateApplicationFederatedCredentialRequest;

use AlibabaCloud\Dara\Model;

class attributeMappings extends Model
{
    /**
     * @var string
     */
    public $sourceValueExpression;

    /**
     * @var string
     */
    public $targetField;
    protected $_name = [
        'sourceValueExpression' => 'SourceValueExpression',
        'targetField' => 'TargetField',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sourceValueExpression) {
            $res['SourceValueExpression'] = $this->sourceValueExpression;
        }

        if (null !== $this->targetField) {
            $res['TargetField'] = $this->targetField;
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
        if (isset($map['SourceValueExpression'])) {
            $model->sourceValueExpression = $map['SourceValueExpression'];
        }

        if (isset($map['TargetField'])) {
            $model->targetField = $map['TargetField'];
        }

        return $model;
    }
}
