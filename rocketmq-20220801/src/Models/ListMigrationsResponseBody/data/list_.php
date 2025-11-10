<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListMigrationsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListMigrationsResponseBody\data\list_\currentStage;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListMigrationsResponseBody\data\list_\migrationSource;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListMigrationsResponseBody\data\list_\migrationTarget;

class list_ extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var currentStage
     */
    public $currentStage;

    /**
     * @var int
     */
    public $migrationId;

    /**
     * @var string
     */
    public $migrationName;

    /**
     * @var migrationSource
     */
    public $migrationSource;

    /**
     * @var string
     */
    public $migrationStatus;

    /**
     * @var migrationTarget
     */
    public $migrationTarget;

    /**
     * @var string
     */
    public $migrationType;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'createTime' => 'createTime',
        'currentStage' => 'currentStage',
        'migrationId' => 'migrationId',
        'migrationName' => 'migrationName',
        'migrationSource' => 'migrationSource',
        'migrationStatus' => 'migrationStatus',
        'migrationTarget' => 'migrationTarget',
        'migrationType' => 'migrationType',
        'updateTime' => 'updateTime',
        'userId' => 'userId',
    ];

    public function validate()
    {
        if (null !== $this->currentStage) {
            $this->currentStage->validate();
        }
        if (null !== $this->migrationSource) {
            $this->migrationSource->validate();
        }
        if (null !== $this->migrationTarget) {
            $this->migrationTarget->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->currentStage) {
            $res['currentStage'] = null !== $this->currentStage ? $this->currentStage->toArray($noStream) : $this->currentStage;
        }

        if (null !== $this->migrationId) {
            $res['migrationId'] = $this->migrationId;
        }

        if (null !== $this->migrationName) {
            $res['migrationName'] = $this->migrationName;
        }

        if (null !== $this->migrationSource) {
            $res['migrationSource'] = null !== $this->migrationSource ? $this->migrationSource->toArray($noStream) : $this->migrationSource;
        }

        if (null !== $this->migrationStatus) {
            $res['migrationStatus'] = $this->migrationStatus;
        }

        if (null !== $this->migrationTarget) {
            $res['migrationTarget'] = null !== $this->migrationTarget ? $this->migrationTarget->toArray($noStream) : $this->migrationTarget;
        }

        if (null !== $this->migrationType) {
            $res['migrationType'] = $this->migrationType;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['currentStage'])) {
            $model->currentStage = currentStage::fromMap($map['currentStage']);
        }

        if (isset($map['migrationId'])) {
            $model->migrationId = $map['migrationId'];
        }

        if (isset($map['migrationName'])) {
            $model->migrationName = $map['migrationName'];
        }

        if (isset($map['migrationSource'])) {
            $model->migrationSource = migrationSource::fromMap($map['migrationSource']);
        }

        if (isset($map['migrationStatus'])) {
            $model->migrationStatus = $map['migrationStatus'];
        }

        if (isset($map['migrationTarget'])) {
            $model->migrationTarget = migrationTarget::fromMap($map['migrationTarget']);
        }

        if (isset($map['migrationType'])) {
            $model->migrationType = $map['migrationType'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
