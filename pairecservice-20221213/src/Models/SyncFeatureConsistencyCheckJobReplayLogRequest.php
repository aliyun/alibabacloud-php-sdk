<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class SyncFeatureConsistencyCheckJobReplayLogRequest extends Model
{
    /**
     * @example [{\"Value\":{\"FloatFeature\":0.1}}]
     *
     * @var string
     */
    public $contextFeatures;

    /**
     * @example 3
     *
     * @var string
     */
    public $featureConsistencyCheckJobConfigId;

    /**
     * @example week_day:1 | userid:3 | itemid:9001 | cate:cat1 | click_5_seq__cate:cat1
     *
     * @var string
     */
    public $generatedFeatures;

    /**
     * @example pairec-cn-********
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 9010
     *
     * @var string
     */
    public $logItemId;

    /**
     * @example 728C5E01-ABF6-5AA8-B9FC-B3BA05DECC77
     *
     * @var string
     */
    public $logRequestId;

    /**
     * @example 1693900981465
     *
     * @var int
     */
    public $logRequestTime;

    /**
     * @example 1010
     *
     * @var string
     */
    public $logUserId;

    /**
     * @var string
     */
    public $rawFeatures;

    /**
     * @example video-feed
     *
     * @var string
     */
    public $sceneName;
    protected $_name = [
        'contextFeatures'                    => 'ContextFeatures',
        'featureConsistencyCheckJobConfigId' => 'FeatureConsistencyCheckJobConfigId',
        'generatedFeatures'                  => 'GeneratedFeatures',
        'instanceId'                         => 'InstanceId',
        'logItemId'                          => 'LogItemId',
        'logRequestId'                       => 'LogRequestId',
        'logRequestTime'                     => 'LogRequestTime',
        'logUserId'                          => 'LogUserId',
        'rawFeatures'                        => 'RawFeatures',
        'sceneName'                          => 'SceneName',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return SyncFeatureConsistencyCheckJobReplayLogRequest
     */
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
