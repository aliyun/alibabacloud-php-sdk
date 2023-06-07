<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Tea\Model;

class LoginInstanceResponseBody extends Model
{
    /**
     * @description The URL that you use to log on to the server.
     *
     * @example https://ecs-workbench.aliyun.com/view/instance/single/gbktfz****
     *
     * @var string
     */
    public $redirectUrl;

    /**
     * @description The ID of the request.
     *
     * @example C2DE174B-7196-5778-A00D-6EA2601B****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'redirectUrl' => 'RedirectUrl',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->redirectUrl) {
            $res['RedirectUrl'] = $this->redirectUrl;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LoginInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RedirectUrl'])) {
            $model->redirectUrl = $map['RedirectUrl'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
