<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sceneIds) {
            $res['SceneIds'] = $this->sceneIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeletePtsScenesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SceneIds'])) {
            if (!empty($map['SceneIds'])) {
                $model->sceneIds = $map['SceneIds'];
            }
        }

        return $model;
    }
}
