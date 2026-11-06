<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class GenerateSceneKeyResponseBody extends Model
{
    /**
     * @var string
     */
    public $baseUrl;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sceneUrl;
    protected $_name = [
        'baseUrl' => 'BaseUrl',
        'expireTime' => 'ExpireTime',
        'key' => 'Key',
        'requestId' => 'RequestId',
        'sceneUrl' => 'SceneUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baseUrl) {
            $res['BaseUrl'] = $this->baseUrl;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sceneUrl) {
            $res['SceneUrl'] = $this->sceneUrl;
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
        if (isset($map['BaseUrl'])) {
            $model->baseUrl = $map['BaseUrl'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SceneUrl'])) {
            $model->sceneUrl = $map['SceneUrl'];
        }

        return $model;
    }
}
