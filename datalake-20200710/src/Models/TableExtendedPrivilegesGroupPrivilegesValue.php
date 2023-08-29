<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class TableExtendedPrivilegesGroupPrivilegesValue extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var bool
     */
    public $grantOption;

    /**
     * @var string
     */
    public $grantor;

    /**
     * @var string
     */
    public $grantorType;

    /**
     * @var string
     */
    public $privilege;
    protected $_name = [
        'createTime'  => 'CreateTime',
        'grantOption' => 'GrantOption',
        'grantor'     => 'Grantor',
        'grantorType' => 'GrantorType',
        'privilege'   => 'Privilege',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->grantOption) {
            $res['GrantOption'] = $this->grantOption;
        }
        if (null !== $this->grantor) {
            $res['Grantor'] = $this->grantor;
        }
        if (null !== $this->grantorType) {
            $res['GrantorType'] = $this->grantorType;
        }
        if (null !== $this->privilege) {
            $res['Privilege'] = $this->privilege;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TableExtendedPrivilegesGroupPrivilegesValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['GrantOption'])) {
            $model->grantOption = $map['GrantOption'];
        }
        if (isset($map['Grantor'])) {
            $model->grantor = $map['Grantor'];
        }
        if (isset($map['GrantorType'])) {
            $model->grantorType = $map['GrantorType'];
        }
        if (isset($map['Privilege'])) {
            $model->privilege = $map['Privilege'];
        }

        return $model;
    }
}
