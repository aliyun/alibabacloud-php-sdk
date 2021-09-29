<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class PushConfigInfoRequest extends Model
{
    /**
     * @description 项目ID
     *
     * @var string
     */
    public $projectId;

    /**
     * @description 主机设备id
     *
     * @var string
     */
    public $hostDeviceId;

    /**
     * @description 配置信息
     *
     * @var string
     */
    public $config;
    protected $_name = [
        'projectId'    => 'ProjectId',
        'hostDeviceId' => 'HostDeviceId',
        'config'       => 'Config',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->hostDeviceId) {
            $res['HostDeviceId'] = $this->hostDeviceId;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PushConfigInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['HostDeviceId'])) {
            $model->hostDeviceId = $map['HostDeviceId'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }

        return $model;
    }
}
