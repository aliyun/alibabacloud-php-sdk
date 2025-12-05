<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models;

use AlibabaCloud\Dara\Model;

class DeletePtsScenesRequest extends Model
{
    /**
     * @var string[]
     */
    public $sceneIds;
    protected $_name = [
        'sceneIds' => 'SceneIds',
    ];

    public function validate()
    {
        if (\is_array($this->sceneIds)) {
            Model::validateArray($this->sceneIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sceneIds) {
            if (\is_array($this->sceneIds)) {
                $res['SceneIds'] = [];
                $n1 = 0;
                foreach ($this->sceneIds as $item1) {
                    $res['SceneIds'][$n1] = $item1;
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
        if (isset($map['SceneIds'])) {
            if (!empty($map['SceneIds'])) {
                $model->sceneIds = [];
                $n1 = 0;
                foreach ($map['SceneIds'] as $item1) {
                    $model->sceneIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
