<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models\DescribeMountPointsVscAttachInfoResponseBody;

use AlibabaCloud\Tea\Model;

class attachInfos extends Model
{
    /**
     * @example vsc-agent-f5a9bb4b041541f595a0c239c9e0f971-cn-shanghai
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
     * @example vsc-bp18fhqie89loyqixyieal
     *
     * @var string
     */
    public $vscId;

    /**
     * @example cxc
     *
     * @var string
     */
    public $vscName;

    /**
     * @var string
     */
    public $vscStatus;

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
        'vscStatus' => 'VscStatus',
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
        if (null !== $this->vscStatus) {
            $res['VscStatus'] = $this->vscStatus;
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
        if (isset($map['VscStatus'])) {
            $model->vscStatus = $map['VscStatus'];
        }
        if (isset($map['VscType'])) {
            $model->vscType = $map['VscType'];
        }

        return $model;
    }
}
