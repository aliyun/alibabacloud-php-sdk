<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Dara\Model;

class DescribeInstancePasswordsSettingResponseBody extends Model
{
    /**
     * @var bool
     */
    public $instancePasswordSetting;
    /**
     * @var string
     */
    public $requestId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
