<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models;

use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeIpWhitelistResponseBody\ipList;
use AlibabaCloud\Tea\Model;

class DescribeIpWhitelistResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var ipList
     */
    public $ipList;
    protected $_name = [
        'requestId' => 'RequestId',
        'ipList'    => 'IpList',
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
        if (null !== $this->ipList) {
            $res['IpList'] = null !== $this->ipList ? $this->ipList->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['IpList'])) {
            $model->ipList = ipList::fromMap($map['IpList']);
        }

        return $model;
    }
}
