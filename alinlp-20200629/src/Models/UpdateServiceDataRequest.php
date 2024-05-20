<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alinlp\V20200629\Models;

use AlibabaCloud\Tea\Model;

class UpdateServiceDataRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var mixed[]
     */
    public $conditions;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $serviceId;
    protected $_name = [
        'conditions' => 'Conditions',
        'serviceId'  => 'ServiceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditions) {
            $res['Conditions'] = $this->conditions;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateServiceDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Conditions'])) {
            $model->conditions = $map['Conditions'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        return $model;
    }
}
