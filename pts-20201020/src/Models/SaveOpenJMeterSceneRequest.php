<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PTS\V20201020\Models\SaveOpenJMeterSceneRequest\openJMeterScene;

class SaveOpenJMeterSceneRequest extends Model
{
    /**
     * @var openJMeterScene
     */
    public $openJMeterScene;
    protected $_name = [
        'openJMeterScene' => 'OpenJMeterScene',
    ];

    public function validate()
    {
        if (null !== $this->openJMeterScene) {
            $this->openJMeterScene->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->openJMeterScene) {
            $res['OpenJMeterScene'] = null !== $this->openJMeterScene ? $this->openJMeterScene->toArray($noStream) : $this->openJMeterScene;
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
        if (isset($map['OpenJMeterScene'])) {
            $model->openJMeterScene = openJMeterScene::fromMap($map['OpenJMeterScene']);
        }

        return $model;
    }
}
