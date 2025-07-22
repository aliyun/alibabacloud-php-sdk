<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceRequest\affinity;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceRequest\cloudDisks;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceRequest\datasets;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceRequest\labels;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceRequest\requestedResource;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceRequest\tag;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceRequest\userCommand;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceRequest\userVpc;
use AlibabaCloud\Tea\Model;

class CreateInstanceRequest extends Model
{
    /**
     * @description The instance accessibility.
     *
     * Valid values:
     *
     *   PUBLIC: The instances are accessible to all members in the workspace.
     *   PRIVATE: The instances are accessible only to you and the administrator of the workspace.
     *
     * @example PRIVATE
     *
     * @var string
     */
    public $accessibility;

    /**
     * @description The affinity configuration.
     *
     * @var affinity
     */
    public $affinity;

    /**
     * @description The cloud disks.
     *
     * @example []
     *
     * @var cloudDisks[]
     */
    public $cloudDisks;

    /**
     * @description The credential configuration.
     *
     * @var CredentialConfig
     */
    public $credentialConfig;

    /**
     * @description The datasets.
     *
     * @var datasets[]
     */
    public $datasets;

    /**
     * @description The NVIDIA driver configuration.
     *
     * @example 535.54.03
     *
     * @var string
     */
    public $driver;

    /**
     * @description The dynamic mount configuration.
     *
     * @var DynamicMount
     */
    public $dynamicMount;

    /**
     * @description The ECS instance type of the instance. You can call [ListEcsSpecs](https://help.aliyun.com/document_detail/470423.html) to obtain the ECS instance type.
     *
     * @example ecs.c6.large
     *
     * @var string
     */
    public $ecsSpec;

    /**
     * @description The environment variables.
     *
     * @example {userName: "Chris"}
     *
     * @var string[]
     */
    public $environmentVariables;

    /**
     * @description The Base64-encoded account and password for the user\\"s private image. The password will be hidden.
     *
     * @example ****
     *
     * @var string
     */
    public $imageAuth;

    /**
     * @description The image ID. You can call [ListImages](https://help.aliyun.com/document_detail/449118.html) to obtain the image ID.
     *
     * @example image-05cefd0be2exxxx
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The image address. You can call [ListImages](https://help.aliyun.com/document_detail/449118.html) to obtain the image address.
     *
     * @example registry.cn-shanghai.aliyuncs.com/pai_product/tensorflow:py36_cpu_tf1.12_ubuntu
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @description The instance name. The name must meet the following requirements:
     *
     *   The name can contain only letters, digits, and underscores (_).
     *   The name can be up to 27 characters in length.
     *
     * @example training_data
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The custom labels.
     *
     * @example {\\"foo\\": \\"bar\\"}
     *
     * @var labels[]
     */
    public $labels;

    /**
     * @var string
     */
    public $oversoldType;

    /**
     * @description The priority based on which resources are allocated to instances. Valid values: 1 to 9.
     *
     *   1: the lowest priority.
     *   9: the highest priority.
     *
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @description The resource configurations.
     *
     * @example {"CPU":"4","Memory":"8Gi","SharedMemory":"4Gi","GPU":"1","GPUType":"Tesla-V100-16G"}
     *
     * @var requestedResource
     */
    public $requestedResource;

    /**
     * @description The ID of the resource group. This parameter is configured during prepayment. For information about how to create a dedicated resource group, see [Create a dedicated resource group and purchase general computing resources](https://help.aliyun.com/document_detail/202827.html).
     *
     * @example dsw-123456789
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @var userCommand
     */
    public $userCommand;

    /**
     * @description The ID of the instance owner. Valid values: Alibaba Cloud account and RAM user.
     *
     * @example 161228528250****
     *
     * @var string
     */
    public $userId;

    /**
     * @description The virtual private cloud (VPC) configurations.
     *
     * @var userVpc
     */
    public $userVpc;

    /**
     * @description The workspace ID. You can call [ListWorkspaces](https://help.aliyun.com/document_detail/449124.html) to obtain the workspace ID.
     *
     * @example 40823
     *
     * @var string
     */
    public $workspaceId;

