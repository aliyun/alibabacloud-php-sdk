<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alinlp\V20200629\Models;

use AlibabaCloud\Tea\Model;

class DeleteServiceDataByConditionsRequest extends Model
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

    /**
     * @var string
     */
    public $xDashScopeOpenAPISource;
    protected $_name = [
        'conditions'              => 'Conditions',
        'serviceId'               => 'ServiceId',
        'xDashScopeOpenAPISource' => 'X-DashScope-OpenAPISource',
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
        if (null !== $this->xDashScopeOpenAPISource) {
            $res['X-DashScope-OpenAPISource'] = $this->xDashScopeOpenAPISource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteServiceDataByConditionsRequest
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
        if (isset($map['X-DashScope-OpenAPISource'])) {
            $model->xDashScopeOpenAPISource = $map['X-DashScope-OpenAPISource'];
        }

        return $model;
    }
}
