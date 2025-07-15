<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class CreateMessageAppRequest extends Model
{
    /**
     * @description The configurations of the application.
     *
     * @var string[]
     */
    public $appConfig;

    /**
     * @description The name of the interactive message application. The name must be 2 to 16 characters in length.
     *
     * This parameter is required.
     *
     * @example test
     *
     * @var string
     */
    public $appName;

    /**
     * @description The extended fields.
     *
     * @var string[]
     */
    public $extension;
    protected $_name = [
        'appConfig' => 'AppConfig',
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
     * @return CreateMessageAppRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppConfig'])) {
            $model->appConfig = $map['AppConfig'];
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
