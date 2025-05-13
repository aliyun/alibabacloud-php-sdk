<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class IncidentEscalationStruct extends Model
{
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
    public $incidentEscalationId;

    /**
     * @var int
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var IncidentEscalationStageStruct[]
     */
    public $stage;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'createTime' => 'createTime',
        'description' => 'description',
        'incidentEscalationId' => 'incidentEscalationId',
        'modifyTime' => 'modifyTime',
        'name' => 'name',
        'regionId' => 'regionId',
        'stage' => 'stage',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        if (\is_array($this->stage)) {
            Model::validateArray($this->stage);
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

        if (null !== $this->incidentEscalationId) {
            $res['incidentEscalationId'] = $this->incidentEscalationId;
        }

        if (null !== $this->modifyTime) {
            $res['modifyTime'] = $this->modifyTime;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->stage) {
            if (\is_array($this->stage)) {
                $res['stage'] = [];
                $n1 = 0;
                foreach ($this->stage as $item1) {
                    $res['stage'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (isset($map['incidentEscalationId'])) {
            $model->incidentEscalationId = $map['incidentEscalationId'];
        }

        if (isset($map['modifyTime'])) {
            $model->modifyTime = $map['modifyTime'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['stage'])) {
            if (!empty($map['stage'])) {
                $model->stage = [];
                $n1 = 0;
                foreach ($map['stage'] as $item1) {
                    $model->stage[$n1++] = IncidentEscalationStageStruct::fromMap($item1);
                }
            }
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
