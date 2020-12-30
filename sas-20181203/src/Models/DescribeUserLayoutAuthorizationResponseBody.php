<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeUserLayoutAuthorizationResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $authorized;
    protected $_name = [
        'requestId'  => 'RequestId',
        'authorized' => 'Authorized',
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
        if (null !== $this->authorized) {
            $res['Authorized'] = $this->authorized;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserLayoutAuthorizationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Authorized'])) {
            $model->authorized = $map['Authorized'];
        }

        return $model;
    }
}
