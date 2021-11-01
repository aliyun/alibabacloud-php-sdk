<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models;

use AlibabaCloud\Tea\Model;

class DescribeNamespacesRequest extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Foasconsole\V20190601\Models\DescribeNamespacesRequest\describeNamespacesRequest
     */
    public $describeNamespacesRequest;
    protected $_name = [
        'describeNamespacesRequest' => 'DescribeNamespacesRequest',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->describeNamespacesRequest) {
            $res['DescribeNamespacesRequest'] = null !== $this->describeNamespacesRequest ? $this->describeNamespacesRequest->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNamespacesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DescribeNamespacesRequest'])) {
            $model->describeNamespacesRequest = \AlibabaCloud\SDK\Foasconsole\V20190601\Models\DescribeNamespacesRequest\describeNamespacesRequest::fromMap($map['DescribeNamespacesRequest']);
        }

        return $model;
    }
}
