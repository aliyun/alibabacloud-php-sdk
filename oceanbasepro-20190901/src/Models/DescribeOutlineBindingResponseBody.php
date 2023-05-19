<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOutlineBindingResponseBody\outlineBinding;
use AlibabaCloud\Tea\Model;

class DescribeOutlineBindingResponseBody extends Model
{
    /**
     * @description ```
     * http(s)://[Endpoint]/?Action=DescribeOutlineBinding
     * &TenantId=t2mr3oae0****
     * &DatabaseName=testdb
     * &SQLId=8D6E84****0B8FB1823D199E2CA1****
     * &IsConcurrentLimit=false
     * &InstanceId=ob317v4uif****
     * ```
     * @var outlineBinding
     */
    public $outlineBinding;

    /**
     * @example EE205C00-30E4-XXXX-XXXX-87E3A8A2AA0C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'outlineBinding' => 'OutlineBinding',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outlineBinding) {
            $res['OutlineBinding'] = null !== $this->outlineBinding ? $this->outlineBinding->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOutlineBindingResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OutlineBinding'])) {
            $model->outlineBinding = outlineBinding::fromMap($map['OutlineBinding']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
