<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\RebootInstancesResponseBody\instanceResponses;
use AlibabaCloud\Tea\Model;

class RebootInstancesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var instanceResponses
     */
    public $instanceResponses;
    protected $_name = [
        'requestId'         => 'RequestId',
        'instanceResponses' => 'InstanceResponses',
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
        if (null !== $this->instanceResponses) {
            $res['InstanceResponses'] = null !== $this->instanceResponses ? $this->instanceResponses->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RebootInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceResponses'])) {
            $model->instanceResponses = instanceResponses::fromMap($map['InstanceResponses']);
        }

        return $model;
    }
}
