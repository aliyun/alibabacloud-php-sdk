<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class CreateFeatureConsistencyCheckJobRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example Pre
     *
     * @var string
     */
    public $environment;

    /**
     * @description This parameter is required.
     *
     * @example 3
     *
     * @var string
     */
    public $featureConsistencyCheckJobConfigId;

    /**
     * @description This parameter is required.
     *
     * @example pairec-cn-********
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $samplingDuration;
    protected $_name = [
        'environment'                        => 'Environment',
        'featureConsistencyCheckJobConfigId' => 'FeatureConsistencyCheckJobConfigId',
        'instanceId'                         => 'InstanceId',
        'samplingDuration'                   => 'SamplingDuration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->environment) {
            $res['Environment'] = $this->environment;
        }
        if (null !== $this->featureConsistencyCheckJobConfigId) {
            $res['FeatureConsistencyCheckJobConfigId'] = $this->featureConsistencyCheckJobConfigId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->samplingDuration) {
            $res['SamplingDuration'] = $this->samplingDuration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFeatureConsistencyCheckJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Environment'])) {
            $model->environment = $map['Environment'];
        }
        if (isset($map['FeatureConsistencyCheckJobConfigId'])) {
            $model->featureConsistencyCheckJobConfigId = $map['FeatureConsistencyCheckJobConfigId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SamplingDuration'])) {
            $model->samplingDuration = $map['SamplingDuration'];
        }

        return $model;
    }
}
