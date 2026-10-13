<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\GetContextDatabaseSyncJobResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetContextDatabaseSyncJobResponseBody\data\filters;

class data extends Model
{
    /**
     * @var string
     */
    public $autoPauseReason;

    /**
     * @var bool
     */
    public $autoPaused;

    /**
     * @var int
     */
    public $configVersion;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var filters
     */
    public $filters;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $knowledgeBaseId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nextRunAt;

    /**
     * @var string
     */
    public $scheduleType;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $targetId;
    protected $_name = [
        'autoPauseReason' => 'AutoPauseReason',
        'autoPaused' => 'AutoPaused',
        'configVersion' => 'ConfigVersion',
        'enabled' => 'Enabled',
        'filters' => 'Filters',
        'id' => 'Id',
        'knowledgeBaseId' => 'KnowledgeBaseId',
        'name' => 'Name',
        'nextRunAt' => 'NextRunAt',
        'scheduleType' => 'ScheduleType',
        'sourceId' => 'SourceId',
        'targetId' => 'TargetId',
    ];

    public function validate()
    {
        if (null !== $this->filters) {
            $this->filters->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoPauseReason) {
            $res['AutoPauseReason'] = $this->autoPauseReason;
        }

        if (null !== $this->autoPaused) {
            $res['AutoPaused'] = $this->autoPaused;
        }

        if (null !== $this->configVersion) {
            $res['ConfigVersion'] = $this->configVersion;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->filters) {
            $res['Filters'] = null !== $this->filters ? $this->filters->toArray($noStream) : $this->filters;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->knowledgeBaseId) {
            $res['KnowledgeBaseId'] = $this->knowledgeBaseId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nextRunAt) {
            $res['NextRunAt'] = $this->nextRunAt;
        }

        if (null !== $this->scheduleType) {
            $res['ScheduleType'] = $this->scheduleType;
        }

        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }

        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
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
        if (isset($map['AutoPauseReason'])) {
            $model->autoPauseReason = $map['AutoPauseReason'];
        }

        if (isset($map['AutoPaused'])) {
            $model->autoPaused = $map['AutoPaused'];
        }

        if (isset($map['ConfigVersion'])) {
            $model->configVersion = $map['ConfigVersion'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['Filters'])) {
            $model->filters = filters::fromMap($map['Filters']);
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['KnowledgeBaseId'])) {
            $model->knowledgeBaseId = $map['KnowledgeBaseId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NextRunAt'])) {
            $model->nextRunAt = $map['NextRunAt'];
        }

        if (isset($map['ScheduleType'])) {
            $model->scheduleType = $map['ScheduleType'];
        }

        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }

        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }

        return $model;
    }
}
