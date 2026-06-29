<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models;

use AlibabaCloud\Dara\Model;

class GetOrganizationMemberSeatStatsResponseBody extends Model
{
    /**
     * @var int
     */
    public $adminRoleUserCount;

    /**
     * @var int
     */
    public $memberRoleUserCount;

    /**
     * @var string
     */
    public $orgId;

    /**
     * @var int
     */
    public $ownerRoleUserCount;

    /**
     * @var int
     */
    public $seatedMemberCount;

    /**
     * @var int
     */
    public $totalMemberCount;

    /**
     * @var int
     */
    public $unseatedMemberCount;
    protected $_name = [
        'adminRoleUserCount' => 'AdminRoleUserCount',
        'memberRoleUserCount' => 'MemberRoleUserCount',
        'orgId' => 'OrgId',
        'ownerRoleUserCount' => 'OwnerRoleUserCount',
        'seatedMemberCount' => 'SeatedMemberCount',
        'totalMemberCount' => 'TotalMemberCount',
        'unseatedMemberCount' => 'UnseatedMemberCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adminRoleUserCount) {
            $res['AdminRoleUserCount'] = $this->adminRoleUserCount;
        }

        if (null !== $this->memberRoleUserCount) {
            $res['MemberRoleUserCount'] = $this->memberRoleUserCount;
        }

        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }

        if (null !== $this->ownerRoleUserCount) {
            $res['OwnerRoleUserCount'] = $this->ownerRoleUserCount;
        }

        if (null !== $this->seatedMemberCount) {
            $res['SeatedMemberCount'] = $this->seatedMemberCount;
        }

        if (null !== $this->totalMemberCount) {
            $res['TotalMemberCount'] = $this->totalMemberCount;
        }

        if (null !== $this->unseatedMemberCount) {
            $res['UnseatedMemberCount'] = $this->unseatedMemberCount;
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
        if (isset($map['AdminRoleUserCount'])) {
            $model->adminRoleUserCount = $map['AdminRoleUserCount'];
        }

        if (isset($map['MemberRoleUserCount'])) {
            $model->memberRoleUserCount = $map['MemberRoleUserCount'];
        }

        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }

        if (isset($map['OwnerRoleUserCount'])) {
            $model->ownerRoleUserCount = $map['OwnerRoleUserCount'];
        }

        if (isset($map['SeatedMemberCount'])) {
            $model->seatedMemberCount = $map['SeatedMemberCount'];
        }

        if (isset($map['TotalMemberCount'])) {
            $model->totalMemberCount = $map['TotalMemberCount'];
        }

        if (isset($map['UnseatedMemberCount'])) {
            $model->unseatedMemberCount = $map['UnseatedMemberCount'];
        }

        return $model;
    }
}
