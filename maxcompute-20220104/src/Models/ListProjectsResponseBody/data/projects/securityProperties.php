<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListProjectsResponseBody\data\projects;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListProjectsResponseBody\data\projects\securityProperties\projectProtection;
use AlibabaCloud\Tea\Model;

class securityProperties extends Model
{
    /**
     * @description Indicates whether Download control is enabled.
     *
     * @example false
     *
     * @var bool
     */
    public $enableDownloadPrivilege;

    /**
     * @description Indicates whether label-based access control is enabled.
     *
     * @example false
     *
     * @var bool
     */
    public $labelSecurity;

    /**
     * @description Indicates whether the object creator is allowed to perform operations on objects.
     *
     * @example true
     *
     * @var bool
     */
    public $objectCreatorHasAccessPermission;

    /**
     * @description Indicates whether the object creator is allowed to authorize other users to perform operations on objects.
     *
     * @example true
     *
     * @var bool
     */
    public $objectCreatorHasGrantPermission;

    /**
     * @description Indicates whether project data protection is enabled.
     *
     * @var projectProtection
     */
    public $projectProtection;

    /**
     * @description Indicates whether ACL-based access control is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $usingAcl;

    /**
     * @description Indicates whether policy-based access control is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $usingPolicy;
    protected $_name = [
        'enableDownloadPrivilege'          => 'enableDownloadPrivilege',
        'labelSecurity'                    => 'labelSecurity',
        'objectCreatorHasAccessPermission' => 'objectCreatorHasAccessPermission',
        'objectCreatorHasGrantPermission'  => 'objectCreatorHasGrantPermission',
        'projectProtection'                => 'projectProtection',
        'usingAcl'                         => 'usingAcl',
        'usingPolicy'                      => 'usingPolicy',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['projectProtection'] = null !== $this->projectProtection ? $this->projectProtection->toMap() : null;
        }
        if (null !== $this->usingAcl) {
            $res['usingAcl'] = $this->usingAcl;
        }
        if (null !== $this->usingPolicy) {
            $res['usingPolicy'] = $this->usingPolicy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityProperties
     */
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
