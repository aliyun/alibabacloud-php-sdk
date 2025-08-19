<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\UpgradeClusterRequest\rollingPolicy;

class UpgradeClusterRequest extends Model
{
    /**
     * @var string
     */
    public $componentName;

    /**
     * @var bool
     */
    public $masterOnly;

    /**
     * @var string
     */
    public $nextVersion;

    /**
     * @var rollingPolicy
     */
    public $rollingPolicy;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'componentName' => 'component_name',
        'masterOnly' => 'master_only',
        'nextVersion' => 'next_version',
        'rollingPolicy' => 'rolling_policy',
        'version' => 'version',
    ];

    public function validate()
    {
        if (null !== $this->rollingPolicy) {
            $this->rollingPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentName) {
            $res['component_name'] = $this->componentName;
        }

        if (null !== $this->masterOnly) {
            $res['master_only'] = $this->masterOnly;
        }

        if (null !== $this->nextVersion) {
            $res['next_version'] = $this->nextVersion;
        }

        if (null !== $this->rollingPolicy) {
            $res['rolling_policy'] = null !== $this->rollingPolicy ? $this->rollingPolicy->toArray($noStream) : $this->rollingPolicy;
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

        if (isset($map['master_only'])) {
            $model->masterOnly = $map['master_only'];
        }

        if (isset($map['next_version'])) {
            $model->nextVersion = $map['next_version'];
        }

        if (isset($map['rolling_policy'])) {
            $model->rollingPolicy = rollingPolicy::fromMap($map['rolling_policy']);
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
