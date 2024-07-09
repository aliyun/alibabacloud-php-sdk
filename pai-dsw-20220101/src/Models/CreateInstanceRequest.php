<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceRequest\affinity;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceRequest\cloudDisks;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceRequest\datasets;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceRequest\labels;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceRequest\requestedResource;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceRequest\userVpc;
use AlibabaCloud\Tea\Model;

class CreateInstanceRequest extends Model
{
    /**
     * @example PRIVATE
     *
     * @var string
     */
    public $accessibility;

    /**
     * @var affinity
     */
    public $affinity;

    /**
     * @example []
     *
     * @var cloudDisks[]
     */
    public $cloudDisks;

    /**
     * @var datasets[]
     */
    public $datasets;

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
     * @example {userName: "Chris"}
     *
     * @var string[]
     */
    public $environmentVariables;

    /**
     * @var string
     */
    public $imageAuth;

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
     * @example {\\"foo\\": \\"bar\\"}
     *
     * @var labels[]
     */
    public $labels;

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
     * @example dsw-123456789
     *
     * @var string
     */
    public $resourceId;

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
     * @example 40823
     *
     * @var string
     */
    public $workspaceId;

    /**
     * @example d-123456789
     *
     * @var string
     */
    public $workspaceSource;
    protected $_name = [
        'accessibility'        => 'Accessibility',
        'affinity'             => 'Affinity',
        'cloudDisks'           => 'CloudDisks',
        'datasets'             => 'Datasets',
        'driver'               => 'Driver',
        'ecsSpec'              => 'EcsSpec',
        'environmentVariables' => 'EnvironmentVariables',
        'imageAuth'            => 'ImageAuth',
        'imageId'              => 'ImageId',
        'imageUrl'             => 'ImageUrl',
        'instanceName'         => 'InstanceName',
        'labels'               => 'Labels',
        'priority'             => 'Priority',
        'requestedResource'    => 'RequestedResource',
        'resourceId'           => 'ResourceId',
        'userId'               => 'UserId',
        'userVpc'              => 'UserVpc',
        'workspaceId'          => 'WorkspaceId',
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
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->requestedResource) {
            $res['RequestedResource'] = null !== $this->requestedResource ? $this->requestedResource->toMap() : null;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
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
                $n                 = 0;
                foreach ($map['CloudDisks'] as $item) {
                    $model->cloudDisks[$n++] = null !== $item ? cloudDisks::fromMap($item) : $item;
                }
            }
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
        if (isset($map['Driver'])) {
            $model->driver = $map['Driver'];
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
                $n             = 0;
                foreach ($map['Labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? labels::fromMap($item) : $item;
                }
            }
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
