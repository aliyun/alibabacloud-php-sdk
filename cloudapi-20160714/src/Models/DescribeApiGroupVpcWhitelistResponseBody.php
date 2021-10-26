<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DescribeApiGroupVpcWhitelistResponseBody extends Model
{
    /**
     * @var string
     */
    public $vpcIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'vpcIds'    => 'VpcIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcIds) {
            $res['VpcIds'] = $this->vpcIds;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['VpcIds'])) {
            $model->vpcIds = $map['VpcIds'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
