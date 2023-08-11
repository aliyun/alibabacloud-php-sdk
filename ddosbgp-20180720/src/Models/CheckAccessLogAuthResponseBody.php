<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Tea\Model;

class CheckAccessLogAuthResponseBody extends Model
{
    /**
     * @description All Alibaba Cloud API operations must include common request parameters. For more information about common request parameters, see [Common parameters](~~118841~~).
     *
     * For more information about sample requests, see the **"Examples"** section of this topic.
     * @example true
     *
     * @var bool
     */
    public $accessLogAuth;

    /**
     * @example 864FE2F4-CB2E-4024-B9EF-D59FD08ABD41
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accessLogAuth' => 'AccessLogAuth',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessLogAuth) {
            $res['AccessLogAuth'] = $this->accessLogAuth;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckAccessLogAuthResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessLogAuth'])) {
            $model->accessLogAuth = $map['AccessLogAuth'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
