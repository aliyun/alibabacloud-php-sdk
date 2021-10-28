<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\Tea\Model;

class InstallGlobalAppResponseBody extends Model
{
    /**
     * @description 主机 ID
     *
     * @var string
     */
    public $hostId;

    /**
     * @description 安装后应用名
     *
     * @var string
     */
    public $installedAppName;

    /**
     * @description 区域名
     *
     * @var string
     */
    public $regionId;

    /**
     * @description 请求 ID
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 工作空间
     *
     * @var string
     */
    public $workspace;
    protected $_name = [
        'hostId'           => 'HostId',
        'installedAppName' => 'InstalledAppName',
        'regionId'         => 'RegionId',
        'requestId'        => 'RequestId',
        'workspace'        => 'Workspace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }
        if (null !== $this->installedAppName) {
            $res['InstalledAppName'] = $this->installedAppName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->workspace) {
            $res['Workspace'] = $this->workspace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InstallGlobalAppResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }
        if (isset($map['InstalledAppName'])) {
            $model->installedAppName = $map['InstalledAppName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Workspace'])) {
            $model->workspace = $map['Workspace'];
        }

        return $model;
    }
}
