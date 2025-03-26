<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\ModifyEciScalingConfigurationRequest\containers\environmentVars;

use AlibabaCloud\Dara\Model;

class fieldRef extends Model
{
    /**
     * @var string
     */
    public $fieldPath;
    protected $_name = [
        'fieldPath' => 'FieldPath',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fieldPath) {
            $res['FieldPath'] = $this->fieldPath;
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
        if (isset($map['FieldPath'])) {
            $model->fieldPath = $map['FieldPath'];
        }

        return $model;
    }
}
