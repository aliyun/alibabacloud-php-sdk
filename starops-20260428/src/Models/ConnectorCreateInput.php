<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\STAROps\V20260428\Models;

use AlibabaCloud\Dara\Model;

class ConnectorCreateInput extends Model
{
    /**
     * @var ConnectorAuthenticationInput
     */
    public $authentication;

    /**
     * @var mixed[][]
     */
    public $capabilityGrants;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var mixed[]
     */
    public $configuration;

    /**
     * @var string
     */
    public $connectorName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var mixed[]
     */
    public $policy;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var ConnectorRuntime
     */
    public $runtime;

    /**
     * @var mixed[]
     */
    public $target;
    protected $_name = [
        'authentication' => 'authentication',
        'capabilityGrants' => 'capabilityGrants',
        'clientToken' => 'clientToken',
        'configuration' => 'configuration',
        'connectorName' => 'connectorName',
        'description' => 'description',
        'displayName' => 'displayName',
        'enabled' => 'enabled',
        'policy' => 'policy',
        'provider' => 'provider',
        'runtime' => 'runtime',
        'target' => 'target',
    ];

    public function validate()
    {
        if (null !== $this->authentication) {
            $this->authentication->validate();
        }
        if (\is_array($this->capabilityGrants)) {
            Model::validateArray($this->capabilityGrants);
        }
        if (\is_array($this->configuration)) {
            Model::validateArray($this->configuration);
        }
        if (\is_array($this->policy)) {
            Model::validateArray($this->policy);
        }
        if (null !== $this->runtime) {
            $this->runtime->validate();
        }
        if (\is_array($this->target)) {
            Model::validateArray($this->target);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authentication) {
            $res['authentication'] = null !== $this->authentication ? $this->authentication->toArray($noStream) : $this->authentication;
        }

        if (null !== $this->capabilityGrants) {
            if (\is_array($this->capabilityGrants)) {
                $res['capabilityGrants'] = [];
                $n1 = 0;
                foreach ($this->capabilityGrants as $item1) {
                    if (\is_array($item1)) {
                        $res['capabilityGrants'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['capabilityGrants'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        if (null !== $this->configuration) {
            if (\is_array($this->configuration)) {
                $res['configuration'] = [];
                foreach ($this->configuration as $key1 => $value1) {
                    $res['configuration'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->connectorName) {
            $res['connectorName'] = $this->connectorName;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->policy) {
            if (\is_array($this->policy)) {
                $res['policy'] = [];
                foreach ($this->policy as $key1 => $value1) {
                    $res['policy'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->provider) {
            $res['provider'] = $this->provider;
        }

        if (null !== $this->runtime) {
            $res['runtime'] = null !== $this->runtime ? $this->runtime->toArray($noStream) : $this->runtime;
        }

        if (null !== $this->target) {
            if (\is_array($this->target)) {
                $res['target'] = [];
                foreach ($this->target as $key1 => $value1) {
                    $res['target'][$key1] = $value1;
                }
            }
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
        if (isset($map['authentication'])) {
            $model->authentication = ConnectorAuthenticationInput::fromMap($map['authentication']);
        }

        if (isset($map['capabilityGrants'])) {
            if (!empty($map['capabilityGrants'])) {
                $model->capabilityGrants = [];
                $n1 = 0;
                foreach ($map['capabilityGrants'] as $item1) {
                    if (!empty($item1)) {
                        $model->capabilityGrants[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->capabilityGrants[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        if (isset($map['configuration'])) {
            if (!empty($map['configuration'])) {
                $model->configuration = [];
                foreach ($map['configuration'] as $key1 => $value1) {
                    $model->configuration[$key1] = $value1;
                }
            }
        }

        if (isset($map['connectorName'])) {
            $model->connectorName = $map['connectorName'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['policy'])) {
            if (!empty($map['policy'])) {
                $model->policy = [];
                foreach ($map['policy'] as $key1 => $value1) {
                    $model->policy[$key1] = $value1;
                }
            }
        }

        if (isset($map['provider'])) {
            $model->provider = $map['provider'];
        }

        if (isset($map['runtime'])) {
            $model->runtime = ConnectorRuntime::fromMap($map['runtime']);
        }

        if (isset($map['target'])) {
            if (!empty($map['target'])) {
                $model->target = [];
                foreach ($map['target'] as $key1 => $value1) {
                    $model->target[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
