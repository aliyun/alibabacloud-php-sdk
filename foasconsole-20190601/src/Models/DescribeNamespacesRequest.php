<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\DescribeNamespacesRequest\describeNamespacesRequest;

class DescribeNamespacesRequest extends Model
{
    /**
     * @var describeNamespacesRequest
     */
    public $describeNamespacesRequest;
    protected $_name = [
        'describeNamespacesRequest' => 'DescribeNamespacesRequest',
    ];

    public function validate()
    {
        if (null !== $this->describeNamespacesRequest) {
            $this->describeNamespacesRequest->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->describeNamespacesRequest) {
            $res['DescribeNamespacesRequest'] = null !== $this->describeNamespacesRequest ? $this->describeNamespacesRequest->toArray($noStream) : $this->describeNamespacesRequest;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DescribeNamespacesRequest'])) {
            $model->describeNamespacesRequest = self::fromMap($map['DescribeNamespacesRequest']);
        }

        return $model;
    }
}
