<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LingMou\V20250527\Models\CreateChatSessionResponseBody\data;

use AlibabaCloud\Dara\Model;

class avatarAssets extends Model
{
    /**
     * @var string
     */
    public $md5;

    /**
     * @var string
     */
    public $minRequiredVersion;

    /**
     * @var string
     */
    public $secret;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'md5' => 'md5',
        'minRequiredVersion' => 'minRequiredVersion',
        'secret' => 'secret',
        'type' => 'type',
        'url' => 'url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->md5) {
            $res['md5'] = $this->md5;
        }

        if (null !== $this->minRequiredVersion) {
            $res['minRequiredVersion'] = $this->minRequiredVersion;
        }

        if (null !== $this->secret) {
            $res['secret'] = $this->secret;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->url) {
            $res['url'] = $this->url;
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
        if (isset($map['md5'])) {
            $model->md5 = $map['md5'];
        }

        if (isset($map['minRequiredVersion'])) {
            $model->minRequiredVersion = $map['minRequiredVersion'];
        }

        if (isset($map['secret'])) {
            $model->secret = $map['secret'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
