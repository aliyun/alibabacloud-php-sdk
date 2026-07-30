<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260707\Models;

use AlibabaCloud\Dara\Model;

class SubmitVideoRenderJobRequest extends Model
{
    /**
     * @var string
     */
    public $script;

    /**
     * @var string
     */
    public $settings;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'script' => 'Script',
        'settings' => 'Settings',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->script) {
            $res['Script'] = $this->script;
        }

        if (null !== $this->settings) {
            $res['Settings'] = $this->settings;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
        if (isset($map['Script'])) {
            $model->script = $map['Script'];
        }

        if (isset($map['Settings'])) {
            $model->settings = $map['Settings'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
