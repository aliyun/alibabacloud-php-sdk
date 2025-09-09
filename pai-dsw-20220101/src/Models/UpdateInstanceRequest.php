<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\UpdateInstanceRequest\affinity;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\UpdateInstanceRequest\cloudDisks;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\UpdateInstanceRequest\datasets;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\UpdateInstanceRequest\requestedResource;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\UpdateInstanceRequest\userCommand;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\UpdateInstanceRequest\userVpc;

class UpdateInstanceRequest extends Model
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
     * @var bool
     */
    public $disassociateCredential;

    /**
     * @var bool
     */
    public $disassociateDatasets;

    /**
     * @var bool
     */
    public $disassociateDriver;

    /**
     * @var bool
     */
    public $disassociateEnvironmentVariables;

    /**
     * @var bool
     */
    public $disassociateForwardInfos;

    /**
     * @var bool
     */
    public $disassociateUserCommand;

    /**
     * @var bool
     */
    public $disassociateVpc;

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
     * @var mixed[]
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
     * @var string
     */
    public $oversoldType;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var requestedResource
     */
    public $requestedResource;

    /**
     * @var userCommand
     */
    public $userCommand;

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
    public $workspaceSource;
    protected $_name = [
        'accessibility' => 'Accessibility',
        'affinity' => 'Affinity',
        'cloudDisks' => 'CloudDisks',
        'credentialConfig' => 'CredentialConfig',
        'datasets' => 'Datasets',
        'disassociateCredential' => 'DisassociateCredential',
        'disassociateDatasets' => 'DisassociateDatasets',
        'disassociateDriver' => 'DisassociateDriver',
        'disassociateEnvironmentVariables' => 'DisassociateEnvironmentVariables',
        'disassociateForwardInfos' => 'DisassociateForwardInfos',
        'disassociateUserCommand' => 'DisassociateUserCommand',
        'disassociateVpc' => 'DisassociateVpc',
        'driver' => 'Driver',
        'dynamicMount' => 'DynamicMount',
        'ecsSpec' => 'EcsSpec',
        'environmentVariables' => 'EnvironmentVariables',
        'imageAuth' => 'ImageAuth',
        'imageId' => 'ImageId',
        'imageUrl' => 'ImageUrl',
        'instanceName' => 'InstanceName',
        'oversoldType' => 'OversoldType',
        'priority' => 'Priority',
        'requestedResource' => 'RequestedResource',
        'userCommand' => 'UserCommand',
        'userId' => 'UserId',
        'userVpc' => 'UserVpc',
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
        if (null !== $this->requestedResource) {
            $this->requestedResource->validate();
        }
        if (null !== $this->userCommand) {
            $this->userCommand->validate();
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
                    $res['CloudDisks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
                    $res['Datasets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->disassociateCredential) {
            $res['DisassociateCredential'] = $this->disassociateCredential;
        }

        if (null !== $this->disassociateDatasets) {
            $res['DisassociateDatasets'] = $this->disassociateDatasets;
        }

        if (null !== $this->disassociateDriver) {
            $res['DisassociateDriver'] = $this->disassociateDriver;
        }

        if (null !== $this->disassociateEnvironmentVariables) {
            $res['DisassociateEnvironmentVariables'] = $this->disassociateEnvironmentVariables;
        }

        if (null !== $this->disassociateForwardInfos) {
            $res['DisassociateForwardInfos'] = $this->disassociateForwardInfos;
        }

        if (null !== $this->disassociateUserCommand) {
            $res['DisassociateUserCommand'] = $this->disassociateUserCommand;
        }

        if (null !== $this->disassociateVpc) {
            $res['DisassociateVpc'] = $this->disassociateVpc;
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

        if (null !== $this->oversoldType) {
            $res['OversoldType'] = $this->oversoldType;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->requestedResource) {
            $res['RequestedResource'] = null !== $this->requestedResource ? $this->requestedResource->toArray($noStream) : $this->requestedResource;
        }

        if (null !== $this->userCommand) {
            $res['UserCommand'] = null !== $this->userCommand ? $this->userCommand->toArray($noStream) : $this->userCommand;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->userVpc) {
            $res['UserVpc'] = null !== $this->userVpc ? $this->userVpc->toArray($noStream) : $this->userVpc;
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
                    $model->cloudDisks[$n1] = cloudDisks::fromMap($item1);
                    ++$n1;
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
                    $model->datasets[$n1] = datasets::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DisassociateCredential'])) {
            $model->disassociateCredential = $map['DisassociateCredential'];
        }

        if (isset($map['DisassociateDatasets'])) {
            $model->disassociateDatasets = $map['DisassociateDatasets'];
        }

        if (isset($map['DisassociateDriver'])) {
            $model->disassociateDriver = $map['DisassociateDriver'];
        }

        if (isset($map['DisassociateEnvironmentVariables'])) {
            $model->disassociateEnvironmentVariables = $map['DisassociateEnvironmentVariables'];
        }

        if (isset($map['DisassociateForwardInfos'])) {
            $model->disassociateForwardInfos = $map['DisassociateForwardInfos'];
        }

        if (isset($map['DisassociateUserCommand'])) {
            $model->disassociateUserCommand = $map['DisassociateUserCommand'];
        }

        if (isset($map['DisassociateVpc'])) {
            $model->disassociateVpc = $map['DisassociateVpc'];
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

        if (isset($map['OversoldType'])) {
            $model->oversoldType = $map['OversoldType'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['RequestedResource'])) {
            $model->requestedResource = requestedResource::fromMap($map['RequestedResource']);
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

        if (isset($map['WorkspaceSource'])) {
            $model->workspaceSource = $map['WorkspaceSource'];
        }

        return $model;
    }
}
