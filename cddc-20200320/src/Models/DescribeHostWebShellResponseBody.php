<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\Tea\Model;

class DescribeHostWebShellResponseBody extends Model
{
    /**
     * @description The URL of the webshell.
     *
     * @example https://ecs-workbench-disposable.aliyun.com/account/disposable/login/sst/mybase.c7dfa64e9f/m44kih****
     *
     * @var string
     */
    public $loginUrl;

    /**
     * @description The request ID.
     *
     * @example D6E068C3-25BC-455A-85FE-45F0B22ESTG2
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'loginUrl'  => 'LoginUrl',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loginUrl) {
            $res['LoginUrl'] = $this->loginUrl;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHostWebShellResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoginUrl'])) {
            $model->loginUrl = $map['LoginUrl'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
