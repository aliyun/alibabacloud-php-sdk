<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListMigrationOperationsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListMigrationOperationsResponseBody\data\list_\operationParam;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListMigrationOperationsResponseBody\data\list_\operationResult;

class list_ extends Model
{
    /**
     * @var string
     */
    public $businessStatus;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $migrationId;

    /**
     * @var int
     */
    public $operationId;

    /**
     * @var string
     */
    public $operationKey;

    /**
     * @var operationParam
     */
    public $operationParam;

    /**
     * @var operationResult
     */
    public $operationResult;

    /**
     * @var string
     */
    public $operationStatus;

    /**
     * @var string
     */
    public $operationType;

    /**
     * @var string
     */
    public $stageType;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'businessStatus' => 'businessStatus',
        'createTime' => 'createTime',
        'migrationId' => 'migrationId',
        'operationId' => 'operationId',
        'operationKey' => 'operationKey',
        'operationParam' => 'operationParam',
        'operationResult' => 'operationResult',
        'operationStatus' => 'operationStatus',
        'operationType' => 'operationType',
        'stageType' => 'stageType',
        'updateTime' => 'updateTime',
    ];

    public function validate()
    {
        if (null !== $this->operationParam) {
            $this->operationParam->validate();
        }
        if (null !== $this->operationResult) {
            $this->operationResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessStatus) {
            $res['businessStatus'] = $this->businessStatus;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->migrationId) {
            $res['migrationId'] = $this->migrationId;
        }

        if (null !== $this->operationId) {
            $res['operationId'] = $this->operationId;
        }

        if (null !== $this->operationKey) {
            $res['operationKey'] = $this->operationKey;
        }

        if (null !== $this->operationParam) {
            $res['operationParam'] = null !== $this->operationParam ? $this->operationParam->toArray($noStream) : $this->operationParam;
        }

        if (null !== $this->operationResult) {
            $res['operationResult'] = null !== $this->operationResult ? $this->operationResult->toArray($noStream) : $this->operationResult;
        }

        if (null !== $this->operationStatus) {
            $res['operationStatus'] = $this->operationStatus;
        }

        if (null !== $this->operationType) {
            $res['operationType'] = $this->operationType;
        }

        if (null !== $this->stageType) {
            $res['stageType'] = $this->stageType;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
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
        if (isset($map['businessStatus'])) {
            $model->businessStatus = $map['businessStatus'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['migrationId'])) {
            $model->migrationId = $map['migrationId'];
        }

        if (isset($map['operationId'])) {
            $model->operationId = $map['operationId'];
        }

        if (isset($map['operationKey'])) {
            $model->operationKey = $map['operationKey'];
        }

        if (isset($map['operationParam'])) {
            $model->operationParam = operationParam::fromMap($map['operationParam']);
        }

        if (isset($map['operationResult'])) {
            $model->operationResult = operationResult::fromMap($map['operationResult']);
        }

        if (isset($map['operationStatus'])) {
            $model->operationStatus = $map['operationStatus'];
        }

        if (isset($map['operationType'])) {
            $model->operationType = $map['operationType'];
        }

        if (isset($map['stageType'])) {
            $model->stageType = $map['stageType'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
