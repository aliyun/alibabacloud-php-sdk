<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\ModifyEciScalingConfigurationRequest\initContainers;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyEciScalingConfigurationRequest\initContainers\securityContext\capability;

class securityContext extends Model
{
    /**
     * @var capability
     */
    public $capability;
    /**
     * @var bool
     */
    public $readOnlyRootFilesystem;
    /**
     * @var int
     */
    public $runAsUser;
    protected $_name = [
        'capability'             => 'Capability',
        'readOnlyRootFilesystem' => 'ReadOnlyRootFilesystem',
        'runAsUser'              => 'RunAsUser',
    ];

    public function validate()
    {
        if (null !== $this->capability) {
            $this->capability->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capability) {
            $res['Capability'] = null !== $this->capability ? $this->capability->toArray($noStream) : $this->capability;
        }

        if (null !== $this->readOnlyRootFilesystem) {
            $res['ReadOnlyRootFilesystem'] = $this->readOnlyRootFilesystem;
        }

        if (null !== $this->runAsUser) {
            $res['RunAsUser'] = $this->runAsUser;
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
        if (isset($map['Capability'])) {
            $model->capability = capability::fromMap($map['Capability']);
        }

        if (isset($map['ReadOnlyRootFilesystem'])) {
            $model->readOnlyRootFilesystem = $map['ReadOnlyRootFilesystem'];
        }

        if (isset($map['RunAsUser'])) {
            $model->runAsUser = $map['RunAsUser'];
        }

        return $model;
    }
}
