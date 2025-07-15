<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class UpdateMessageAppShrinkRequest extends Model
{
    /**
     * @description The configurations of the application.
     *
     * @var string
     */
    public $appConfigShrink;

    /**
     * @description The ID of the interactive messaging application.
     *
     * This parameter is required.
     *
     * @example VKL3***
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the interactive messaging application.
     *
     * @example testApp
     *
     * @var string
     */
    public $appName;

    /**
     * @description The extended field.
     *
     * @var string
     */
    public $extensionShrink;
    protected $_name = [
        'appConfigShrink' => 'AppConfig',
        'appId' => 'AppId',
        'appName' => 'AppName',
        'extensionShrink' => 'Extension',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appConfigShrink) {
            $res['AppConfig'] = $this->appConfigShrink;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->extensionShrink) {
            $res['Extension'] = $this->extensionShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateMessageAppShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppConfig'])) {
            $model->appConfigShrink = $map['AppConfig'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Extension'])) {
            $model->extensionShrink = $map['Extension'];
        }

        return $model;
    }
}
