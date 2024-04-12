<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody\containerGroups\containers;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody\containerGroups\containers\securityContext\capability;
use AlibabaCloud\Tea\Model;

class securityContext extends Model
{
    /**
     * @description The permissions specific to the processes in the container.
     *
     * @var capability
     */
    public $capability;

    /**
     * @description Indicates whether permissions on the root file system are read-only.
     *
     * @example true
     *
     * @var bool
     */
    public $readOnlyRootFilesystem;

    /**
     * @description The user ID (UID) that is used to run the container.
     *
     * @example 1000
     *
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
