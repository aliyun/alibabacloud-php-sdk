<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class CreateEciScalingConfigurationResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 89945DD3-9072-47D0-A318-353284CF****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the elastic container instance.
     *
     * @example eci-uf6fonnghi50u374****
     *
     * @var string
     */
    public $scalingConfigurationId;
    protected $_name = [
        'requestId'              => 'RequestId',
        'scalingConfigurationId' => 'ScalingConfigurationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scalingConfigurationId) {
            $res['ScalingConfigurationId'] = $this->scalingConfigurationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEciScalingConfigurationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScalingConfigurationId'])) {
            $model->scalingConfigurationId = $map['ScalingConfigurationId'];
        }

        return $model;
    }
}
