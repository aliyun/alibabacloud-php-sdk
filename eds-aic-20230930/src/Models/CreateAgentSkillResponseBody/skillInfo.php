<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateAgentSkillResponseBody;

use AlibabaCloud\Dara\Model;

class skillInfo extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instruction;

    /**
     * @var string
     */
    public $skillId;

    /**
     * @var string
     */
    public $skillName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'description' => 'Description',
        'instruction' => 'Instruction',
        'skillId' => 'SkillId',
        'skillName' => 'SkillName',
        'status' => 'Status',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->instruction) {
            $res['Instruction'] = $this->instruction;
        }

        if (null !== $this->skillId) {
            $res['SkillId'] = $this->skillId;
        }

        if (null !== $this->skillName) {
            $res['SkillName'] = $this->skillName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Instruction'])) {
            $model->instruction = $map['Instruction'];
        }

        if (isset($map['SkillId'])) {
            $model->skillId = $map['SkillId'];
        }

        if (isset($map['SkillName'])) {
            $model->skillName = $map['SkillName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
