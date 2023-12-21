<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class CreateSceneResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @example FCF741D8-9C30-578E-807F-B935487DB34A
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 3
     *
     * @var string
     */
    public $sceneId;
    protected $_name = [
        'requestId' => 'RequestId',
        'sceneId'   => 'SceneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSceneResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        return $model;
    }
}
