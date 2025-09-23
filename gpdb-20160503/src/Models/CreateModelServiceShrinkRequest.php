<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class CreateModelServiceShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $aiNodesShrink;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enablePublicConnection;

    /**
     * @var string
     */
    public $inferenceEngine;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $modelParamsShrink;

    /**
     * @var int
     */
    public $replicas;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $securityIPList;
    protected $_name = [
        'aiNodesShrink' => 'AiNodes',
        'clientToken' => 'ClientToken',
        'DBInstanceId' => 'DBInstanceId',
        'description' => 'Description',
        'enablePublicConnection' => 'EnablePublicConnection',
        'inferenceEngine' => 'InferenceEngine',
        'modelName' => 'ModelName',
        'modelParamsShrink' => 'ModelParams',
        'replicas' => 'Replicas',
        'resourceGroupId' => 'ResourceGroupId',
        'securityIPList' => 'SecurityIPList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiNodesShrink) {
            $res['AiNodes'] = $this->aiNodesShrink;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enablePublicConnection) {
            $res['EnablePublicConnection'] = $this->enablePublicConnection;
        }

        if (null !== $this->inferenceEngine) {
            $res['InferenceEngine'] = $this->inferenceEngine;
        }

        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }

        if (null !== $this->modelParamsShrink) {
            $res['ModelParams'] = $this->modelParamsShrink;
        }

        if (null !== $this->replicas) {
            $res['Replicas'] = $this->replicas;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
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
        if (isset($map['AiNodes'])) {
            $model->aiNodesShrink = $map['AiNodes'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EnablePublicConnection'])) {
            $model->enablePublicConnection = $map['EnablePublicConnection'];
        }

        if (isset($map['InferenceEngine'])) {
            $model->inferenceEngine = $map['InferenceEngine'];
        }

        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }

        if (isset($map['ModelParams'])) {
            $model->modelParamsShrink = $map['ModelParams'];
        }

        if (isset($map['Replicas'])) {
            $model->replicas = $map['Replicas'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }

        return $model;
    }
}
