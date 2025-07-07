<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseRoleQueryBizRoleDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseRoleQueryBizRoleDetailResponseBody\bizRoleDetail\bizPermissions;

class bizRoleDetail extends Model
{
    /**
     * @var bizPermissions[]
     */
    public $bizPermissions;

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
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $srcType;
    protected $_name = [
        'bizPermissions' => 'BizPermissions',
        'bizRoleCode' => 'BizRoleCode',
        'bizRoleDesc' => 'BizRoleDesc',
        'bizRoleName' => 'BizRoleName',
        'resourceType' => 'ResourceType',
        'srcType' => 'SrcType',
    ];

    public function validate()
    {
        if (\is_array($this->bizPermissions)) {
            Model::validateArray($this->bizPermissions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizPermissions) {
            if (\is_array($this->bizPermissions)) {
                $res['BizPermissions'] = [];
                $n1 = 0;
                foreach ($this->bizPermissions as $item1) {
                    $res['BizPermissions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BizPermissions'])) {
            if (!empty($map['BizPermissions'])) {
                $model->bizPermissions = [];
                $n1 = 0;
                foreach ($map['BizPermissions'] as $item1) {
                    $model->bizPermissions[$n1] = bizPermissions::fromMap($item1);
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

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['SrcType'])) {
            $model->srcType = $map['SrcType'];
        }

        return $model;
    }
}
