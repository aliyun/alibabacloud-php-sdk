<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DescribeRelatedAuthorizationStatusResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $OSSAuthorized;

    /**
     * @var bool
     */
    public $MTSAuthorized;

    /**
     * @var bool
     */
    public $MNSAuthorized;
    protected $_name = [
        'requestId'     => 'RequestId',
        'OSSAuthorized' => 'OSSAuthorized',
        'MTSAuthorized' => 'MTSAuthorized',
        'MNSAuthorized' => 'MNSAuthorized',
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
        if (null !== $this->OSSAuthorized) {
            $res['OSSAuthorized'] = $this->OSSAuthorized;
        }
        if (null !== $this->MTSAuthorized) {
            $res['MTSAuthorized'] = $this->MTSAuthorized;
        }
        if (null !== $this->MNSAuthorized) {
            $res['MNSAuthorized'] = $this->MNSAuthorized;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRelatedAuthorizationStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['OSSAuthorized'])) {
            $model->OSSAuthorized = $map['OSSAuthorized'];
        }
        if (isset($map['MTSAuthorized'])) {
            $model->MTSAuthorized = $map['MTSAuthorized'];
        }
        if (isset($map['MNSAuthorized'])) {
            $model->MNSAuthorized = $map['MNSAuthorized'];
        }

        return $model;
    }
}
