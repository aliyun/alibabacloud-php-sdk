<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeNatAclPageStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $detail;

    /**
     * @description Indicates whether pagination for access control policies for NAT firewalls is supported.
     *
     * @example True
     *
     * @var bool
     */
    public $natAclPageEnable;

    /**
     * @description The ID of the request.
     *
     * @example B97F9AD7-A2DB-5F8F-9206-DF89DE0AC9E8
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'detail'           => 'Detail',
        'natAclPageEnable' => 'NatAclPageEnable',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->natAclPageEnable) {
            $res['NatAclPageEnable'] = $this->natAclPageEnable;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNatAclPageStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['NatAclPageEnable'])) {
            $model->natAclPageEnable = $map['NatAclPageEnable'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
