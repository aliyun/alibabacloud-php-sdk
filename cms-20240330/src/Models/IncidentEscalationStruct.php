<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
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
            $res['stage'] = [];
            if (null !== $this->stage && \is_array($this->stage)) {
                $n = 0;
                foreach ($this->stage as $item) {
                    $res['stage'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IncidentEscalationStruct
     */
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
                $n = 0;
                foreach ($map['stage'] as $item) {
                    $model->stage[$n++] = null !== $item ? IncidentEscalationStageStruct::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
