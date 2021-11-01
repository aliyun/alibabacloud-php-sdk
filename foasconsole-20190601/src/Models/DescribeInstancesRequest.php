<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstancesRequest extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Foasconsole\V20190601\Models\DescribeInstancesRequest\describeInstancesRequest
     */
    public $describeInstancesRequest;
    protected $_name = [
        'describeInstancesRequest' => 'DescribeInstancesRequest',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->describeInstancesRequest) {
            $res['DescribeInstancesRequest'] = null !== $this->describeInstancesRequest ? $this->describeInstancesRequest->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DescribeInstancesRequest'])) {
            $model->describeInstancesRequest = \AlibabaCloud\SDK\Foasconsole\V20190601\Models\DescribeInstancesRequest\describeInstancesRequest::fromMap($map['DescribeInstancesRequest']);
        }

        return $model;
    }
}
