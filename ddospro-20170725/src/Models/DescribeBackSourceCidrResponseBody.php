<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DDoSPro\V20170725\Models;

use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeBackSourceCidrResponseBody\cidrList;
use AlibabaCloud\Tea\Model;

class DescribeBackSourceCidrResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var cidrList
     */
    public $cidrList;
    protected $_name = [
        'requestId' => 'RequestId',
        'cidrList'  => 'CidrList',
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
        if (null !== $this->cidrList) {
            $res['CidrList'] = null !== $this->cidrList ? $this->cidrList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBackSourceCidrResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CidrList'])) {
            $model->cidrList = cidrList::fromMap($map['CidrList']);
        }

        return $model;
    }
}
