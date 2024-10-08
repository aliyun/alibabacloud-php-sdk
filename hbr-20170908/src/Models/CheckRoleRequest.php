<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class CheckRoleRequest extends Model
{
    /**
     * @description The type of the role. Valid values:
     *
     *   EcsRole: a role with the permissions to access Elastic Compute Service (ECS) resources
     *   CsgRole: a role with the permissions to perform Cloud Storage Gateway (CSG) backup
     *   NasRole: a role with the permissions to perform NAS backup
     *   OssRole: a role with the permissions to perform Object Storage Service (OSS) backup
     *   UdmRole: a role with the permissions to perform ECS instance backup
     *   VMwareLocalRole: a role with the permissions to back up on-premises VMware virtual machines (VMs)
     *   VMwareCloudRole: a role with the permissions to back up VMs deployed on Alibaba Cloud VMware Service (ACVS)
     *   EcsBackupRole: a role with the permissions to perform ECS backup
     *   OtsRole: a role with the permissions to perform Tablestore backup
     *   CrossAccountRole: a role with the permissions to perform cross-account backup
     *
     * @example OssRole
     *
     * @var string
     */
    public $checkRoleType;

    /**
     * @description The name of the Resource Access Management (RAM) role that is created within the source Alibaba Cloud account and assigned to the current Alibaba Cloud account to authorize the current Alibaba Cloud account to back up data across Alibaba Cloud accounts.
     *
     * @example BackupRole
     *
     * @var string
     */
    public $crossAccountRoleName;

    /**
     * @description The ID of the source Alibaba Cloud account that authorizes the current Alibaba Cloud account to back up data across Alibaba Cloud accounts.
     *
     * @example 158975xxxxx4625
     *
     * @var int
     */
    public $crossAccountUserId;
    protected $_name = [
        'checkRoleType'        => 'CheckRoleType',
        'crossAccountRoleName' => 'CrossAccountRoleName',
        'crossAccountUserId'   => 'CrossAccountUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkRoleType) {
            $res['CheckRoleType'] = $this->checkRoleType;
        }
        if (null !== $this->crossAccountRoleName) {
            $res['CrossAccountRoleName'] = $this->crossAccountRoleName;
        }
        if (null !== $this->crossAccountUserId) {
            $res['CrossAccountUserId'] = $this->crossAccountUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckRoleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckRoleType'])) {
            $model->checkRoleType = $map['CheckRoleType'];
        }
        if (isset($map['CrossAccountRoleName'])) {
            $model->crossAccountRoleName = $map['CrossAccountRoleName'];
        }
        if (isset($map['CrossAccountUserId'])) {
            $model->crossAccountUserId = $map['CrossAccountUserId'];
        }

        return $model;
    }
}
