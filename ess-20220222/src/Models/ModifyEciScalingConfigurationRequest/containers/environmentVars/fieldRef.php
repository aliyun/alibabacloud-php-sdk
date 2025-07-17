<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\ModifyEciScalingConfigurationRequest\containers\environmentVars;

use AlibabaCloud\Tea\Model;

class fieldRef extends Model
{
    /**
     * @var string
     */
    public $fieldPath;
    protected $_name = [
        'fieldPath' => 'FieldPath',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fieldPath) {
            $res['FieldPath'] = $this->fieldPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fieldRef
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FieldPath'])) {
            $model->fieldPath = $map['FieldPath'];
        }

        return $model;
    }
}
