<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models\DescribeMountPointsVscAttachInfoRequest;

use AlibabaCloud\Tea\Model;

class queryInfos extends Model
{
    /**
     * @example i-2zehyz70ednszl6rrfj6
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example f-9dd3c6bajmy110.cn-zhangjiakou.dfs.aliyuncs.com
     *
     * @var string
     */
    public $mountPointId;

    /**
     * @example vsc-bp19yqmujug2r18z0h9qal
     *
     * @var string
     */
    public $vscId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'mountPointId' => 'MountPointId',
        'vscId' => 'VscId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->mountPointId) {
            $res['MountPointId'] = $this->mountPointId;
        }
        if (null !== $this->vscId) {
            $res['VscId'] = $this->vscId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return queryInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MountPointId'])) {
            $model->mountPointId = $map['MountPointId'];
        }
        if (isset($map['VscId'])) {
            $model->vscId = $map['VscId'];
        }

        return $model;
    }
}
