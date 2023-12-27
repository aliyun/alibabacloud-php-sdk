<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\SDK\Paidsw\V20220101\Models\UpdateInstanceRequest\datasets;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\UpdateInstanceRequest\requestedResource;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\UpdateInstanceRequest\userVpc;
use AlibabaCloud\Tea\Model;

class UpdateInstanceRequest extends Model
{
    /**
     * @example PRIVATE
     *
     * @var string
     */
    public $accessibility;

    /**
     * @var datasets[]
     */
    public $datasets;

    /**
     * @example false
     *
     * @var bool
     */
    public $disassociateDatasets;

    /**
     * @example false
     *
     * @var bool
     */
    public $disassociateDriver;

    /**
     * @example false
     *
     * @var bool
     */
    public $disassociateVpc;

    /**
     * @example 535.54.03
     *
     * @var string
     */
    public $driver;

    /**
     * @example ecs.c6.large
     *
     * @var string
     */
    public $ecsSpec;

    /**
     * @example image-05cefd0be2exxxx
     *
     * @var string
     */
    public $imageId;

    /**
     * @example registry.cn-shanghai.aliyuncs.com/pai_product/tensorflow:py36_cpu_tf1.12_ubuntu
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @example training_data
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @example {"CPU":"4","Memory":"8Gi","SharedMemory":"4Gi","GPU":"1","GPUType":"Tesla-V100-16G"}
     *
     * @var requestedResource
     */
    public $requestedResource;

    /**
     * @example 1612285282502324
     *
     * @var string
     */
    public $userId;

    /**
     * @var userVpc
     */
    public $userVpc;

    /**
     * @example d-123456789
     *
     * @var string
     */
    public $workspaceSource;
    protected $_name = [
        'accessibility'        => 'Accessibility',
        'datasets'             => 'Datasets',
        'disassociateDatasets' => 'DisassociateDatasets',
        'disassociateDriver'   => 'DisassociateDriver',
        'disassociateVpc'      => 'DisassociateVpc',
        'driver'               => 'Driver',
        'ecsSpec'              => 'EcsSpec',
        'imageId'              => 'ImageId',
        'imageUrl'             => 'ImageUrl',
        'instanceName'         => 'InstanceName',
        'priority'             => 'Priority',
        'requestedResource'    => 'RequestedResource',
        'userId'               => 'UserId',
        'userVpc'              => 'UserVpc',
        'workspaceSource'      => 'WorkspaceSource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }
        if (null !== $this->datasets) {
            $res['Datasets'] = [];
            if (null !== $this->datasets && \is_array($this->datasets)) {
                $n = 0;
                foreach ($this->datasets as $item) {
                    $res['Datasets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->disassociateDatasets) {
            $res['DisassociateDatasets'] = $this->disassociateDatasets;
        }
        if (null !== $this->disassociateDriver) {
            $res['DisassociateDriver'] = $this->disassociateDriver;
        }
        if (null !== $this->disassociateVpc) {
            $res['DisassociateVpc'] = $this->disassociateVpc;
        }
        if (null !== $this->driver) {
            $res['Driver'] = $this->driver;
        }
        if (null !== $this->ecsSpec) {
            $res['EcsSpec'] = $this->ecsSpec;
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
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->requestedResource) {
            $res['RequestedResource'] = null !== $this->requestedResource ? $this->requestedResource->toMap() : null;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userVpc) {
            $res['UserVpc'] = null !== $this->userVpc ? $this->userVpc->toMap() : null;
        }
        if (null !== $this->workspaceSource) {
            $res['WorkspaceSource'] = $this->workspaceSource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }
        if (isset($map['Datasets'])) {
            if (!empty($map['Datasets'])) {
                $model->datasets = [];
                $n               = 0;
                foreach ($map['Datasets'] as $item) {
                    $model->datasets[$n++] = null !== $item ? datasets::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DisassociateDatasets'])) {
            $model->disassociateDatasets = $map['DisassociateDatasets'];
        }
        if (isset($map['DisassociateDriver'])) {
            $model->disassociateDriver = $map['DisassociateDriver'];
        }
        if (isset($map['DisassociateVpc'])) {
            $model->disassociateVpc = $map['DisassociateVpc'];
        }
        if (isset($map['Driver'])) {
            $model->driver = $map['Driver'];
        }
        if (isset($map['EcsSpec'])) {
            $model->ecsSpec = $map['EcsSpec'];
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
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['RequestedResource'])) {
            $model->requestedResource = requestedResource::fromMap($map['RequestedResource']);
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserVpc'])) {
            $model->userVpc = userVpc::fromMap($map['UserVpc']);
        }
        if (isset($map['WorkspaceSource'])) {
            $model->workspaceSource = $map['WorkspaceSource'];
        }

        return $model;
    }
}
