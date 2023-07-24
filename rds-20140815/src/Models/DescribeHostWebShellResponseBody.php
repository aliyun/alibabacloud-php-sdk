<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeHostWebShellResponseBody extends Model
{
    /**
     * @description The URL of the webshell.
     *
     * @example ***
     *
     * @var string
     */
    public $loginUrl;

    /**
     * @description The request ID.
     *
     * @example 842B73C8-5776-4BD9-9872-69C8C46DD7D3
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
