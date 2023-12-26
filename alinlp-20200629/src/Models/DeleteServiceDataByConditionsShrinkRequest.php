<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alinlp\V20200629\Models;

use AlibabaCloud\Tea\Model;

class DeleteServiceDataByConditionsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $conditionsShrink;

    /**
     * @example 1
     *
     * @var int
     */
    public $serviceId;
    protected $_name = [
        'conditionsShrink' => 'Conditions',
        'serviceId'        => 'ServiceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditionsShrink) {
            $res['Conditions'] = $this->conditionsShrink;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteServiceDataByConditionsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Conditions'])) {
            $model->conditionsShrink = $map['Conditions'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        return $model;
    }
}
