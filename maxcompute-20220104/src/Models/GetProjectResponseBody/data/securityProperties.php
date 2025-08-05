<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data\securityProperties\projectProtection;
use AlibabaCloud\Tea\Model;

class securityProperties extends Model
{
    /**
     * @description Indicates whether the [download control](https://www.alibabacloud.com/help/zh/maxcompute/user-guide/label-based-access-control) feature is enabled. By default, this feature is disabled.
     *
     * @example false
     *
     * @var bool
     */
    public $enableDownloadPrivilege;

    /**
     * @description Indicates whether the [label-based access control](https://www.alibabacloud.com/help/zh/maxcompute/user-guide/label-based-access-control) feature is enabled. By default, this feature is disabled.
     *
     * @example false
     *
     * @var bool
     */
    public $labelSecurity;

    /**
     * @description Indicates whether to allow the object creator to have the access permissions on the object. The default value is true, which indicates that the object creator has the access permissions on the object.
     *
     * @example true
     *
     * @var bool
     */
    public $objectCreatorHasAccessPermission;

    /**
     * @description Indicates whether the object creator has the authorization permissions on the object. The default value is true, which indicates that the object creator has the authorization permissions on the object.
     *
     * @example true
     *
     * @var bool
     */
    public $objectCreatorHasGrantPermission;

    /**
     * @description The properties of the [data protection mechanism](https://www.alibabacloud.com/help/zh/maxcompute/security-and-compliance/project-data-protection).
     *
     * @var projectProtection
     */
    public $projectProtection;

    /**
     * @description Indicates whether the [ACL-based access control](https://www.alibabacloud.com/help/zh/maxcompute/user-guide/acl-based-access-control) feature is enabled. By default, this feature is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $usingAcl;

    /**
     * @description Indicates whether the [policy-based access control](https://www.alibabacloud.com/help/zh/maxcompute/user-guide/policy-based-access-control-1) feature is enabled. By default, this feature is enabled.
     *
     * @example true
     *
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

    public function validate() {}

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
