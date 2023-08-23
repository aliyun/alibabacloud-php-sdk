<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\ModifyEciScalingConfigurationRequest\containers\securityContext;

use AlibabaCloud\Tea\Model;

class capability extends Model
{
    /**
     * @var string[]
     */
    public $adds;
    protected $_name = [
        'adds' => 'Adds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adds) {
            $res['Adds'] = $this->adds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return capability
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Adds'])) {
            if (!empty($map['Adds'])) {
                $model->adds = $map['Adds'];
            }
        }

        return $model;
    }
}
