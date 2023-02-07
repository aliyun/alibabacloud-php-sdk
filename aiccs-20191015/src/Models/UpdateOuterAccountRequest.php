<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class UpdateOuterAccountRequest extends Model
{
    /**
     * @example http://****
     *
     * @var string
     */
    public $avatar;

    /**
     * @var string
     */
    public $ext;

    /**
     * @example 123456
     *
     * @var string
     */
    public $outerAccountId;

    /**
     * @var string
     */
    public $outerAccountName;

    /**
     * @example alipay
     *
     * @var string
     */
    public $outerAccountType;

    /**
     * @example 3
     *
     * @var string
     */
    public $outerDepartmentId;

    /**
     * @example type_invalid
     *
     * @var string
     */
    public $outerDepartmentType;

    /**
     * @example ["222","333","444"]
     *
     * @var string
     */
    public $outerGroupIds;

    /**
     * @example mybank
     *
     * @var string
     */
    public $outerGroupType;

    /**
     * @var string
     */
    public $realName;
    protected $_name = [
        'avatar'              => 'Avatar',
        'ext'                 => 'Ext',
        'outerAccountId'      => 'OuterAccountId',
        'outerAccountName'    => 'OuterAccountName',
        'outerAccountType'    => 'OuterAccountType',
        'outerDepartmentId'   => 'OuterDepartmentId',
        'outerDepartmentType' => 'OuterDepartmentType',
        'outerGroupIds'       => 'OuterGroupIds',
        'outerGroupType'      => 'OuterGroupType',
        'realName'            => 'RealName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avatar) {
            $res['Avatar'] = $this->avatar;
        }
        if (null !== $this->ext) {
            $res['Ext'] = $this->ext;
        }
        if (null !== $this->outerAccountId) {
            $res['OuterAccountId'] = $this->outerAccountId;
        }
        if (null !== $this->outerAccountName) {
            $res['OuterAccountName'] = $this->outerAccountName;
        }
        if (null !== $this->outerAccountType) {
            $res['OuterAccountType'] = $this->outerAccountType;
        }
        if (null !== $this->outerDepartmentId) {
            $res['OuterDepartmentId'] = $this->outerDepartmentId;
        }
        if (null !== $this->outerDepartmentType) {
            $res['OuterDepartmentType'] = $this->outerDepartmentType;
        }
        if (null !== $this->outerGroupIds) {
            $res['OuterGroupIds'] = $this->outerGroupIds;
        }
        if (null !== $this->outerGroupType) {
            $res['OuterGroupType'] = $this->outerGroupType;
        }
        if (null !== $this->realName) {
            $res['RealName'] = $this->realName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateOuterAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Avatar'])) {
            $model->avatar = $map['Avatar'];
        }
        if (isset($map['Ext'])) {
            $model->ext = $map['Ext'];
        }
        if (isset($map['OuterAccountId'])) {
            $model->outerAccountId = $map['OuterAccountId'];
        }
        if (isset($map['OuterAccountName'])) {
            $model->outerAccountName = $map['OuterAccountName'];
        }
        if (isset($map['OuterAccountType'])) {
            $model->outerAccountType = $map['OuterAccountType'];
        }
        if (isset($map['OuterDepartmentId'])) {
            $model->outerDepartmentId = $map['OuterDepartmentId'];
        }
        if (isset($map['OuterDepartmentType'])) {
            $model->outerDepartmentType = $map['OuterDepartmentType'];
        }
        if (isset($map['OuterGroupIds'])) {
            $model->outerGroupIds = $map['OuterGroupIds'];
        }
        if (isset($map['OuterGroupType'])) {
            $model->outerGroupType = $map['OuterGroupType'];
        }
        if (isset($map['RealName'])) {
            $model->realName = $map['RealName'];
        }

        return $model;
    }
}
