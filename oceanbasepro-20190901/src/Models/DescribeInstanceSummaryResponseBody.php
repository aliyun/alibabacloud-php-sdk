<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceSummaryResponseBody\instanceSummary;

class DescribeInstanceSummaryResponseBody extends Model
{
    /**
     * @var instanceSummary
     */
    public $instanceSummary;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceSummary' => 'InstanceSummary',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->instanceSummary) {
            $this->instanceSummary->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceSummary) {
            $res['InstanceSummary'] = null !== $this->instanceSummary ? $this->instanceSummary->toArray($noStream) : $this->instanceSummary;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['InstanceSummary'])) {
            $model->instanceSummary = instanceSummary::fromMap($map['InstanceSummary']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
