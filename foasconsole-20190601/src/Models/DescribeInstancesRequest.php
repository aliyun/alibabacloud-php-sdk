<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\DescribeInstancesRequest\describeInstancesRequest;

class DescribeInstancesRequest extends Model
{
    /**
     * @var describeInstancesRequest
     */
    public $describeInstancesRequest;
    protected $_name = [
        'describeInstancesRequest' => 'DescribeInstancesRequest',
    ];

    public function validate()
    {
        if (null !== $this->describeInstancesRequest) {
            $this->describeInstancesRequest->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->describeInstancesRequest) {
            $res['DescribeInstancesRequest'] = null !== $this->describeInstancesRequest ? $this->describeInstancesRequest->toArray($noStream) : $this->describeInstancesRequest;
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
        if (isset($map['DescribeInstancesRequest'])) {
            $model->describeInstancesRequest = self::fromMap($map['DescribeInstancesRequest']);
        }

        return $model;
    }
}
