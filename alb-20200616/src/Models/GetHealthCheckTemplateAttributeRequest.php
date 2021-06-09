<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Tea\Model;

class GetHealthCheckTemplateAttributeRequest extends Model
{
    /**
     * @description 健康检查模板Id
     *
     * @var string
     */
    public $healthCheckTemplateId;
    protected $_name = [
        'healthCheckTemplateId' => 'HealthCheckTemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->healthCheckTemplateId) {
            $res['HealthCheckTemplateId'] = $this->healthCheckTemplateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetHealthCheckTemplateAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HealthCheckTemplateId'])) {
            $model->healthCheckTemplateId = $map['HealthCheckTemplateId'];
        }

        return $model;
    }
}
