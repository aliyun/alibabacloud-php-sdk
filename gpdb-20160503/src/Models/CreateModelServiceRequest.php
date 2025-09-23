<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class CreateModelServiceRequest extends Model
{
    /**
     * @var string[]
     */
    public $aiNodes;

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
     * @var mixed[]
     */
    public $modelParams;

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
        'aiNodes' => 'AiNodes',
        'clientToken' => 'ClientToken',
        'DBInstanceId' => 'DBInstanceId',
        'description' => 'Description',
        'enablePublicConnection' => 'EnablePublicConnection',
        'inferenceEngine' => 'InferenceEngine',
        'modelName' => 'ModelName',
        'modelParams' => 'ModelParams',
        'replicas' => 'Replicas',
        'resourceGroupId' => 'ResourceGroupId',
        'securityIPList' => 'SecurityIPList',
    ];

    public function validate()
    {
        if (\is_array($this->aiNodes)) {
            Model::validateArray($this->aiNodes);
        }
        if (\is_array($this->modelParams)) {
            Model::validateArray($this->modelParams);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiNodes) {
            if (\is_array($this->aiNodes)) {
                $res['AiNodes'] = [];
                $n1 = 0;
                foreach ($this->aiNodes as $item1) {
                    $res['AiNodes'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->modelParams) {
            if (\is_array($this->modelParams)) {
                $res['ModelParams'] = [];
                foreach ($this->modelParams as $key1 => $value1) {
                    $res['ModelParams'][$key1] = $value1;
                }
            }
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
            if (!empty($map['AiNodes'])) {
                $model->aiNodes = [];
                $n1 = 0;
                foreach ($map['AiNodes'] as $item1) {
                    $model->aiNodes[$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['ModelParams'])) {
                $model->modelParams = [];
                foreach ($map['ModelParams'] as $key1 => $value1) {
                    $model->modelParams[$key1] = $value1;
                }
            }
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
