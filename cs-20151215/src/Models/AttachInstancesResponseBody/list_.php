<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\AttachInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The code that indicates the task result.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The ID of the instance.
     *
     * @example i-2ze0lgm3y6iylcbt****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Indicates whether the ECS instances are successfully added to the ACK cluster.
     *
     * @example successful
     *
     * @var string
     */
    public $message;
    protected $_name = [
        'code'       => 'code',
        'instanceId' => 'instanceId',
        'message'    => 'message',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        return $model;
    }
}
