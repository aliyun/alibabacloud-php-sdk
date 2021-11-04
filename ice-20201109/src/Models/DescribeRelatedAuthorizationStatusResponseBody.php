<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DescribeRelatedAuthorizationStatusResponseBody extends Model
{
    /**
     * @var bool
     */
    public $authorized;

    /**
     * @var bool
     */
    public $MNSAuthorized;

    /**
     * @var bool
     */
    public $MTSAuthorized;

    /**
     * @var bool
     */
    public $OSSAuthorized;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'authorized'    => 'Authorized',
        'MNSAuthorized' => 'MNSAuthorized',
        'MTSAuthorized' => 'MTSAuthorized',
        'OSSAuthorized' => 'OSSAuthorized',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorized) {
            $res['Authorized'] = $this->authorized;
        }
        if (null !== $this->MNSAuthorized) {
            $res['MNSAuthorized'] = $this->MNSAuthorized;
        }
        if (null !== $this->MTSAuthorized) {
            $res['MTSAuthorized'] = $this->MTSAuthorized;
        }
        if (null !== $this->OSSAuthorized) {
            $res['OSSAuthorized'] = $this->OSSAuthorized;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Authorized'])) {
            $model->authorized = $map['Authorized'];
        }
        if (isset($map['MNSAuthorized'])) {
            $model->MNSAuthorized = $map['MNSAuthorized'];
        }
        if (isset($map['MTSAuthorized'])) {
            $model->MTSAuthorized = $map['MTSAuthorized'];
        }
        if (isset($map['OSSAuthorized'])) {
            $model->OSSAuthorized = $map['OSSAuthorized'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
