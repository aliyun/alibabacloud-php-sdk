<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypeFamiliesResponseBody\instanceTypeFamilies;

class DescribeInstanceTypeFamiliesResponseBody extends Model
{
    /**
     * @var instanceTypeFamilies
     */
    public $instanceTypeFamilies;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceTypeFamilies' => 'InstanceTypeFamilies',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->instanceTypeFamilies) {
            $this->instanceTypeFamilies->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceTypeFamilies) {
            $res['InstanceTypeFamilies'] = null !== $this->instanceTypeFamilies ? $this->instanceTypeFamilies->toArray($noStream) : $this->instanceTypeFamilies;
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
        if (isset($map['InstanceTypeFamilies'])) {
            $model->instanceTypeFamilies = instanceTypeFamilies::fromMap($map['InstanceTypeFamilies']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
