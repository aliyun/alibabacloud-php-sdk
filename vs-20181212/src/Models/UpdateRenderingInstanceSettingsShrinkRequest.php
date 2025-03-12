<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class UpdateRenderingInstanceSettingsShrinkRequest extends Model
{
    /**
     * @example render-9f8c57355d224ad7beaf95e145f22111
     *
     * @var string
     */
    public $renderingInstanceId;

    /**
     * @var string
     */
    public $settingsShrink;
    protected $_name = [
        'renderingInstanceId' => 'RenderingInstanceId',
        'settingsShrink'      => 'Settings',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return UpdateRenderingInstanceSettingsShrinkRequest
     */
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
