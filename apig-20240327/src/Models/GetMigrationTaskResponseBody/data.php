<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetMigrationTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetMigrationTaskResponseBody\data\ingressConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetMigrationTaskResponseBody\data\virtualServices;

class data extends Model
{
    /**
     * @var string
     */
    public $apiId;

    /**
     * @var string
     */
    public $apiName;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $clusterNamespace;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $envId;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $gatewayName;

    /**
     * @var ingressConfig
     */
    public $ingressConfig;

    /**
     * @var string
     */
    public $migrationType;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $slbId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $switchType;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var virtualServices[]
     */
    public $virtualServices;

    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'apiId' => 'apiId',
        'apiName' => 'apiName',
        'clusterId' => 'clusterId',
        'clusterName' => 'clusterName',
        'clusterNamespace' => 'clusterNamespace',
        'createTime' => 'createTime',
        'description' => 'description',
        'envId' => 'envId',
        'gatewayId' => 'gatewayId',
        'gatewayName' => 'gatewayName',
        'ingressConfig' => 'ingressConfig',
        'migrationType' => 'migrationType',
        'serviceName' => 'serviceName',
        'slbId' => 'slbId',
        'status' => 'status',
        'switchType' => 'switchType',
        'taskId' => 'taskId',
        'userId' => 'userId',
        'virtualServices' => 'virtualServices',
        'weight' => 'weight',
    ];

    public function validate()
    {
        if (null !== $this->ingressConfig) {
            $this->ingressConfig->validate();
        }
        if (\is_array($this->virtualServices)) {
            Model::validateArray($this->virtualServices);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['apiId'] = $this->apiId;
        }

        if (null !== $this->apiName) {
            $res['apiName'] = $this->apiName;
        }

        if (null !== $this->clusterId) {
            $res['clusterId'] = $this->clusterId;
        }

        if (null !== $this->clusterName) {
            $res['clusterName'] = $this->clusterName;
        }

        if (null !== $this->clusterNamespace) {
            $res['clusterNamespace'] = $this->clusterNamespace;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->envId) {
            $res['envId'] = $this->envId;
        }

        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->gatewayName) {
            $res['gatewayName'] = $this->gatewayName;
        }

        if (null !== $this->ingressConfig) {
            $res['ingressConfig'] = null !== $this->ingressConfig ? $this->ingressConfig->toArray($noStream) : $this->ingressConfig;
        }

        if (null !== $this->migrationType) {
            $res['migrationType'] = $this->migrationType;
        }

        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }

        if (null !== $this->slbId) {
            $res['slbId'] = $this->slbId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->switchType) {
            $res['switchType'] = $this->switchType;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        if (null !== $this->virtualServices) {
            if (\is_array($this->virtualServices)) {
                $res['virtualServices'] = [];
                $n1 = 0;
                foreach ($this->virtualServices as $item1) {
                    $res['virtualServices'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->weight) {
            $res['weight'] = $this->weight;
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
        if (isset($map['apiId'])) {
            $model->apiId = $map['apiId'];
        }

        if (isset($map['apiName'])) {
            $model->apiName = $map['apiName'];
        }

        if (isset($map['clusterId'])) {
            $model->clusterId = $map['clusterId'];
        }

        if (isset($map['clusterName'])) {
            $model->clusterName = $map['clusterName'];
        }

        if (isset($map['clusterNamespace'])) {
            $model->clusterNamespace = $map['clusterNamespace'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['envId'])) {
            $model->envId = $map['envId'];
        }

        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['gatewayName'])) {
            $model->gatewayName = $map['gatewayName'];
        }

        if (isset($map['ingressConfig'])) {
            $model->ingressConfig = ingressConfig::fromMap($map['ingressConfig']);
        }

        if (isset($map['migrationType'])) {
            $model->migrationType = $map['migrationType'];
        }

        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }

        if (isset($map['slbId'])) {
            $model->slbId = $map['slbId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['switchType'])) {
            $model->switchType = $map['switchType'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        if (isset($map['virtualServices'])) {
            if (!empty($map['virtualServices'])) {
                $model->virtualServices = [];
                $n1 = 0;
                foreach ($map['virtualServices'] as $item1) {
                    $model->virtualServices[$n1] = virtualServices::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['weight'])) {
            $model->weight = $map['weight'];
        }

        return $model;
    }
}
