<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstancePasswordsSettingResponseBody extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $instancePasswordSetting;

    /**
     * @example 20758A-585D-4A41-A9B2-28DA8F4****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $vncPasswordSetting;
    protected $_name = [
        'instancePasswordSetting' => 'InstancePasswordSetting',
        'requestId'               => 'RequestId',
        'vncPasswordSetting'      => 'VncPasswordSetting',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instancePasswordSetting) {
            $res['InstancePasswordSetting'] = $this->instancePasswordSetting;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->vncPasswordSetting) {
            $res['VncPasswordSetting'] = $this->vncPasswordSetting;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstancePasswordsSettingResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstancePasswordSetting'])) {
            $model->instancePasswordSetting = $map['InstancePasswordSetting'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VncPasswordSetting'])) {
            $model->vncPasswordSetting = $map['VncPasswordSetting'];
        }

        return $model;
    }
}
