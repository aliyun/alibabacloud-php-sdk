<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgSceneAddOrUpdateSceneRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgSceneAddOrUpdateSceneRequest\scenes\projects;

class scenes extends Model
{
    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
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
     * @var string
     */
    public $sceneName;

    /**
     * @var int[]
     */
    public $userGroupIds;
    protected $_name = [
        'desc' => 'desc',
        'id' => 'id',
        'projects' => 'projects',
        'sceneCode' => 'sceneCode',
        'sceneName' => 'sceneName',
        'userGroupIds' => 'userGroupIds',
    ];

    public function validate()
    {
        if (\is_array($this->projects)) {
            Model::validateArray($this->projects);
        }
        if (\is_array($this->userGroupIds)) {
            Model::validateArray($this->userGroupIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->projects) {
            if (\is_array($this->projects)) {
                $res['projects'] = [];
                $n1 = 0;
                foreach ($this->projects as $item1) {
                    $res['projects'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->userGroupIds)) {
                $res['userGroupIds'] = [];
                $n1 = 0;
                foreach ($this->userGroupIds as $item1) {
                    $res['userGroupIds'][$n1] = $item1;
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
        if (isset($map['desc'])) {
            $model->desc = $map['desc'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['projects'])) {
            if (!empty($map['projects'])) {
                $model->projects = [];
                $n1 = 0;
                foreach ($map['projects'] as $item1) {
                    $model->projects[$n1] = projects::fromMap($item1);
                    ++$n1;
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
                $model->userGroupIds = [];
                $n1 = 0;
                foreach ($map['userGroupIds'] as $item1) {
                    $model->userGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
