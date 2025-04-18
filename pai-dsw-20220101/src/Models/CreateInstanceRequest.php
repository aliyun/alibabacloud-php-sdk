<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceRequest\affinity;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceRequest\cloudDisks;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceRequest\datasets;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceRequest\labels;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceRequest\requestedResource;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceRequest\tag;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceRequest\userVpc;

class CreateInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $accessibility;

    /**
     * @var affinity
     */
    public $affinity;

    /**
     * @var cloudDisks[]
     */
    public $cloudDisks;

    /**
     * @var CredentialConfig
     */
    public $credentialConfig;

    /**
     * @var datasets[]
     */
    public $datasets;

    /**
     * @var string
     */
    public $driver;

    /**
     * @var DynamicMount
     */
    public $dynamicMount;

    /**
     * @var string
     */
    public $ecsSpec;

    /**
     * @var string[]
     */
    public $environmentVariables;

    /**
     * @var string
     */
    public $imageAuth;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var labels[]
     */
    public $labels;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var requestedResource
     */
    public $requestedResource;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var userVpc
     */
    public $userVpc;

    /**
     * @var string
     */
    public $workspaceId;

    /**
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
        'priority' => 'Priority',
        'requestedResource' => 'RequestedResource',
        'resourceId' => 'ResourceId',
        'tag' => 'Tag',
        'userId' => 'UserId',
        'userVpc' => 'UserVpc',
        'workspaceId' => 'WorkspaceId',
        'workspaceSource' => 'WorkspaceSource',
    ];

    public function validate()
    {
        if (null !== $this->affinity) {
            $this->affinity->validate();
        }
        if (\is_array($this->cloudDisks)) {
            Model::validateArray($this->cloudDisks);
        }
        if (null !== $this->credentialConfig) {
            $this->credentialConfig->validate();
        }
        if (\is_array($this->datasets)) {
            Model::validateArray($this->datasets);
        }
        if (null !== $this->dynamicMount) {
            $this->dynamicMount->validate();
        }
        if (\is_array($this->environmentVariables)) {
            Model::validateArray($this->environmentVariables);
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (null !== $this->requestedResource) {
            $this->requestedResource->validate();
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        if (null !== $this->userVpc) {
            $this->userVpc->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }

        if (null !== $this->affinity) {
            $res['Affinity'] = null !== $this->affinity ? $this->affinity->toArray($noStream) : $this->affinity;
        }

        if (null !== $this->cloudDisks) {
            if (\is_array($this->cloudDisks)) {
                $res['CloudDisks'] = [];
                $n1 = 0;
                foreach ($this->cloudDisks as $item1) {
                    $res['CloudDisks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->credentialConfig) {
            $res['CredentialConfig'] = null !== $this->credentialConfig ? $this->credentialConfig->toArray($noStream) : $this->credentialConfig;
        }

        if (null !== $this->datasets) {
            if (\is_array($this->datasets)) {
                $res['Datasets'] = [];
                $n1 = 0;
                foreach ($this->datasets as $item1) {
                    $res['Datasets'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->driver) {
            $res['Driver'] = $this->driver;
        }

        if (null !== $this->dynamicMount) {
            $res['DynamicMount'] = null !== $this->dynamicMount ? $this->dynamicMount->toArray($noStream) : $this->dynamicMount;
        }

        if (null !== $this->ecsSpec) {
            $res['EcsSpec'] = $this->ecsSpec;
        }

        if (null !== $this->environmentVariables) {
            if (\is_array($this->environmentVariables)) {
                $res['EnvironmentVariables'] = [];
                foreach ($this->environmentVariables as $key1 => $value1) {
                    $res['EnvironmentVariables'][$key1] = $value1;
                }
            }
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
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                $n1 = 0;
                foreach ($this->labels as $item1) {
                    $res['Labels'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->requestedResource) {
            $res['RequestedResource'] = null !== $this->requestedResource ? $this->requestedResource->toArray($noStream) : $this->requestedResource;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->userVpc) {
            $res['UserVpc'] = null !== $this->userVpc ? $this->userVpc->toArray($noStream) : $this->userVpc;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        if (null !== $this->workspaceSource) {
            $res['WorkspaceSource'] = $this->workspaceSource;
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
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }

        if (isset($map['Affinity'])) {
            $model->affinity = affinity::fromMap($map['Affinity']);
        }

        if (isset($map['CloudDisks'])) {
            if (!empty($map['CloudDisks'])) {
                $model->cloudDisks = [];
                $n1 = 0;
                foreach ($map['CloudDisks'] as $item1) {
                    $model->cloudDisks[$n1++] = cloudDisks::fromMap($item1);
                }
            }
        }

        if (isset($map['CredentialConfig'])) {
            $model->credentialConfig = CredentialConfig::fromMap($map['CredentialConfig']);
        }

        if (isset($map['Datasets'])) {
            if (!empty($map['Datasets'])) {
                $model->datasets = [];
                $n1 = 0;
                foreach ($map['Datasets'] as $item1) {
                    $model->datasets[$n1++] = datasets::fromMap($item1);
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
            if (!empty($map['EnvironmentVariables'])) {
                $model->environmentVariables = [];
                foreach ($map['EnvironmentVariables'] as $key1 => $value1) {
                    $model->environmentVariables[$key1] = $value1;
                }
            }
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
                $n1 = 0;
                foreach ($map['Labels'] as $item1) {
                    $model->labels[$n1++] = labels::fromMap($item1);
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

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
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
