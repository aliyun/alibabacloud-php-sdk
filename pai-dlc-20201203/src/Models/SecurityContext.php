<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class SecurityContext extends Model
{
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
        'runAsGroup' => 'RunAsGroup',
        'runAsUser' => 'RunAsUser',
        'seccompProfile' => 'SeccompProfile',
    ];

    public function validate()
    {
        if (null !== $this->seccompProfile) {
            $this->seccompProfile->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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
