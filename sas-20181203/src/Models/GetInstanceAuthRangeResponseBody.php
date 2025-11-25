<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetInstanceAuthRangeResponseBody\instanceAuthRange;

class GetInstanceAuthRangeResponseBody extends Model
{
    /**
     * @var instanceAuthRange
     */
    public $instanceAuthRange;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceAuthRange' => 'InstanceAuthRange',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->instanceAuthRange) {
            $this->instanceAuthRange->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceAuthRange) {
            $res['InstanceAuthRange'] = null !== $this->instanceAuthRange ? $this->instanceAuthRange->toArray($noStream) : $this->instanceAuthRange;
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
        if (isset($map['InstanceAuthRange'])) {
            $model->instanceAuthRange = instanceAuthRange::fromMap($map['InstanceAuthRange']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
