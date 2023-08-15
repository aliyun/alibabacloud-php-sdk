<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeSubDomainResponseBody extends Model
{
    /**
     * @example F4208C83-B9BC-4A64-A739-8F88E98DA469
     *
     * @var string
     */
    public $requestId;

    /**
     * @example cn-hangzhou-h-aliyun
     *
     * @var string
     */
    public $subDomain;
    protected $_name = [
        'requestId' => 'RequestId',
        'subDomain' => 'SubDomain',
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
        if (null !== $this->subDomain) {
            $res['SubDomain'] = $this->subDomain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSubDomainResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SubDomain'])) {
            $model->subDomain = $map['SubDomain'];
        }

        return $model;
    }
}
