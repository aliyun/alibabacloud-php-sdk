<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models;

use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeIpWhitelistGroupsResponseBody\groups;
use AlibabaCloud\Tea\Model;

class DescribeIpWhitelistGroupsResponseBody extends Model
{
    /**
     * @var groups
     */
    public $groups;

    /**
     * @example 391A6933-0D4A-42EB-BCE7-03DA59D69ED4
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'groups'    => 'Groups',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groups) {
            $res['Groups'] = null !== $this->groups ? $this->groups->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeIpWhitelistGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Groups'])) {
            $model->groups = groups::fromMap($map['Groups']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
