<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models;

use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeIpWhitelistResponseBody\ipList;
use AlibabaCloud\Tea\Model;

class DescribeIpWhitelistResponseBody extends Model
{
    /**
     * @var ipList
     */
    public $ipList;

    /**
     * @example 070CAB1F-0F38-4EA8-8FD9-CA129F22409D
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ipList'    => 'IpList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipList) {
            $res['IpList'] = null !== $this->ipList ? $this->ipList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeIpWhitelistResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpList'])) {
            $model->ipList = ipList::fromMap($map['IpList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
