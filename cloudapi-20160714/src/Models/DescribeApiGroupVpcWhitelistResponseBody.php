<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DescribeApiGroupVpcWhitelistResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example CEF72CEB-54B6-4AE8-B225-F876FF7BZ016
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-bp11w979o2s9rcr962w25
     *
     * @var string
     */
    public $vpcIds;
    protected $_name = [
        'requestId' => 'RequestId',
        'vpcIds'    => 'VpcIds',
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
        if (null !== $this->vpcIds) {
            $res['VpcIds'] = $this->vpcIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApiGroupVpcWhitelistResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VpcIds'])) {
            $model->vpcIds = $map['VpcIds'];
        }

        return $model;
    }
}
