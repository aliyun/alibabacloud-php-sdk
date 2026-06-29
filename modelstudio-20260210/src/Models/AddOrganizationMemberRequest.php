<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models;

use AlibabaCloud\Dara\Model;

class AddOrganizationMemberRequest extends Model
{
    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $orgRoleCode;

    /**
     * @var string
     */
    public $specType;
    protected $_name = [
        'accountName' => 'AccountName',
        'orgRoleCode' => 'OrgRoleCode',
        'specType' => 'SpecType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }

        if (null !== $this->orgRoleCode) {
            $res['OrgRoleCode'] = $this->orgRoleCode;
        }

        if (null !== $this->specType) {
            $res['SpecType'] = $this->specType;
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
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        if (isset($map['OrgRoleCode'])) {
            $model->orgRoleCode = $map['OrgRoleCode'];
        }

        if (isset($map['SpecType'])) {
            $model->specType = $map['SpecType'];
        }

        return $model;
    }
}
