<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models;

use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBClusterConfigResponseBody\data;
use AlibabaCloud\Tea\Model;

class DescribeDBClusterConfigResponseBody extends Model
{
    /**
     * @description The details about the access denial. This parameter is returned only if Resource Access Management (RAM) authentication failed.
     *
     * @example failed
     *
     * @var string
     */
    public $accessDeniedDetail;

    /**
     * @description The information returned.
     *
     * @var data
     */
    public $data;

    /**
     * @description The dynamic code. This parameter is not returned.
     *
     * @example 0
     *
     * @var string
     */
    public $dynamicCode;

    /**
     * @description The dynamic message. This parameter is not returned.
     *
     * @example An error occurred while processing your request.
     *
     * @var string
     */
    public $dynamicMessage;

    /**
     * @description The request ID.
     *
     * @example ADF42B18-43FD-5100-83A9-BE81AB70C863
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'data'               => 'Data',
        'dynamicCode'        => 'DynamicCode',
        'dynamicMessage'     => 'DynamicMessage',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = $this->accessDeniedDetail;
        }
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->dynamicCode) {
            $res['DynamicCode'] = $this->dynamicCode;
        }
        if (null !== $this->dynamicMessage) {
            $res['DynamicMessage'] = $this->dynamicMessage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBClusterConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = $map['AccessDeniedDetail'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['DynamicCode'])) {
            $model->dynamicCode = $map['DynamicCode'];
        }
        if (isset($map['DynamicMessage'])) {
            $model->dynamicMessage = $map['DynamicMessage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
