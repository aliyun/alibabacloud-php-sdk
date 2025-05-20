<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

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
     * @var int
     */
    public $runAsGroup;

    /**
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

    public function validate()
    {
        if (null !== $this->capabilities) {
            $this->capabilities->validate();
        }
        if (null !== $this->seccompProfile) {
            $this->seccompProfile->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capabilities) {
            $res['Capabilities'] = null !== $this->capabilities ? $this->capabilities->toArray($noStream) : $this->capabilities;
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
            $res['SeccompProfile'] = null !== $this->seccompProfile ? $this->seccompProfile->toArray($noStream) : $this->seccompProfile;
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
