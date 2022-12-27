<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class RestartDeviceInstanceRequest extends Model
{
    /**
     * @example f829265e-2f6f-4088-a4be-c1fb95ab45f9
     *
     * @var string
     */
    public $appId;

    /**
     * @example i-5slvdwcxf6ch81nl4r7p04j5q
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'appId'      => 'AppId',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RestartDeviceInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
