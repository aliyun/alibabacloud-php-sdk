<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models;

use AlibabaCloud\Dara\Model;

class UpdateMemorySkillRequest extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string[]
     */
    public $files;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'agentId' => 'agent_id',
        'files' => 'files',
        'name' => 'name',
        'userId' => 'user_id',
        'version' => 'version',
    ];

    public function validate()
    {
        if (\is_array($this->files)) {
            Model::validateArray($this->files);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['agent_id'] = $this->agentId;
        }

        if (null !== $this->files) {
            if (\is_array($this->files)) {
                $res['files'] = [];
                foreach ($this->files as $key1 => $value1) {
                    $res['files'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
            if (!empty($map['files'])) {
                $model->files = [];
                foreach ($map['files'] as $key1 => $value1) {
                    $model->files[$key1] = $value1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
