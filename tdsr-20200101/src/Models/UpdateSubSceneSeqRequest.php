<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Dara\Model;

class UpdateSubSceneSeqRequest extends Model
{
    /**
     * @var string
     */
    public $sceneId;

    /**
     * @var string[]
     */
    public $sortSubSceneIds;
    protected $_name = [
        'sceneId' => 'SceneId',
        'sortSubSceneIds' => 'SortSubSceneIds',
    ];

    public function validate()
    {
        if (\is_array($this->sortSubSceneIds)) {
            Model::validateArray($this->sortSubSceneIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }

        if (null !== $this->sortSubSceneIds) {
            if (\is_array($this->sortSubSceneIds)) {
                $res['SortSubSceneIds'] = [];
                $n1 = 0;
                foreach ($this->sortSubSceneIds as $item1) {
                    $res['SortSubSceneIds'][$n1] = $item1;
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
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        if (isset($map['SortSubSceneIds'])) {
            if (!empty($map['SortSubSceneIds'])) {
                $model->sortSubSceneIds = [];
                $n1 = 0;
                foreach ($map['SortSubSceneIds'] as $item1) {
                    $model->sortSubSceneIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
