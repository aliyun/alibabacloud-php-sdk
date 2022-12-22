<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeVpcFirewallPolicyPriorUsedResponseBody extends Model
{
    /**
     * @description The lowest priority for the access control policy.
     *
     * @example 150
     *
     * @var int
     */
    public $end;

    /**
     * @description The ID of the request.
     *
     * @example CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The highest priority for the access control policy.
     *
     * @example 1
     *
     * @var int
     */
    public $start;
    protected $_name = [
        'end'       => 'End',
        'requestId' => 'RequestId',
        'start'     => 'Start',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVpcFirewallPolicyPriorUsedResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }

        return $model;
    }
}
