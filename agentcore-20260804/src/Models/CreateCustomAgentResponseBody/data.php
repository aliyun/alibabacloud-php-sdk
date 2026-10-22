<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateCustomAgentResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateCustomAgentResponseBody\data\agenticFsMounts;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateCustomAgentResponseBody\data\artifact;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateCustomAgentResponseBody\data\codePackageInfo;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateCustomAgentResponseBody\data\environment;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateCustomAgentResponseBody\data\healthCheck;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateCustomAgentResponseBody\data\imageCachePreparation;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateCustomAgentResponseBody\data\latestExecutionError;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateCustomAgentResponseBody\data\logging;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateCustomAgentResponseBody\data\network;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateCustomAgentResponseBody\data\observability;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateCustomAgentResponseBody\data\ossMounts;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateCustomAgentResponseBody\data\protocol;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateCustomAgentResponseBody\data\runtime;

class data extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var agenticFsMounts[]
     */
    public $agenticFsMounts;

    /**
     * @var artifact
     */
    public $artifact;

    /**
     * @var codePackageInfo
     */
    public $codePackageInfo;

    /**
     * @var string
     */
    public $createMode;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $deployType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $effectiveSpecVersion;

    /**
     * @var environment
     */
    public $environment;

    /**
     * @var healthCheck
     */
    public $healthCheck;

    /**
     * @var string
     */
    public $imageCacheId;

    /**
     * @var imageCachePreparation
     */
    public $imageCachePreparation;

    /**
     * @var latestExecutionError
     */
    public $latestExecutionError;

    /**
     * @var int
     */
    public $latestSpecVersion;

    /**
     * @var string
     */
    public $latestVersionStatus;

    /**
     * @var logging
     */
    public $logging;

    /**
     * @var string
     */
    public $name;

    /**
     * @var network
     */
    public $network;

    /**
     * @var observability
     */
    public $observability;

    /**
     * @var ossMounts[]
     */
    public $ossMounts;

    /**
     * @var protocol[]
     */
    public $protocol;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $roleArn;

    /**
     * @var runtime
     */
    public $runtime;

    /**
     * @var int[]
     */
    public $sandboxPhaseCounts;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var bool
     */
    public $useImageCache;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'agentId' => 'agentId',
        'agenticFsMounts' => 'agenticFsMounts',
        'artifact' => 'artifact',
        'codePackageInfo' => 'codePackageInfo',
        'createMode' => 'createMode',
        'createdAt' => 'createdAt',
        'deployType' => 'deployType',
        'description' => 'description',
        'effectiveSpecVersion' => 'effectiveSpecVersion',
        'environment' => 'environment',
        'healthCheck' => 'healthCheck',
        'imageCacheId' => 'imageCacheId',
        'imageCachePreparation' => 'imageCachePreparation',
        'latestExecutionError' => 'latestExecutionError',
        'latestSpecVersion' => 'latestSpecVersion',
        'latestVersionStatus' => 'latestVersionStatus',
        'logging' => 'logging',
        'name' => 'name',
        'network' => 'network',
        'observability' => 'observability',
        'ossMounts' => 'ossMounts',
        'protocol' => 'protocol',
        'regionId' => 'regionId',
        'roleArn' => 'roleArn',
        'runtime' => 'runtime',
        'sandboxPhaseCounts' => 'sandboxPhaseCounts',
        'status' => 'status',
        'updatedAt' => 'updatedAt',
        'useImageCache' => 'useImageCache',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->agenticFsMounts)) {
            Model::validateArray($this->agenticFsMounts);
        }
        if (null !== $this->artifact) {
            $this->artifact->validate();
        }
        if (null !== $this->codePackageInfo) {
            $this->codePackageInfo->validate();
        }
        if (null !== $this->environment) {
            $this->environment->validate();
        }
        if (null !== $this->healthCheck) {
            $this->healthCheck->validate();
        }
        if (null !== $this->imageCachePreparation) {
            $this->imageCachePreparation->validate();
        }
        if (null !== $this->latestExecutionError) {
            $this->latestExecutionError->validate();
        }
        if (null !== $this->logging) {
            $this->logging->validate();
        }
        if (null !== $this->network) {
            $this->network->validate();
        }
        if (null !== $this->observability) {
            $this->observability->validate();
        }
        if (\is_array($this->ossMounts)) {
            Model::validateArray($this->ossMounts);
        }
        if (\is_array($this->protocol)) {
            Model::validateArray($this->protocol);
        }
        if (null !== $this->runtime) {
            $this->runtime->validate();
        }
        if (\is_array($this->sandboxPhaseCounts)) {
            Model::validateArray($this->sandboxPhaseCounts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['agentId'] = $this->agentId;
        }

        if (null !== $this->agenticFsMounts) {
            if (\is_array($this->agenticFsMounts)) {
                $res['agenticFsMounts'] = [];
                $n1 = 0;
                foreach ($this->agenticFsMounts as $item1) {
                    $res['agenticFsMounts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->artifact) {
            $res['artifact'] = null !== $this->artifact ? $this->artifact->toArray($noStream) : $this->artifact;
        }

        if (null !== $this->codePackageInfo) {
            $res['codePackageInfo'] = null !== $this->codePackageInfo ? $this->codePackageInfo->toArray($noStream) : $this->codePackageInfo;
        }

        if (null !== $this->createMode) {
            $res['createMode'] = $this->createMode;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->deployType) {
            $res['deployType'] = $this->deployType;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->effectiveSpecVersion) {
            $res['effectiveSpecVersion'] = $this->effectiveSpecVersion;
        }

        if (null !== $this->environment) {
            $res['environment'] = null !== $this->environment ? $this->environment->toArray($noStream) : $this->environment;
        }

        if (null !== $this->healthCheck) {
            $res['healthCheck'] = null !== $this->healthCheck ? $this->healthCheck->toArray($noStream) : $this->healthCheck;
        }

        if (null !== $this->imageCacheId) {
            $res['imageCacheId'] = $this->imageCacheId;
        }

        if (null !== $this->imageCachePreparation) {
            $res['imageCachePreparation'] = null !== $this->imageCachePreparation ? $this->imageCachePreparation->toArray($noStream) : $this->imageCachePreparation;
        }

        if (null !== $this->latestExecutionError) {
            $res['latestExecutionError'] = null !== $this->latestExecutionError ? $this->latestExecutionError->toArray($noStream) : $this->latestExecutionError;
        }

        if (null !== $this->latestSpecVersion) {
            $res['latestSpecVersion'] = $this->latestSpecVersion;
        }

        if (null !== $this->latestVersionStatus) {
            $res['latestVersionStatus'] = $this->latestVersionStatus;
        }

        if (null !== $this->logging) {
            $res['logging'] = null !== $this->logging ? $this->logging->toArray($noStream) : $this->logging;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->network) {
            $res['network'] = null !== $this->network ? $this->network->toArray($noStream) : $this->network;
        }

        if (null !== $this->observability) {
            $res['observability'] = null !== $this->observability ? $this->observability->toArray($noStream) : $this->observability;
        }

        if (null !== $this->ossMounts) {
            if (\is_array($this->ossMounts)) {
                $res['ossMounts'] = [];
                $n1 = 0;
                foreach ($this->ossMounts as $item1) {
                    $res['ossMounts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->protocol) {
            if (\is_array($this->protocol)) {
                $res['protocol'] = [];
                $n1 = 0;
                foreach ($this->protocol as $item1) {
                    $res['protocol'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->roleArn) {
            $res['roleArn'] = $this->roleArn;
        }

        if (null !== $this->runtime) {
            $res['runtime'] = null !== $this->runtime ? $this->runtime->toArray($noStream) : $this->runtime;
        }

        if (null !== $this->sandboxPhaseCounts) {
            if (\is_array($this->sandboxPhaseCounts)) {
                $res['sandboxPhaseCounts'] = [];
                foreach ($this->sandboxPhaseCounts as $key1 => $value1) {
                    $res['sandboxPhaseCounts'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
        }

        if (null !== $this->useImageCache) {
            $res['useImageCache'] = $this->useImageCache;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['agentId'])) {
            $model->agentId = $map['agentId'];
        }

        if (isset($map['agenticFsMounts'])) {
            if (!empty($map['agenticFsMounts'])) {
                $model->agenticFsMounts = [];
                $n1 = 0;
                foreach ($map['agenticFsMounts'] as $item1) {
                    $model->agenticFsMounts[$n1] = agenticFsMounts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['artifact'])) {
            $model->artifact = artifact::fromMap($map['artifact']);
        }

        if (isset($map['codePackageInfo'])) {
            $model->codePackageInfo = codePackageInfo::fromMap($map['codePackageInfo']);
        }

        if (isset($map['createMode'])) {
            $model->createMode = $map['createMode'];
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['deployType'])) {
            $model->deployType = $map['deployType'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['effectiveSpecVersion'])) {
            $model->effectiveSpecVersion = $map['effectiveSpecVersion'];
        }

        if (isset($map['environment'])) {
            $model->environment = environment::fromMap($map['environment']);
        }

        if (isset($map['healthCheck'])) {
            $model->healthCheck = healthCheck::fromMap($map['healthCheck']);
        }

        if (isset($map['imageCacheId'])) {
            $model->imageCacheId = $map['imageCacheId'];
        }

        if (isset($map['imageCachePreparation'])) {
            $model->imageCachePreparation = imageCachePreparation::fromMap($map['imageCachePreparation']);
        }

        if (isset($map['latestExecutionError'])) {
            $model->latestExecutionError = latestExecutionError::fromMap($map['latestExecutionError']);
        }

        if (isset($map['latestSpecVersion'])) {
            $model->latestSpecVersion = $map['latestSpecVersion'];
        }

        if (isset($map['latestVersionStatus'])) {
            $model->latestVersionStatus = $map['latestVersionStatus'];
        }

        if (isset($map['logging'])) {
            $model->logging = logging::fromMap($map['logging']);
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['network'])) {
            $model->network = network::fromMap($map['network']);
        }

        if (isset($map['observability'])) {
            $model->observability = observability::fromMap($map['observability']);
        }

        if (isset($map['ossMounts'])) {
            if (!empty($map['ossMounts'])) {
                $model->ossMounts = [];
                $n1 = 0;
                foreach ($map['ossMounts'] as $item1) {
                    $model->ossMounts[$n1] = ossMounts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['protocol'])) {
            if (!empty($map['protocol'])) {
                $model->protocol = [];
                $n1 = 0;
                foreach ($map['protocol'] as $item1) {
                    $model->protocol[$n1] = protocol::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['roleArn'])) {
            $model->roleArn = $map['roleArn'];
        }

        if (isset($map['runtime'])) {
            $model->runtime = runtime::fromMap($map['runtime']);
        }

        if (isset($map['sandboxPhaseCounts'])) {
            if (!empty($map['sandboxPhaseCounts'])) {
                $model->sandboxPhaseCounts = [];
                foreach ($map['sandboxPhaseCounts'] as $key1 => $value1) {
                    $model->sandboxPhaseCounts[$key1] = $value1;
                }
            }
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        if (isset($map['useImageCache'])) {
            $model->useImageCache = $map['useImageCache'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
