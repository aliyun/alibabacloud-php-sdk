<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarClawAgentsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarClawAgentsResponseBody\agents\files;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarClawAgentsResponseBody\agents\identity;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarClawAgentsResponseBody\agents\model_;

class agents extends Model
{
    /**
     * @var bool
     */
    public $default;

    /**
     * @var files[]
     */
    public $files;

    /**
     * @var string
     */
    public $id;

    /**
     * @var identity
     */
    public $identity;

    /**
     * @var model_
     */
    public $model;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $skills;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'default' => 'Default',
        'files' => 'Files',
        'id' => 'Id',
        'identity' => 'Identity',
        'model' => 'Model',
        'name' => 'Name',
        'skills' => 'Skills',
        'workspace' => 'Workspace',
    ];

    public function validate()
    {
        if (\is_array($this->files)) {
            Model::validateArray($this->files);
        }
        if (null !== $this->identity) {
            $this->identity->validate();
        }
        if (null !== $this->model) {
            $this->model->validate();
        }
        if (\is_array($this->skills)) {
            Model::validateArray($this->skills);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->default) {
            $res['Default'] = $this->default;
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

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->identity) {
            $res['Identity'] = null !== $this->identity ? $this->identity->toArray($noStream) : $this->identity;
        }

        if (null !== $this->model) {
            $res['Model'] = null !== $this->model ? $this->model->toArray($noStream) : $this->model;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->skills) {
            if (\is_array($this->skills)) {
                $res['Skills'] = [];
                $n1 = 0;
                foreach ($this->skills as $item1) {
                    $res['Skills'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Default'])) {
            $model->default = $map['Default'];
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

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Identity'])) {
            $model->identity = identity::fromMap($map['Identity']);
        }

        if (isset($map['Model'])) {
            $model->model = model_::fromMap($map['Model']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Skills'])) {
            if (!empty($map['Skills'])) {
                $model->skills = [];
                $n1 = 0;
                foreach ($map['Skills'] as $item1) {
                    $model->skills[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Workspace'])) {
            $model->workspace = $map['Workspace'];
        }

        return $model;
    }
}
