<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

class BackflowFeatureConsistencyCheckJobDataRequest extends Model
{
    /**
     * @var string
     */
    public $featureConsistencyCheckJobConfigId;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $itemFeatures;
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
    public $sceneName;
    /**
     * @var string
     */
    public $scores;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
