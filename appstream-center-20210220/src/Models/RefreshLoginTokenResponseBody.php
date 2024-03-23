<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210220\Models;

use AlibabaCloud\Tea\Model;

class RefreshLoginTokenResponseBody extends Model
{
    /**
     * @example v12369636c721ba6b3ddb1683341016775c3f63e4d0e78f120f9a0544ed826b7af7daf747c402f0d0730b52f451b70****
     *
     * @var string
     */
    public $loginToken;

    /**
     * @example 419F31B9-1FDF-5644-ABA3-D00026FA****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'loginToken' => 'LoginToken',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loginToken) {
            $res['LoginToken'] = $this->loginToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefreshLoginTokenResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoginToken'])) {
            $model->loginToken = $map['LoginToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
