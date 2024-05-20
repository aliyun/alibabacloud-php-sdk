<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alinlp\V20200629\Models;

use AlibabaCloud\Tea\Model;

class DeleteServiceDataByConditionsShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $conditionsShrink;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $serviceId;

    /**
     * @var string
     */
    public $xDashScopeOpenAPISource;
    protected $_name = [
        'conditionsShrink'        => 'Conditions',
        'serviceId'               => 'ServiceId',
        'xDashScopeOpenAPISource' => 'X-DashScope-OpenAPISource',
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
        if (null !== $this->xDashScopeOpenAPISource) {
            $res['X-DashScope-OpenAPISource'] = $this->xDashScopeOpenAPISource;
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
        if (isset($map['X-DashScope-OpenAPISource'])) {
            $model->xDashScopeOpenAPISource = $map['X-DashScope-OpenAPISource'];
        }

        return $model;
    }
}
