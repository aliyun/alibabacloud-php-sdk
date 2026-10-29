<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateCustomAgentRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateCustomAgentRequest\body\agenticFsMounts;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateCustomAgentRequest\body\artifact;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateCustomAgentRequest\body\customImage;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateCustomAgentRequest\body\environment;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateCustomAgentRequest\body\healthCheck;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateCustomAgentRequest\body\logging;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateCustomAgentRequest\body\network;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateCustomAgentRequest\body\observability;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateCustomAgentRequest\body\ossMounts;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateCustomAgentRequest\body\protocol;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateCustomAgentRequest\body\runtime;

class body extends Model
{
    /**
     * @var agenticFsMounts[]
     */
    public $agenticFsMounts;

    /**
     * @var artifact
     */
    public $artifact;

    /**
     * @var customImage
     */
    public $customImage;

    /**
     * @var string
     */
    public $description;

    /**
     * @var environment
     */
    public $environment;

    /**
     * @var healthCheck
     */
    public $healthCheck;

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
    public $roleArn;

    /**
     * @var runtime
     */
    public $runtime;

    /**
     * @var bool
     */
    public $useImageCache;
    protected $_name = [
        'agenticFsMounts' => 'agenticFsMounts',
        'artifact' => 'artifact',
        'customImage' => 'customImage',
        'description' => 'description',
        'environment' => 'environment',
        'healthCheck' => 'healthCheck',
        'logging' => 'logging',
        'name' => 'name',
        'network' => 'network',
        'observability' => 'observability',
        'ossMounts' => 'ossMounts',
        'protocol' => 'protocol',
        'roleArn' => 'roleArn',
        'runtime' => 'runtime',
        'useImageCache' => 'useImageCache',
    ];

    public function validate()
    {
        if (\is_array($this->agenticFsMounts)) {
            Model::validateArray($this->agenticFsMounts);
        }
        if (null !== $this->artifact) {
            $this->artifact->validate();
        }
        if (null !== $this->customImage) {
            $this->customImage->validate();
        }
        if (null !== $this->environment) {
            $this->environment->validate();
        }
        if (null !== $this->healthCheck) {
            $this->healthCheck->validate();
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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->customImage) {
            $res['customImage'] = null !== $this->customImage ? $this->customImage->toArray($noStream) : $this->customImage;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->environment) {
            $res['environment'] = null !== $this->environment ? $this->environment->toArray($noStream) : $this->environment;
        }

        if (null !== $this->healthCheck) {
            $res['healthCheck'] = null !== $this->healthCheck ? $this->healthCheck->toArray($noStream) : $this->healthCheck;
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

        if (null !== $this->roleArn) {
            $res['roleArn'] = $this->roleArn;
        }

        if (null !== $this->runtime) {
            $res['runtime'] = null !== $this->runtime ? $this->runtime->toArray($noStream) : $this->runtime;
        }

        if (null !== $this->useImageCache) {
            $res['useImageCache'] = $this->useImageCache;
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

        if (isset($map['customImage'])) {
            $model->customImage = customImage::fromMap($map['customImage']);
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['environment'])) {
            $model->environment = environment::fromMap($map['environment']);
        }

        if (isset($map['healthCheck'])) {
            $model->healthCheck = healthCheck::fromMap($map['healthCheck']);
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

        if (isset($map['roleArn'])) {
            $model->roleArn = $map['roleArn'];
        }

        if (isset($map['runtime'])) {
            $model->runtime = runtime::fromMap($map['runtime']);
        }

        if (isset($map['useImageCache'])) {
            $model->useImageCache = $map['useImageCache'];
        }

        return $model;
    }
}
