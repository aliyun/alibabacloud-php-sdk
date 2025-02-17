<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RebootInstancesResponseBody\instanceResponses;

class RebootInstancesResponseBody extends Model
{
    /**
     * @var instanceResponses
     */
    public $instanceResponses;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceResponses' => 'InstanceResponses',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->instanceResponses) {
            $this->instanceResponses->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceResponses) {
            $res['InstanceResponses'] = null !== $this->instanceResponses ? $this->instanceResponses->toArray($noStream) : $this->instanceResponses;
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
        if (isset($map['InstanceResponses'])) {
            $model->instanceResponses = instanceResponses::fromMap($map['InstanceResponses']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
