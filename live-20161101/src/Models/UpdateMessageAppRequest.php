<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class UpdateMessageAppRequest extends Model
{
    /**
     * @description The configurations of the application.
     *
     * @var string[]
     */
    public $appConfig;

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
     * @var string[]
     */
    public $extension;
    protected $_name = [
        'appConfig' => 'AppConfig',
        'appId' => 'AppId',
        'appName' => 'AppName',
        'extension' => 'Extension',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appConfig) {
            $res['AppConfig'] = $this->appConfig;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateMessageAppRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppConfig'])) {
            $model->appConfig = $map['AppConfig'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }

        return $model;
    }
}
