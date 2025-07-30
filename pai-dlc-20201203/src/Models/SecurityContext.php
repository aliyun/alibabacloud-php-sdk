<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class SecurityContext extends Model
{
    /**
     * @var SecurityContextCapabilities
     */
    public $capabilities;

    /**
     * @var bool
     */
    public $privileged;

    /**
     * @example 1000
     *
     * @var int
     */
    public $runAsGroup;

    /**
     * @example 1000
     *
     * @var int
     */
    public $runAsUser;

    /**
     * @var SeccompProfile
     */
    public $seccompProfile;
    protected $_name = [
        'capabilities' => 'Capabilities',
        'privileged' => 'Privileged',
        'runAsGroup' => 'RunAsGroup',
        'runAsUser' => 'RunAsUser',
        'seccompProfile' => 'SeccompProfile',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->capabilities) {
            $res['Capabilities'] = null !== $this->capabilities ? $this->capabilities->toMap() : null;
        }
        if (null !== $this->privileged) {
            $res['Privileged'] = $this->privileged;
        }
        if (null !== $this->runAsGroup) {
            $res['RunAsGroup'] = $this->runAsGroup;
        }
        if (null !== $this->runAsUser) {
            $res['RunAsUser'] = $this->runAsUser;
        }
        if (null !== $this->seccompProfile) {
            $res['SeccompProfile'] = null !== $this->seccompProfile ? $this->seccompProfile->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SecurityContext
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Capabilities'])) {
            $model->capabilities = SecurityContextCapabilities::fromMap($map['Capabilities']);
        }
        if (isset($map['Privileged'])) {
            $model->privileged = $map['Privileged'];
        }
        if (isset($map['RunAsGroup'])) {
            $model->runAsGroup = $map['RunAsGroup'];
        }
        if (isset($map['RunAsUser'])) {
            $model->runAsUser = $map['RunAsUser'];
        }
        if (isset($map['SeccompProfile'])) {
            $model->seccompProfile = SeccompProfile::fromMap($map['SeccompProfile']);
        }

        return $model;
    }
}
