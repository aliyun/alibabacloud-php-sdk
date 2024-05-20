<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgSceneQuerySceneListByNameResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgSceneQuerySceneListByNameResponseBody\data\projects;
use AlibabaCloud\Tea\Model;

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
     * @example 123
     *
     * @var int
     */
    public $id;

    /**
     * @var projects[]
     */
    public $projects;

    /**
     * @example dataworks_display_desense_code
     *
     * @var string
     */
    public $sceneCode;

    /**
     * @example 1
     *
     * @var int
     */
    public $sceneLevel;

    /**
     * @example test_scene
     *
     * @var string
     */
    public $sceneName;

    /**
     * @example user1,user2
     *
     * @var string
     */
    public $userGroups;
    protected $_name = [
        'children'   => 'Children',
        'desc'       => 'Desc',
        'id'         => 'Id',
        'projects'   => 'Projects',
        'sceneCode'  => 'SceneCode',
        'sceneLevel' => 'SceneLevel',
        'sceneName'  => 'SceneName',
        'userGroups' => 'UserGroups',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->children) {
            $res['Children'] = $this->children;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->projects) {
            $res['Projects'] = [];
            if (null !== $this->projects && \is_array($this->projects)) {
                $n = 0;
                foreach ($this->projects as $item) {
                    $res['Projects'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Children'])) {
            if (!empty($map['Children'])) {
                $model->children = $map['Children'];
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
                $n               = 0;
                foreach ($map['Projects'] as $item) {
                    $model->projects[$n++] = null !== $item ? projects::fromMap($item) : $item;
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