    /**
     * @description The storage corresponding to the working directory. You can mount disks or datasets to /mnt/workspace at the same time. OSS datasets and dynamically mounted datasets are not supported.
     *
     * Valid values:
     *
     *   rootfsCloudDisk: Mount the disk to the working directory.
     *   Mount path of the dataset, such as /mnt/data: Datasets in URI format only support this method.
     *   Dataset ID, such as d-vsqjvs\\*\\*\\*\\*rp5l206u: If a single dataset is mounted to multiple paths, the first path is selected. We recommend that you do not use this method, use the mount path instead.
     *
     * If you leave this parameter empty:
     *
     *   If the instance uses cloud disks, cloud disks are selected by default.
     *   if no cloud disks are available, the first NAS or CPFS dataset is selected as the working directory.
     *   If no cloud disks, and NAS or CPFS datasets are available, the host space is used.
     *
     * @example rootfsCloudDisk
     *
     * @var string
     */
    public $workspaceSource;
    protected $_name = [
        'accessibility' => 'Accessibility',
        'affinity' => 'Affinity',
        'cloudDisks' => 'CloudDisks',
        'credentialConfig' => 'CredentialConfig',
        'datasets' => 'Datasets',
        'driver' => 'Driver',
        'dynamicMount' => 'DynamicMount',
        'ecsSpec' => 'EcsSpec',
        'environmentVariables' => 'EnvironmentVariables',
        'imageAuth' => 'ImageAuth',
        'imageId' => 'ImageId',
        'imageUrl' => 'ImageUrl',
        'instanceName' => 'InstanceName',
        'labels' => 'Labels',
        'oversoldType' => 'OversoldType',
        'priority' => 'Priority',
        'requestedResource' => 'RequestedResource',
        'resourceId' => 'ResourceId',
        'tag' => 'Tag',
        'userCommand' => 'UserCommand',
        'userId' => 'UserId',
        'userVpc' => 'UserVpc',
        'workspaceId' => 'WorkspaceId',
        'workspaceSource' => 'WorkspaceSource',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }
        if (null !== $this->affinity) {
            $res['Affinity'] = null !== $this->affinity ? $this->affinity->toMap() : null;
        }
        if (null !== $this->cloudDisks) {
            $res['CloudDisks'] = [];
            if (null !== $this->cloudDisks && \is_array($this->cloudDisks)) {
                $n = 0;
                foreach ($this->cloudDisks as $item) {
                    $res['CloudDisks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->credentialConfig) {
            $res['CredentialConfig'] = null !== $this->credentialConfig ? $this->credentialConfig->toMap() : null;
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
        if (null !== $this->driver) {
            $res['Driver'] = $this->driver;
        }
        if (null !== $this->dynamicMount) {
            $res['DynamicMount'] = null !== $this->dynamicMount ? $this->dynamicMount->toMap() : null;
        }
        if (null !== $this->ecsSpec) {
            $res['EcsSpec'] = $this->ecsSpec;
        }
        if (null !== $this->environmentVariables) {
            $res['EnvironmentVariables'] = $this->environmentVariables;
        }
        if (null !== $this->imageAuth) {
            $res['ImageAuth'] = $this->imageAuth;
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
        if (null !== $this->labels) {
            $res['Labels'] = [];
            if (null !== $this->labels && \is_array($this->labels)) {
                $n = 0;
                foreach ($this->labels as $item) {
                    $res['Labels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->oversoldType) {
            $res['OversoldType'] = $this->oversoldType;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->requestedResource) {
            $res['RequestedResource'] = null !== $this->requestedResource ? $this->requestedResource->toMap() : null;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userCommand) {
            $res['UserCommand'] = null !== $this->userCommand ? $this->userCommand->toMap() : null;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userVpc) {
            $res['UserVpc'] = null !== $this->userVpc ? $this->userVpc->toMap() : null;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }
        if (null !== $this->workspaceSource) {
            $res['WorkspaceSource'] = $this->workspaceSource;
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
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }
        if (isset($map['Affinity'])) {
            $model->affinity = affinity::fromMap($map['Affinity']);
        }
        if (isset($map['CloudDisks'])) {
            if (!empty($map['CloudDisks'])) {
                $model->cloudDisks = [];
                $n = 0;
                foreach ($map['CloudDisks'] as $item) {
                    $model->cloudDisks[$n++] = null !== $item ? cloudDisks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CredentialConfig'])) {
            $model->credentialConfig = CredentialConfig::fromMap($map['CredentialConfig']);
        }
        if (isset($map['Datasets'])) {
            if (!empty($map['Datasets'])) {
                $model->datasets = [];
                $n = 0;
                foreach ($map['Datasets'] as $item) {
                    $model->datasets[$n++] = null !== $item ? datasets::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Driver'])) {
            $model->driver = $map['Driver'];
        }
        if (isset($map['DynamicMount'])) {
            $model->dynamicMount = DynamicMount::fromMap($map['DynamicMount']);
        }
        if (isset($map['EcsSpec'])) {
            $model->ecsSpec = $map['EcsSpec'];
        }
        if (isset($map['EnvironmentVariables'])) {
            $model->environmentVariables = $map['EnvironmentVariables'];
        }
        if (isset($map['ImageAuth'])) {
            $model->imageAuth = $map['ImageAuth'];
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
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n = 0;
                foreach ($map['Labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? labels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OversoldType'])) {
            $model->oversoldType = $map['OversoldType'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['RequestedResource'])) {
            $model->requestedResource = requestedResource::fromMap($map['RequestedResource']);
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserCommand'])) {
            $model->userCommand = userCommand::fromMap($map['UserCommand']);
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserVpc'])) {
            $model->userVpc = userVpc::fromMap($map['UserVpc']);
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }
        if (isset($map['WorkspaceSource'])) {
            $model->workspaceSource = $map['WorkspaceSource'];
        }

        return $model;
    }
}
