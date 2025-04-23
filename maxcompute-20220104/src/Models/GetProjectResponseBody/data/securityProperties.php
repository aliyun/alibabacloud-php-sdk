<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data\securityProperties\projectProtection;

class securityProperties extends Model
{
    /**
     * @var bool
     */
    public $enableDownloadPrivilege;

    /**
     * @var bool
     */
    public $labelSecurity;

    /**
     * @var bool
     */
    public $objectCreatorHasAccessPermission;

    /**
     * @var bool
     */
    public $objectCreatorHasGrantPermission;

    /**
     * @var projectProtection
     */
    public $projectProtection;

    /**
     * @var bool
     */
    public $usingAcl;

    /**
     * @var bool
     */
    public $usingPolicy;
    protected $_name = [
        'enableDownloadPrivilege' => 'enableDownloadPrivilege',
        'labelSecurity' => 'labelSecurity',
        'objectCreatorHasAccessPermission' => 'objectCreatorHasAccessPermission',
        'objectCreatorHasGrantPermission' => 'objectCreatorHasGrantPermission',
        'projectProtection' => 'projectProtection',
        'usingAcl' => 'usingAcl',
        'usingPolicy' => 'usingPolicy',
    ];

    public function validate()
    {
        if (null !== $this->projectProtection) {
            $this->projectProtection->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableDownloadPrivilege) {
            $res['enableDownloadPrivilege'] = $this->enableDownloadPrivilege;
        }

        if (null !== $this->labelSecurity) {
            $res['labelSecurity'] = $this->labelSecurity;
        }

        if (null !== $this->objectCreatorHasAccessPermission) {
            $res['objectCreatorHasAccessPermission'] = $this->objectCreatorHasAccessPermission;
        }

        if (null !== $this->objectCreatorHasGrantPermission) {
            $res['objectCreatorHasGrantPermission'] = $this->objectCreatorHasGrantPermission;
        }

        if (null !== $this->projectProtection) {
            $res['projectProtection'] = null !== $this->projectProtection ? $this->projectProtection->toArray($noStream) : $this->projectProtection;
        }

        if (null !== $this->usingAcl) {
            $res['usingAcl'] = $this->usingAcl;
        }

        if (null !== $this->usingPolicy) {
            $res['usingPolicy'] = $this->usingPolicy;
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
        if (isset($map['enableDownloadPrivilege'])) {
            $model->enableDownloadPrivilege = $map['enableDownloadPrivilege'];
        }

        if (isset($map['labelSecurity'])) {
            $model->labelSecurity = $map['labelSecurity'];
        }

        if (isset($map['objectCreatorHasAccessPermission'])) {
            $model->objectCreatorHasAccessPermission = $map['objectCreatorHasAccessPermission'];
        }

        if (isset($map['objectCreatorHasGrantPermission'])) {
            $model->objectCreatorHasGrantPermission = $map['objectCreatorHasGrantPermission'];
        }

        if (isset($map['projectProtection'])) {
            $model->projectProtection = projectProtection::fromMap($map['projectProtection']);
        }

        if (isset($map['usingAcl'])) {
            $model->usingAcl = $map['usingAcl'];
        }

        if (isset($map['usingPolicy'])) {
            $model->usingPolicy = $map['usingPolicy'];
        }

        return $model;
    }
}
