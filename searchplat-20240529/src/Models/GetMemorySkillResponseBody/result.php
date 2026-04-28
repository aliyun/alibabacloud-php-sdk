<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetMemorySkillResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $files;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $skillId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'agentId' => 'agent_id',
        'files' => 'files',
        'name' => 'name',
        'skillId' => 'skill_id',
        'userId' => 'user_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['agent_id'] = $this->agentId;
        }

        if (null !== $this->files) {
            $res['files'] = $this->files;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->skillId) {
            $res['skill_id'] = $this->skillId;
        }

        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
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
        if (isset($map['agent_id'])) {
            $model->agentId = $map['agent_id'];
        }

        if (isset($map['files'])) {
            $model->files = $map['files'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['skill_id'])) {
            $model->skillId = $map['skill_id'];
        }

        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
