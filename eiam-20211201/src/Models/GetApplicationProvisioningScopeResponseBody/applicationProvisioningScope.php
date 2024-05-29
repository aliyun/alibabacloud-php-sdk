<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationProvisioningScopeResponseBody;

use AlibabaCloud\Tea\Model;

class applicationProvisioningScope extends Model
{
    /**
     * @description 同步授权的组列表
     *
     * @var string[]
     */
    public $groupIds;

    /**
     * @description 租户最大授权主体quota数量
     *
     * @var int
     */
    public $maxQuota;

    /**
     * @description The list of organizational units that are authorized for account synchronization.
     *
     * @var string[]
     */
    public $organizationalUnitIds;

    /**
     * @description 已使用授权主体quota数量
     *
     * @var int
     */
    public $usedQuota;
    protected $_name = [
        'groupIds'              => 'GroupIds',
        'maxQuota'              => 'MaxQuota',
        'organizationalUnitIds' => 'OrganizationalUnitIds',
        'usedQuota'             => 'UsedQuota',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupIds) {
            $res['GroupIds'] = $this->groupIds;
        }
        if (null !== $this->maxQuota) {
            $res['MaxQuota'] = $this->maxQuota;
        }
        if (null !== $this->organizationalUnitIds) {
            $res['OrganizationalUnitIds'] = $this->organizationalUnitIds;
        }
        if (null !== $this->usedQuota) {
            $res['UsedQuota'] = $this->usedQuota;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applicationProvisioningScope
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupIds'])) {
            if (!empty($map['GroupIds'])) {
                $model->groupIds = $map['GroupIds'];
            }
        }
        if (isset($map['MaxQuota'])) {
            $model->maxQuota = $map['MaxQuota'];
        }
        if (isset($map['OrganizationalUnitIds'])) {
            if (!empty($map['OrganizationalUnitIds'])) {
                $model->organizationalUnitIds = $map['OrganizationalUnitIds'];
            }
        }
        if (isset($map['UsedQuota'])) {
            $model->usedQuota = $map['UsedQuota'];
        }

        return $model;
    }
}
