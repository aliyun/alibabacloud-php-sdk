<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\UpgradeClusterAddonsRequest;

use AlibabaCloud\Dara\Model;

class body extends Model
{
    /**
     * @var string
     */
    public $componentName;

    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $nextVersion;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'componentName' => 'component_name',
        'config' => 'config',
        'nextVersion' => 'next_version',
        'policy' => 'policy',
        'version' => 'version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentName) {
            $res['component_name'] = $this->componentName;
        }

        if (null !== $this->config) {
            $res['config'] = $this->config;
        }

        if (null !== $this->nextVersion) {
            $res['next_version'] = $this->nextVersion;
        }

        if (null !== $this->policy) {
            $res['policy'] = $this->policy;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['component_name'])) {
            $model->componentName = $map['component_name'];
        }

        if (isset($map['config'])) {
            $model->config = $map['config'];
        }

        if (isset($map['next_version'])) {
            $model->nextVersion = $map['next_version'];
        }

        if (isset($map['policy'])) {
            $model->policy = $map['policy'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
