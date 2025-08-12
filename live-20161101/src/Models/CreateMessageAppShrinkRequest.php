<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class CreateMessageAppShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appConfigShrink;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $extensionShrink;
    protected $_name = [
        'appConfigShrink' => 'AppConfig',
        'appName' => 'AppName',
        'extensionShrink' => 'Extension',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
