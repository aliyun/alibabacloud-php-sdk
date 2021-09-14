<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\Tea\Model;

class DescribeHostWebShellResponseBody extends Model
{
    /**
     * @var string
     */
    public $loginUrl;

    /**
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
