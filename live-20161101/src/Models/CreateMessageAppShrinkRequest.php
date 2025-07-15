<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class CreateMessageAppShrinkRequest extends Model
{
    /**
     * @description The configurations of the application.
     *
     * @var string
     */
    public $appConfigShrink;

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
     * @var string
     */
    public $extensionShrink;
    protected $_name = [
        'appConfigShrink' => 'AppConfig',
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
     * @return CreateMessageAppShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppConfig'])) {
            $model->appConfigShrink = $map['AppConfig'];
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
