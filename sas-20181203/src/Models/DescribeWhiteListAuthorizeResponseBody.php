<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeWhiteListAuthorizeResponseBody extends Model
{
    /**
     * @description The available quota.
     *
     * @example 3
     *
     * @var int
     */
    public $availableAuthorizeNum;

    /**
     * @description The request ID.
     *
     * @example 7BC55C8F-226E-5AF5-9A2C-2EC43864****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'availableAuthorizeNum' => 'AvailableAuthorizeNum',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableAuthorizeNum) {
            $res['AvailableAuthorizeNum'] = $this->availableAuthorizeNum;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWhiteListAuthorizeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableAuthorizeNum'])) {
            $model->availableAuthorizeNum = $map['AvailableAuthorizeNum'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
