<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseRoleQueryBizRoleByPageResponseBody;

use AlibabaCloud\Dara\Model;

class bizRoles extends Model
{
    /**
     * @var int
     */
    public $bizPermissionCount;

    /**
     * @var string[]
     */
    public $bizPermissionNameList;

    /**
     * @var string
     */
    public $bizRoleCode;

    /**
     * @var string
     */
    public $bizRoleDesc;

    /**
     * @var string
     */
    public $bizRoleName;

    /**
     * @var int
     */
    public $grantedPkCount;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $srcType;
    protected $_name = [
        'bizPermissionCount' => 'BizPermissionCount',
        'bizPermissionNameList' => 'BizPermissionNameList',
        'bizRoleCode' => 'BizRoleCode',
        'bizRoleDesc' => 'BizRoleDesc',
        'bizRoleName' => 'BizRoleName',
        'grantedPkCount' => 'GrantedPkCount',
        'resourceType' => 'ResourceType',
        'srcType' => 'SrcType',
    ];

    public function validate()
    {
        if (\is_array($this->bizPermissionNameList)) {
            Model::validateArray($this->bizPermissionNameList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizPermissionCount) {
            $res['BizPermissionCount'] = $this->bizPermissionCount;
        }

        if (null !== $this->bizPermissionNameList) {
            if (\is_array($this->bizPermissionNameList)) {
                $res['BizPermissionNameList'] = [];
                $n1 = 0;
                foreach ($this->bizPermissionNameList as $item1) {
                    $res['BizPermissionNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->bizRoleCode) {
            $res['BizRoleCode'] = $this->bizRoleCode;
        }

        if (null !== $this->bizRoleDesc) {
            $res['BizRoleDesc'] = $this->bizRoleDesc;
        }

        if (null !== $this->bizRoleName) {
            $res['BizRoleName'] = $this->bizRoleName;
        }

        if (null !== $this->grantedPkCount) {
            $res['GrantedPkCount'] = $this->grantedPkCount;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->srcType) {
            $res['SrcType'] = $this->srcType;
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
        if (isset($map['BizPermissionCount'])) {
            $model->bizPermissionCount = $map['BizPermissionCount'];
        }

        if (isset($map['BizPermissionNameList'])) {
            if (!empty($map['BizPermissionNameList'])) {
                $model->bizPermissionNameList = [];
                $n1 = 0;
                foreach ($map['BizPermissionNameList'] as $item1) {
                    $model->bizPermissionNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['BizRoleCode'])) {
            $model->bizRoleCode = $map['BizRoleCode'];
        }

        if (isset($map['BizRoleDesc'])) {
            $model->bizRoleDesc = $map['BizRoleDesc'];
        }

        if (isset($map['BizRoleName'])) {
            $model->bizRoleName = $map['BizRoleName'];
        }

        if (isset($map['GrantedPkCount'])) {
            $model->grantedPkCount = $map['GrantedPkCount'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['SrcType'])) {
            $model->srcType = $map['SrcType'];
        }

        return $model;
    }
}
