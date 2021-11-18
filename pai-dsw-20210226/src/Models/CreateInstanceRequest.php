<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models;

use AlibabaCloud\Tea\Model;

class CreateInstanceRequest extends Model
{
    /**
     * @var Dataset[]
     */
    public $datasetList;

    /**
     * @description 实例规格
     *
     * @var string
     */
    public $ecsSpec;

    /**
     * @description 环境参数
     *
     * @var mixed[]
     */
    public $environments;

    /**
     * @description 镜像id
     *
     * @var string
     */
    public $imageId;

    /**
     * @description 镜像地址
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @description 实例名称
     *
     * @var string
     */
    public $instanceName;

    /**
     * @var int
     */
    public $isPublic;

    /**
     * @description nas文件系统id
     *
     * @var string
     */
    public $nasFileSystemId;

    /**
     * @description 实例的真实用户名称
     *
     * @var string
     */
    public $userName;

    /**
     * @description 打通的vpc网络配置
     *
     * @var UserVpc
     */
    public $userVpc;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'datasetList'     => 'DatasetList',
        'ecsSpec'         => 'EcsSpec',
        'environments'    => 'Environments',
        'imageId'         => 'ImageId',
        'imageUrl'        => 'ImageUrl',
        'instanceName'    => 'InstanceName',
        'isPublic'        => 'IsPublic',
        'nasFileSystemId' => 'NasFileSystemId',
        'userName'        => 'UserName',
        'userVpc'         => 'UserVpc',
        'workspaceId'     => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetList) {
            $res['DatasetList'] = [];
            if (null !== $this->datasetList && \is_array($this->datasetList)) {
                $n = 0;
                foreach ($this->datasetList as $item) {
                    $res['DatasetList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ecsSpec) {
            $res['EcsSpec'] = $this->ecsSpec;
        }
        if (null !== $this->environments) {
            $res['Environments'] = $this->environments;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->isPublic) {
            $res['IsPublic'] = $this->isPublic;
        }
        if (null !== $this->nasFileSystemId) {
            $res['NasFileSystemId'] = $this->nasFileSystemId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->userVpc) {
            $res['UserVpc'] = null !== $this->userVpc ? $this->userVpc->toMap() : null;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetList'])) {
            if (!empty($map['DatasetList'])) {
                $model->datasetList = [];
                $n                  = 0;
                foreach ($map['DatasetList'] as $item) {
                    $model->datasetList[$n++] = null !== $item ? Dataset::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EcsSpec'])) {
            $model->ecsSpec = $map['EcsSpec'];
        }
        if (isset($map['Environments'])) {
            $model->environments = $map['Environments'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['IsPublic'])) {
            $model->isPublic = $map['IsPublic'];
        }
        if (isset($map['NasFileSystemId'])) {
            $model->nasFileSystemId = $map['NasFileSystemId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['UserVpc'])) {
            $model->userVpc = UserVpc::fromMap($map['UserVpc']);
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
