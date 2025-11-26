<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class IncidentResponsePlanForView extends Model
{
    /**
     * @var int
     */
    public $autoRecoverSeconds;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string[]
     */
    public $escalationId;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $name;

    /**
     * @var PushingSetting
     */
    public $pushingSetting;

    /**
     * @var RepeatNotifySetting
     */
    public $repeatNotifySetting;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $syncFromType;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'autoRecoverSeconds' => 'autoRecoverSeconds',
        'createTime' => 'createTime',
        'description' => 'description',
        'enabled' => 'enabled',
        'escalationId' => 'escalationId',
        'mode' => 'mode',
        'name' => 'name',
        'pushingSetting' => 'pushingSetting',
        'repeatNotifySetting' => 'repeatNotifySetting',
        'source' => 'source',
        'syncFromType' => 'syncFromType',
        'type' => 'type',
        'updateTime' => 'updateTime',
        'uuid' => 'uuid',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        if (\is_array($this->escalationId)) {
            Model::validateArray($this->escalationId);
        }
        if (null !== $this->pushingSetting) {
            $this->pushingSetting->validate();
        }
        if (null !== $this->repeatNotifySetting) {
            $this->repeatNotifySetting->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRecoverSeconds) {
            $res['autoRecoverSeconds'] = $this->autoRecoverSeconds;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->escalationId) {
            if (\is_array($this->escalationId)) {
                $res['escalationId'] = [];
                $n1 = 0;
                foreach ($this->escalationId as $item1) {
                    $res['escalationId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->pushingSetting) {
            $res['pushingSetting'] = null !== $this->pushingSetting ? $this->pushingSetting->toArray($noStream) : $this->pushingSetting;
        }

        if (null !== $this->repeatNotifySetting) {
            $res['repeatNotifySetting'] = null !== $this->repeatNotifySetting ? $this->repeatNotifySetting->toArray($noStream) : $this->repeatNotifySetting;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->syncFromType) {
            $res['syncFromType'] = $this->syncFromType;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        if (null !== $this->uuid) {
            $res['uuid'] = $this->uuid;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
        if (isset($map['autoRecoverSeconds'])) {
            $model->autoRecoverSeconds = $map['autoRecoverSeconds'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['escalationId'])) {
            if (!empty($map['escalationId'])) {
                $model->escalationId = [];
                $n1 = 0;
                foreach ($map['escalationId'] as $item1) {
                    $model->escalationId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['pushingSetting'])) {
            $model->pushingSetting = PushingSetting::fromMap($map['pushingSetting']);
        }

        if (isset($map['repeatNotifySetting'])) {
            $model->repeatNotifySetting = RepeatNotifySetting::fromMap($map['repeatNotifySetting']);
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['syncFromType'])) {
            $model->syncFromType = $map['syncFromType'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        if (isset($map['uuid'])) {
            $model->uuid = $map['uuid'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
