<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class IncidentEscalationPolicyForView extends Model
{
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
    public $enable;

    /**
     * @var IncidentEscalationStageForView[]
     */
    public $escalationStageList;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ownerType;

    /**
     * @var string
     */
    public $regionId;

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
    public $updateTime;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'createTime' => 'createTime',
        'description' => 'description',
        'enable' => 'enable',
        'escalationStageList' => 'escalationStageList',
        'name' => 'name',
        'ownerType' => 'ownerType',
        'regionId' => 'regionId',
        'source' => 'source',
        'syncFromType' => 'syncFromType',
        'updateTime' => 'updateTime',
        'userId' => 'userId',
        'uuid' => 'uuid',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        if (\is_array($this->escalationStageList)) {
            Model::validateArray($this->escalationStageList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->escalationStageList) {
            if (\is_array($this->escalationStageList)) {
                $res['escalationStageList'] = [];
                $n1 = 0;
                foreach ($this->escalationStageList as $item1) {
                    $res['escalationStageList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->ownerType) {
            $res['ownerType'] = $this->ownerType;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->syncFromType) {
            $res['syncFromType'] = $this->syncFromType;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        if (isset($map['escalationStageList'])) {
            if (!empty($map['escalationStageList'])) {
                $model->escalationStageList = [];
                $n1 = 0;
                foreach ($map['escalationStageList'] as $item1) {
                    $model->escalationStageList[$n1] = IncidentEscalationStageForView::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['ownerType'])) {
            $model->ownerType = $map['ownerType'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['syncFromType'])) {
            $model->syncFromType = $map['syncFromType'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
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
