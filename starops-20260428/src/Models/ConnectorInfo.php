<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\STAROps\V20260428\Models;

use AlibabaCloud\Dara\Model;

class ConnectorInfo extends Model
{
    /**
     * @var ConnectorAuthentication
     */
    public $authentication;

    /**
     * @var mixed[][]
     */
    public $capabilityGrants;

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
    public $createTime;

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
     * @var string
     */
    public $etag;

    /**
     * @var string
     */
    public $name;

    /**
     * @var mixed[]
     */
    public $policy;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var int
     */
    public $revision;

    /**
     * @var ConnectorRuntime
     */
    public $runtime;

    /**
     * @var mixed[]
     */
    public $status;

    /**
     * @var mixed[]
     */
    public $target;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'authentication' => 'authentication',
        'capabilityGrants' => 'capabilityGrants',
        'configuration' => 'configuration',
        'connectorName' => 'connectorName',
        'createTime' => 'createTime',
        'description' => 'description',
        'displayName' => 'displayName',
        'enabled' => 'enabled',
        'etag' => 'etag',
        'name' => 'name',
        'policy' => 'policy',
        'provider' => 'provider',
        'revision' => 'revision',
        'runtime' => 'runtime',
        'status' => 'status',
        'target' => 'target',
        'updateTime' => 'updateTime',
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
        if (\is_array($this->status)) {
            Model::validateArray($this->status);
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

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
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

        if (null !== $this->etag) {
            $res['etag'] = $this->etag;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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

        if (null !== $this->revision) {
            $res['revision'] = $this->revision;
        }

        if (null !== $this->runtime) {
            $res['runtime'] = null !== $this->runtime ? $this->runtime->toArray($noStream) : $this->runtime;
        }

        if (null !== $this->status) {
            if (\is_array($this->status)) {
                $res['status'] = [];
                foreach ($this->status as $key1 => $value1) {
                    $res['status'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->target) {
            if (\is_array($this->target)) {
                $res['target'] = [];
                foreach ($this->target as $key1 => $value1) {
                    $res['target'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
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
            $model->authentication = ConnectorAuthentication::fromMap($map['authentication']);
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

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
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

        if (isset($map['etag'])) {
            $model->etag = $map['etag'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
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

        if (isset($map['revision'])) {
            $model->revision = $map['revision'];
        }

        if (isset($map['runtime'])) {
            $model->runtime = ConnectorRuntime::fromMap($map['runtime']);
        }

        if (isset($map['status'])) {
            if (!empty($map['status'])) {
                $model->status = [];
                foreach ($map['status'] as $key1 => $value1) {
                    $model->status[$key1] = $value1;
                }
            }
        }

        if (isset($map['target'])) {
            if (!empty($map['target'])) {
                $model->target = [];
                foreach ($map['target'] as $key1 => $value1) {
                    $model->target[$key1] = $value1;
                }
            }
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
