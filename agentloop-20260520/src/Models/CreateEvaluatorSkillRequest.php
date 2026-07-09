<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\CreateEvaluatorSkillRequest\files;

class CreateEvaluatorSkillRequest extends Model
{
    /**
     * @var string
     */
    public $agentSpace;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var files[]
     */
    public $files;

    /**
     * @var string
     */
    public $skillName;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'agentSpace' => 'agentSpace',
        'description' => 'description',
        'displayName' => 'displayName',
        'enable' => 'enable',
        'files' => 'files',
        'skillName' => 'skillName',
        'clientToken' => 'clientToken',
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
        if (null !== $this->agentSpace) {
            $res['agentSpace'] = $this->agentSpace;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->files) {
            if (\is_array($this->files)) {
                $res['files'] = [];
                $n1 = 0;
                foreach ($this->files as $item1) {
                    $res['files'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->skillName) {
            $res['skillName'] = $this->skillName;
        }

        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
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
        if (isset($map['agentSpace'])) {
            $model->agentSpace = $map['agentSpace'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        if (isset($map['files'])) {
            if (!empty($map['files'])) {
                $model->files = [];
                $n1 = 0;
                foreach ($map['files'] as $item1) {
                    $model->files[$n1] = files::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['skillName'])) {
            $model->skillName = $map['skillName'];
        }

        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
