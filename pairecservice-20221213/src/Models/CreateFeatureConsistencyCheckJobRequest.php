<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

class CreateFeatureConsistencyCheckJobRequest extends Model
{
    /**
     * @var string
     */
    public $environment;
    /**
     * @var string
     */
    public $featureConsistencyCheckJobConfigId;
    /**
     * @var string
     */
    public $instanceId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
