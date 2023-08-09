<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\StopInstancesResponseBody\instanceResponses;
use AlibabaCloud\Tea\Model;

class StopInstancesResponseBody extends Model
{
    /**
     * @description The error code that is returned for the operation on the ECS instance. When a value of 200 is returned, the operation is successful. For more information, see the "Error codes" section in this topic.
     *
     * @var instanceResponses
     */
    public $instanceResponses;

    /**
     * @description Details about the responses returned for the instances, which contain the state of each instance before and after the operation is called, and the results of the operation.
     *
     * @example 1C488B66-B819-4D14-8711-C4EAAA13AC01
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceResponses' => 'InstanceResponses',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceResponses) {
            $res['InstanceResponses'] = null !== $this->instanceResponses ? $this->instanceResponses->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopInstancesResponseBody
     */
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
