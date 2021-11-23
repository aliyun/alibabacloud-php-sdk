<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models;

use AlibabaCloud\SDK\PTS\V20201020\Models\SaveOpenJMeterSceneRequest\openJMeterScene;
use AlibabaCloud\Tea\Model;

class SaveOpenJMeterSceneRequest extends Model
{
    /**
     * @description 场景详情
     *
     * @var openJMeterScene
     */
    public $openJMeterScene;
    protected $_name = [
        'openJMeterScene' => 'OpenJMeterScene',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->openJMeterScene) {
            $res['OpenJMeterScene'] = null !== $this->openJMeterScene ? $this->openJMeterScene->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveOpenJMeterSceneRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpenJMeterScene'])) {
            $model->openJMeterScene = openJMeterScene::fromMap($map['OpenJMeterScene']);
        }

        return $model;
    }
}
