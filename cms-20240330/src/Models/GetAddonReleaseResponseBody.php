<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetAddonReleaseResponseBody\release;

class GetAddonReleaseResponseBody extends Model
{
    /**
     * @var string
     */
    public $config;

    /**
     * @var release
     */
    public $release;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'config' => 'config',
        'release' => 'release',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->release) {
            $this->release->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['config'] = $this->config;
        }

        if (null !== $this->release) {
            $res['release'] = null !== $this->release ? $this->release->toArray($noStream) : $this->release;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['config'])) {
            $model->config = $map['config'];
        }

        if (isset($map['release'])) {
            $model->release = release::fromMap($map['release']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
