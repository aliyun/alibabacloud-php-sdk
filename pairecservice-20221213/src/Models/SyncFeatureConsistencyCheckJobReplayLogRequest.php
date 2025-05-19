<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

class SyncFeatureConsistencyCheckJobReplayLogRequest extends Model
{
    /**
     * @var string
     */
    public $contextFeatures;

    /**
     * @var string
     */
    public $featureConsistencyCheckJobConfigId;

    /**
     * @var string
     */
    public $generatedFeatures;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $logItemId;

    /**
     * @var string
     */
    public $logRequestId;

    /**
     * @var int
     */
    public $logRequestTime;

    /**
     * @var string
     */
    public $logUserId;

    /**
     * @var string
     */
    public $rawFeatures;

    /**
     * @var string
     */
    public $sceneName;
    protected $_name = [
        'contextFeatures' => 'ContextFeatures',
        'featureConsistencyCheckJobConfigId' => 'FeatureConsistencyCheckJobConfigId',
        'generatedFeatures' => 'GeneratedFeatures',
        'instanceId' => 'InstanceId',
        'logItemId' => 'LogItemId',
        'logRequestId' => 'LogRequestId',
        'logRequestTime' => 'LogRequestTime',
        'logUserId' => 'LogUserId',
        'rawFeatures' => 'RawFeatures',
        'sceneName' => 'SceneName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contextFeatures) {
            $res['ContextFeatures'] = $this->contextFeatures;
        }

        if (null !== $this->featureConsistencyCheckJobConfigId) {
            $res['FeatureConsistencyCheckJobConfigId'] = $this->featureConsistencyCheckJobConfigId;
        }

        if (null !== $this->generatedFeatures) {
            $res['GeneratedFeatures'] = $this->generatedFeatures;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->logItemId) {
            $res['LogItemId'] = $this->logItemId;
        }

        if (null !== $this->logRequestId) {
            $res['LogRequestId'] = $this->logRequestId;
        }

        if (null !== $this->logRequestTime) {
            $res['LogRequestTime'] = $this->logRequestTime;
        }

        if (null !== $this->logUserId) {
            $res['LogUserId'] = $this->logUserId;
        }

        if (null !== $this->rawFeatures) {
            $res['RawFeatures'] = $this->rawFeatures;
        }

        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
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
        if (isset($map['ContextFeatures'])) {
            $model->contextFeatures = $map['ContextFeatures'];
        }

        if (isset($map['FeatureConsistencyCheckJobConfigId'])) {
            $model->featureConsistencyCheckJobConfigId = $map['FeatureConsistencyCheckJobConfigId'];
        }

        if (isset($map['GeneratedFeatures'])) {
            $model->generatedFeatures = $map['GeneratedFeatures'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LogItemId'])) {
            $model->logItemId = $map['LogItemId'];
        }

        if (isset($map['LogRequestId'])) {
            $model->logRequestId = $map['LogRequestId'];
        }

        if (isset($map['LogRequestTime'])) {
            $model->logRequestTime = $map['LogRequestTime'];
        }

        if (isset($map['LogUserId'])) {
            $model->logUserId = $map['LogUserId'];
        }

        if (isset($map['RawFeatures'])) {
            $model->rawFeatures = $map['RawFeatures'];
        }

        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }

        return $model;
    }
}
