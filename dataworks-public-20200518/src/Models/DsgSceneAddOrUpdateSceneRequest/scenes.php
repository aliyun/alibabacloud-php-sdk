<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgSceneAddOrUpdateSceneRequest;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgSceneAddOrUpdateSceneRequest\scenes\projects;
use AlibabaCloud\Tea\Model;

class scenes extends Model
{
    /**
     * @var string
     */
    public $desc;

    /**
     * @example 123
     *
     * @var string
     */
    public $id;

    /**
     * @var projects[]
     */
    public $projects;

    /**
     * @description This parameter is required.
     *
     * @example dataworks_display_desense_code
     *
     * @var string
     */
    public $sceneCode;

    /**
     * @description This parameter is required.
     *
     * @example dev_scene
     *
     * @var string
     */
    public $sceneName;

    /**
     * @var int[]
     */
    public $userGroupIds;
    protected $_name = [
        'desc'         => 'desc',
        'id'           => 'id',
        'projects'     => 'projects',
        'sceneCode'    => 'sceneCode',
        'sceneName'    => 'sceneName',
        'userGroupIds' => 'userGroupIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->projects) {
            $res['projects'] = [];
            if (null !== $this->projects && \is_array($this->projects)) {
                $n = 0;
                foreach ($this->projects as $item) {
                    $res['projects'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sceneCode) {
            $res['sceneCode'] = $this->sceneCode;
        }
        if (null !== $this->sceneName) {
            $res['sceneName'] = $this->sceneName;
        }
        if (null !== $this->userGroupIds) {
            $res['userGroupIds'] = $this->userGroupIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scenes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['desc'])) {
            $model->desc = $map['desc'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['projects'])) {
            if (!empty($map['projects'])) {
                $model->projects = [];
                $n               = 0;
                foreach ($map['projects'] as $item) {
                    $model->projects[$n++] = null !== $item ? projects::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['sceneCode'])) {
            $model->sceneCode = $map['sceneCode'];
        }
        if (isset($map['sceneName'])) {
            $model->sceneName = $map['sceneName'];
        }
        if (isset($map['userGroupIds'])) {
            if (!empty($map['userGroupIds'])) {
                $model->userGroupIds = $map['userGroupIds'];
            }
        }

        return $model;
    }
}
