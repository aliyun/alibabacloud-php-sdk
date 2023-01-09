<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models;

use AlibabaCloud\Tea\Model;

class ModifyPtsSceneRequest extends Model
{
    /**
     * @example SD6YZCI
     *
     * @var string
     */
    public $scene;
    protected $_name = [
        'scene' => 'Scene',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyPtsSceneRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }

        return $model;
    }
}
