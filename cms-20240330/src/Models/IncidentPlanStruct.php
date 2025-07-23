<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Tea\Model;

class IncidentPlanStruct extends Model
{
    /**
     * @var int
     */
    public $autoRecoverSeconds;

    /**
     * @var int
     */
    public $closeExpire;

    /**
     * @var IncidentPlanCorporationStruct[]
     */
    public $corporation;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $escalationId;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var IncidentPlanFieldPath[]
     */
    public $groupBy;

    /**
     * @var string
     */
    public $incidentPlanId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var IncidentPlanFieldPath[]
     */
    public $resourceFiled;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'autoRecoverSeconds' => 'autoRecoverSeconds',
        'closeExpire' => 'closeExpire',
        'corporation' => 'corporation',
        'description' => 'description',
        'escalationId' => 'escalationId',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'groupBy' => 'groupBy',
        'incidentPlanId' => 'incidentPlanId',
        'name' => 'name',
        'resourceFiled' => 'resourceFiled',
        'status' => 'status',
        'userId' => 'userId',
        'workspace' => 'workspace',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRecoverSeconds) {
            $res['autoRecoverSeconds'] = $this->autoRecoverSeconds;
        }
        if (null !== $this->closeExpire) {
            $res['closeExpire'] = $this->closeExpire;
        }
        if (null !== $this->corporation) {
            $res['corporation'] = [];
            if (null !== $this->corporation && \is_array($this->corporation)) {
                $n = 0;
                foreach ($this->corporation as $item) {
                    $res['corporation'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->escalationId) {
            $res['escalationId'] = $this->escalationId;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->groupBy) {
            $res['groupBy'] = [];
            if (null !== $this->groupBy && \is_array($this->groupBy)) {
                $n = 0;
                foreach ($this->groupBy as $item) {
                    $res['groupBy'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->incidentPlanId) {
            $res['incidentPlanId'] = $this->incidentPlanId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->resourceFiled) {
            $res['resourceFiled'] = [];
            if (null !== $this->resourceFiled && \is_array($this->resourceFiled)) {
                $n = 0;
                foreach ($this->resourceFiled as $item) {
                    $res['resourceFiled'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }
        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IncidentPlanStruct
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['autoRecoverSeconds'])) {
            $model->autoRecoverSeconds = $map['autoRecoverSeconds'];
        }
        if (isset($map['closeExpire'])) {
            $model->closeExpire = $map['closeExpire'];
        }
        if (isset($map['corporation'])) {
            if (!empty($map['corporation'])) {
                $model->corporation = [];
                $n = 0;
                foreach ($map['corporation'] as $item) {
                    $model->corporation[$n++] = null !== $item ? IncidentPlanCorporationStruct::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['escalationId'])) {
            if (!empty($map['escalationId'])) {
                $model->escalationId = $map['escalationId'];
            }
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['groupBy'])) {
            if (!empty($map['groupBy'])) {
                $model->groupBy = [];
                $n = 0;
                foreach ($map['groupBy'] as $item) {
                    $model->groupBy[$n++] = null !== $item ? IncidentPlanFieldPath::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['incidentPlanId'])) {
            $model->incidentPlanId = $map['incidentPlanId'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['resourceFiled'])) {
            if (!empty($map['resourceFiled'])) {
                $model->resourceFiled = [];
                $n = 0;
                foreach ($map['resourceFiled'] as $item) {
                    $model->resourceFiled[$n++] = null !== $item ? IncidentPlanFieldPath::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }
        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
