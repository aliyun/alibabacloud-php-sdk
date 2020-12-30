<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Tea\Model;

class DescribeBackSourceCidrResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
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
            $res['CidrList'] = $this->cidrList;
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
            if (!empty($map['CidrList'])) {
                $model->cidrList = $map['CidrList'];
            }
        }

        return $model;
    }
}
