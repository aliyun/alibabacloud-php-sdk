<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;

class UpdateRenderingInstanceSettingsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $renderingInstanceId;

    /**
     * @var string
     */
    public $settingsShrink;
    protected $_name = [
        'renderingInstanceId' => 'RenderingInstanceId',
        'settingsShrink' => 'Settings',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->renderingInstanceId) {
            $res['RenderingInstanceId'] = $this->renderingInstanceId;
        }

        if (null !== $this->settingsShrink) {
            $res['Settings'] = $this->settingsShrink;
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
        if (isset($map['RenderingInstanceId'])) {
            $model->renderingInstanceId = $map['RenderingInstanceId'];
        }

        if (isset($map['Settings'])) {
            $model->settingsShrink = $map['Settings'];
        }

        return $model;
    }
}
