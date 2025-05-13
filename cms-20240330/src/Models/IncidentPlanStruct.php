<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

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

    public function validate()
    {
        if (\is_array($this->corporation)) {
            Model::validateArray($this->corporation);
        }
        if (\is_array($this->escalationId)) {
            Model::validateArray($this->escalationId);
        }
        if (\is_array($this->groupBy)) {
            Model::validateArray($this->groupBy);
        }
        if (\is_array($this->resourceFiled)) {
            Model::validateArray($this->resourceFiled);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRecoverSeconds) {
            $res['autoRecoverSeconds'] = $this->autoRecoverSeconds;
        }

        if (null !== $this->closeExpire) {
            $res['closeExpire'] = $this->closeExpire;
        }

        if (null !== $this->corporation) {
            if (\is_array($this->corporation)) {
                $res['corporation'] = [];
                $n1 = 0;
                foreach ($this->corporation as $item1) {
                    $res['corporation'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->escalationId) {
            if (\is_array($this->escalationId)) {
                $res['escalationId'] = [];
                $n1 = 0;
                foreach ($this->escalationId as $item1) {
                    $res['escalationId'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->groupBy) {
            if (\is_array($this->groupBy)) {
                $res['groupBy'] = [];
                $n1 = 0;
                foreach ($this->groupBy as $item1) {
                    $res['groupBy'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->resourceFiled)) {
                $res['resourceFiled'] = [];
                $n1 = 0;
                foreach ($this->resourceFiled as $item1) {
                    $res['resourceFiled'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['closeExpire'])) {
            $model->closeExpire = $map['closeExpire'];
        }

        if (isset($map['corporation'])) {
            if (!empty($map['corporation'])) {
                $model->corporation = [];
                $n1 = 0;
                foreach ($map['corporation'] as $item1) {
                    $model->corporation[$n1++] = IncidentPlanCorporationStruct::fromMap($item1);
                }
            }
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['escalationId'])) {
            if (!empty($map['escalationId'])) {
                $model->escalationId = [];
                $n1 = 0;
                foreach ($map['escalationId'] as $item1) {
                    $model->escalationId[$n1++] = $item1;
                }
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
                $n1 = 0;
                foreach ($map['groupBy'] as $item1) {
                    $model->groupBy[$n1++] = IncidentPlanFieldPath::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['resourceFiled'] as $item1) {
                    $model->resourceFiled[$n1++] = IncidentPlanFieldPath::fromMap($item1);
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
