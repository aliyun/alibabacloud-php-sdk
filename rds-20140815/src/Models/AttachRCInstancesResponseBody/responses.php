<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\AttachRCInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class responses extends Model
{
    /**
     * @description The HTTP status code returned.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The node ID.
     *
     * @example rc-e2g521l55k038cr8****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The message returned.
     *
     * >  If the request is successful, **Successful** is returned. If the request fails, an error message that contains information such as an error code is returned.
     * @example Successful
     *
     * @var string
     */
    public $message;
    protected $_name = [
        'code'       => 'Code',
        'instanceId' => 'InstanceId',
        'message'    => 'Message',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return responses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}
