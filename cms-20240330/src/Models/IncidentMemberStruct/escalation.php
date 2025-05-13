<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\IncidentMemberStruct;

use AlibabaCloud\Dara\Model;

class escalation extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $incidentEscalationId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $stageIndex;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'description' => 'description',
        'incidentEscalationId' => 'incidentEscalationId',
        'name' => 'name',
        'stageIndex' => 'stageIndex',
        'title' => 'title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->incidentEscalationId) {
            $res['incidentEscalationId'] = $this->incidentEscalationId;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->stageIndex) {
            $res['stageIndex'] = $this->stageIndex;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['incidentEscalationId'])) {
            $model->incidentEscalationId = $map['incidentEscalationId'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['stageIndex'])) {
            $model->stageIndex = $map['stageIndex'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
