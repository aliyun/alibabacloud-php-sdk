<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210218\Models;

use AlibabaCloud\SDK\Appstreamcenter\V20210218\Models\GetAuthCodeResponseBody\authModel;
use AlibabaCloud\Tea\Model;

class GetAuthCodeResponseBody extends Model
{
    /**
     * @var authModel
     */
    public $authModel;

    /**
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'authModel' => 'AuthModel',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authModel) {
            $res['AuthModel'] = null !== $this->authModel ? $this->authModel->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAuthCodeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthModel'])) {
            $model->authModel = authModel::fromMap($map['AuthModel']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
