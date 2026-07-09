<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetEvaluatorSkillResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetEvaluatorSkillResponseBody\skill\files;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetEvaluatorSkillResponseBody\skill\versions;

class skill extends Model
{
    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var string
     */
    public $currentVersion;

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
    public $latestVersion;

    /**
     * @var string
     */
    public $skillName;

    /**
     * @var int
     */
    public $updatedAt;

    /**
     * @var versions[]
     */
    public $versions;
    protected $_name = [
        'createdAt' => 'createdAt',
        'currentVersion' => 'currentVersion',
        'description' => 'description',
        'displayName' => 'displayName',
        'enable' => 'enable',
        'files' => 'files',
        'latestVersion' => 'latestVersion',
        'skillName' => 'skillName',
        'updatedAt' => 'updatedAt',
        'versions' => 'versions',
    ];

    public function validate()
    {
        if (\is_array($this->files)) {
            Model::validateArray($this->files);
        }
        if (\is_array($this->versions)) {
            Model::validateArray($this->versions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->currentVersion) {
            $res['currentVersion'] = $this->currentVersion;
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

        if (null !== $this->latestVersion) {
            $res['latestVersion'] = $this->latestVersion;
        }

        if (null !== $this->skillName) {
            $res['skillName'] = $this->skillName;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
        }

        if (null !== $this->versions) {
            if (\is_array($this->versions)) {
                $res['versions'] = [];
                $n1 = 0;
                foreach ($this->versions as $item1) {
                    $res['versions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['currentVersion'])) {
            $model->currentVersion = $map['currentVersion'];
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

        if (isset($map['latestVersion'])) {
            $model->latestVersion = $map['latestVersion'];
        }

        if (isset($map['skillName'])) {
            $model->skillName = $map['skillName'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        if (isset($map['versions'])) {
            if (!empty($map['versions'])) {
                $model->versions = [];
                $n1 = 0;
                foreach ($map['versions'] as $item1) {
                    $model->versions[$n1] = versions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
