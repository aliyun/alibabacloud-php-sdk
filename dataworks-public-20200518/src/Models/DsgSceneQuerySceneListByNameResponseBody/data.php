<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgSceneQuerySceneListByNameResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgSceneQuerySceneListByNameResponseBody\data\projects;

class data extends Model
{
    /**
     * @var mixed[]
     */
    public $children;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var int
     */
    public $id;

    /**
     * @var projects[]
     */
    public $projects;

    /**
     * @var string
     */
    public $sceneCode;

    /**
     * @var int
     */
    public $sceneLevel;

    /**
     * @var string
     */
    public $sceneName;

    /**
     * @var string
     */
    public $userGroups;
    protected $_name = [
        'children' => 'Children',
        'desc' => 'Desc',
        'id' => 'Id',
        'projects' => 'Projects',
        'sceneCode' => 'SceneCode',
        'sceneLevel' => 'SceneLevel',
        'sceneName' => 'SceneName',
        'userGroups' => 'UserGroups',
    ];

    public function validate()
    {
        if (\is_array($this->children)) {
            Model::validateArray($this->children);
        }
        if (\is_array($this->projects)) {
            Model::validateArray($this->projects);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->children) {
            if (\is_array($this->children)) {
                $res['Children'] = [];
                $n1 = 0;
                foreach ($this->children as $item1) {
                    $res['Children'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->projects) {
            if (\is_array($this->projects)) {
                $res['Projects'] = [];
                $n1 = 0;
                foreach ($this->projects as $item1) {
                    $res['Projects'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sceneCode) {
            $res['SceneCode'] = $this->sceneCode;
        }

        if (null !== $this->sceneLevel) {
            $res['SceneLevel'] = $this->sceneLevel;
        }

        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
        }

        if (null !== $this->userGroups) {
            $res['UserGroups'] = $this->userGroups;
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
        if (isset($map['Children'])) {
            if (!empty($map['Children'])) {
                $model->children = [];
                $n1 = 0;
                foreach ($map['Children'] as $item1) {
                    $model->children[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Projects'])) {
            if (!empty($map['Projects'])) {
                $model->projects = [];
                $n1 = 0;
                foreach ($map['Projects'] as $item1) {
                    $model->projects[$n1] = projects::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SceneCode'])) {
            $model->sceneCode = $map['SceneCode'];
        }

        if (isset($map['SceneLevel'])) {
            $model->sceneLevel = $map['SceneLevel'];
        }

        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }

        if (isset($map['UserGroups'])) {
            $model->userGroups = $map['UserGroups'];
        }

        return $model;
    }
}
