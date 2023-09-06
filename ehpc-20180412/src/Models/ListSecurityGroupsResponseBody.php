<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListSecurityGroupsResponseBody\securityGroups;
use AlibabaCloud\Tea\Model;

class ListSecurityGroupsResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 6D9A3378-61CA-4415-BEB0-1168C2A15975
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The security group ID.
     *
     * @var securityGroups
     */
    public $securityGroups;

    /**
     * @description The number of security groups.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'      => 'RequestId',
        'securityGroups' => 'SecurityGroups',
        'totalCount'     => 'TotalCount',
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
        if (null !== $this->securityGroups) {
            $res['SecurityGroups'] = null !== $this->securityGroups ? $this->securityGroups->toMap() : null;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSecurityGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecurityGroups'])) {
            $model->securityGroups = securityGroups::fromMap($map['SecurityGroups']);
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
