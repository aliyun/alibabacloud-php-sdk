<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Tea\Model;

class CreateHealthCheckTemplateResponseBody extends Model
{
    /**
     * @description The ID of the health check template.
     *
     * @example hct-1224334
     *
     * @var string
     */
    public $healthCheckTemplateId;

    /**
     * @description The request ID.
     *
     * @example 365F4154-92F6-4AE4-92F8-7FF34B540710
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'healthCheckTemplateId' => 'HealthCheckTemplateId',
        'requestId'             => 'RequestId',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateHealthCheckTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HealthCheckTemplateId'])) {
            $model->healthCheckTemplateId = $map['HealthCheckTemplateId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
