<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class BackflowFeatureConsistencyCheckJobDataRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 4
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
     * @example [\\"{\\\\\\"itemid\\\\\\":{\\\\\\"value\\\\\\":1010,\\\\\\"type\\\\\\":\\\\\\"string\\\\\\"}}\\"]
     *
     * @var string
     */
    public $itemFeatures;

    /**
     * @description This parameter is required.
     *
     * @example 9010
     *
     * @var string
     */
    public $logItemId;

    /**
     * @description This parameter is required.
     *
     * @example 728C5E01-ABF6-5AA8-B9FC-B3BA05DECC77
     *
     * @var string
     */
    public $logRequestId;

    /**
     * @description This parameter is required.
     *
     * @example 1693900981465
     *
     * @var int
     */
    public $logRequestTime;

    /**
     * @description This parameter is required.
     *
     * @example 1010
     *
     * @var string
     */
    public $logUserId;

    /**
     * @description This parameter is required.
     *
     * @example video-feed
     *
     * @var string
     */
    public $sceneName;

    /**
     * @description This parameter is required.
     *
     * @example [\\"{\\\\\\"dbmtl_probs_is_valid_play\\\\\\":0.00032182207107543945,\\\\\\"dbmtl_y_play_time\\\\\\":0.0043269748210906982}\\"]
     *
     * @var string
     */
    public $scores;

    /**
     * @description This parameter is required.
     *
     * @example {\\"userid\\":{\\"value\\":1010,\\"type\\":\\"string\\"},\\"click_5_seq\\":{\\"value\\":\\"9001;9002;9003;9004;9005\\",\\"type\\":\\"string\\"}}
     *
     * @var string
     */
    public $userFeatures;
    protected $_name = [
        'featureConsistencyCheckJobConfigId' => 'FeatureConsistencyCheckJobConfigId',
        'instanceId'                         => 'InstanceId',
        'itemFeatures'                       => 'ItemFeatures',
        'logItemId'                          => 'LogItemId',
        'logRequestId'                       => 'LogRequestId',
        'logRequestTime'                     => 'LogRequestTime',
        'logUserId'                          => 'LogUserId',
        'sceneName'                          => 'SceneName',
        'scores'                             => 'Scores',
        'userFeatures'                       => 'UserFeatures',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->featureConsistencyCheckJobConfigId) {
            $res['FeatureConsistencyCheckJobConfigId'] = $this->featureConsistencyCheckJobConfigId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->itemFeatures) {
            $res['ItemFeatures'] = $this->itemFeatures;
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
        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
        }
        if (null !== $this->scores) {
            $res['Scores'] = $this->scores;
        }
        if (null !== $this->userFeatures) {
            $res['UserFeatures'] = $this->userFeatures;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BackflowFeatureConsistencyCheckJobDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FeatureConsistencyCheckJobConfigId'])) {
            $model->featureConsistencyCheckJobConfigId = $map['FeatureConsistencyCheckJobConfigId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ItemFeatures'])) {
            $model->itemFeatures = $map['ItemFeatures'];
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
        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }
        if (isset($map['Scores'])) {
            $model->scores = $map['Scores'];
        }
        if (isset($map['UserFeatures'])) {
            $model->userFeatures = $map['UserFeatures'];
        }

        return $model;
    }
}
