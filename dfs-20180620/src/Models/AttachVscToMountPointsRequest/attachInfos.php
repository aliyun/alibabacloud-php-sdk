<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models\AttachVscToMountPointsRequest;

use AlibabaCloud\Tea\Model;

class attachInfos extends Model
{
    /**
     * @example i-2zehyz70ednszl6rrfj6
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example f-cfea9ae2ref87.cn-zhangjiakou.dfs.aliyuncs.com
     *
     * @var string
     */
    public $mountPointId;

    /**
     * @example vsc-bp19yqmujug2r762cnabal
     *
     * @var string
     */
    public $vscId;

    /**
     * @example xc
     *
     * @var string
     */
    public $vscName;

    /**
     * @example Primary
     *
     * @var string
     */
    public $vscType;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'mountPointId' => 'MountPointId',
        'vscId' => 'VscId',
        'vscName' => 'VscName',
        'vscType' => 'VscType',
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
        if (null !== $this->vscName) {
            $res['VscName'] = $this->vscName;
        }
        if (null !== $this->vscType) {
            $res['VscType'] = $this->vscType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attachInfos
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
        if (isset($map['VscName'])) {
            $model->vscName = $map['VscName'];
        }
        if (isset($map['VscType'])) {
            $model->vscType = $map['VscType'];
        }

        return $model;
    }
}
