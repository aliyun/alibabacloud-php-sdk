<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeSlsAuthStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $slsAuthStatus;
    protected $_name = [
        'requestId'     => 'RequestId',
        'slsAuthStatus' => 'SlsAuthStatus',
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
        if (null !== $this->slsAuthStatus) {
            $res['SlsAuthStatus'] = $this->slsAuthStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSlsAuthStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SlsAuthStatus'])) {
            $model->slsAuthStatus = $map['SlsAuthStatus'];
        }

        return $model;
    }
}
