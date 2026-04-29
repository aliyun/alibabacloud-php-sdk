<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\UpdatePolarClawAgentRequest\files;

class UpdatePolarClawAgentRequest extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $avatar;

    /**
     * @var files[]
     */
    public $files;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $restart;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'agentId' => 'AgentId',
        'applicationId' => 'ApplicationId',
        'avatar' => 'Avatar',
        'files' => 'Files',
        'model' => 'Model',
        'name' => 'Name',
        'restart' => 'Restart',
        'workspace' => 'Workspace',
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
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->avatar) {
            $res['Avatar'] = $this->avatar;
        }

        if (null !== $this->files) {
            if (\is_array($this->files)) {
                $res['Files'] = [];
                $n1 = 0;
                foreach ($this->files as $item1) {
                    $res['Files'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->restart) {
            $res['Restart'] = $this->restart;
        }

        if (null !== $this->workspace) {
            $res['Workspace'] = $this->workspace;
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
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['Avatar'])) {
            $model->avatar = $map['Avatar'];
        }

        if (isset($map['Files'])) {
            if (!empty($map['Files'])) {
                $model->files = [];
                $n1 = 0;
                foreach ($map['Files'] as $item1) {
                    $model->files[$n1] = files::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Restart'])) {
            $model->restart = $map['Restart'];
        }

        if (isset($map['Workspace'])) {
            $model->workspace = $map['Workspace'];
        }

        return $model;
    }
}
