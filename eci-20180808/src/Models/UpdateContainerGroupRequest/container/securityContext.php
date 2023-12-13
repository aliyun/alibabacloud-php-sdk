<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\container;

use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\container\securityContext\capability;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->capability) {
            $res['Capability'] = null !== $this->capability ? $this->capability->toMap() : null;
        }
        if (null !== $this->readOnlyRootFilesystem) {
            $res['ReadOnlyRootFilesystem'] = $this->readOnlyRootFilesystem;
        }
        if (null !== $this->runAsUser) {
            $res['RunAsUser'] = $this->runAsUser;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityContext
     */
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
