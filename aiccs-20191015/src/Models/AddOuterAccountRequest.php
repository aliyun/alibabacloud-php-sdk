<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class AddOuterAccountRequest extends Model
{
    /**
     * @var string
     */
    public $outerAccountId;

    /**
     * @var string
     */
    public $outerAccountType;

    /**
     * @var string
     */
    public $outerAccountName;

    /**
     * @var string
     */
    public $avatar;

    /**
     * @var string
     */
    public $realName;

    /**
     * @var string
     */
    public $outerDepartmentId;

    /**
     * @var string
     */
    public $outerGroupIds;

    /**
     * @var string
     */
    public $ext;

    /**
     * @var string
     */
    public $outerDepartmentType;

    /**
     * @var string
     */
    public $outerGroupType;
    protected $_name = [
        'outerAccountId'      => 'OuterAccountId',
        'outerAccountType'    => 'OuterAccountType',
        'outerAccountName'    => 'OuterAccountName',
        'avatar'              => 'Avatar',
        'realName'            => 'RealName',
        'outerDepartmentId'   => 'OuterDepartmentId',
        'outerGroupIds'       => 'OuterGroupIds',
        'ext'                 => 'Ext',
        'outerDepartmentType' => 'OuterDepartmentType',
        'outerGroupType'      => 'OuterGroupType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outerAccountId) {
            $res['OuterAccountId'] = $this->outerAccountId;
        }
        if (null !== $this->outerAccountType) {
            $res['OuterAccountType'] = $this->outerAccountType;
        }
        if (null !== $this->outerAccountName) {
            $res['OuterAccountName'] = $this->outerAccountName;
        }
        if (null !== $this->avatar) {
            $res['Avatar'] = $this->avatar;
        }
        if (null !== $this->realName) {
            $res['RealName'] = $this->realName;
        }
        if (null !== $this->outerDepartmentId) {
            $res['OuterDepartmentId'] = $this->outerDepartmentId;
        }
        if (null !== $this->outerGroupIds) {
            $res['OuterGroupIds'] = $this->outerGroupIds;
        }
        if (null !== $this->ext) {
            $res['Ext'] = $this->ext;
        }
        if (null !== $this->outerDepartmentType) {
            $res['OuterDepartmentType'] = $this->outerDepartmentType;
        }
        if (null !== $this->outerGroupType) {
            $res['OuterGroupType'] = $this->outerGroupType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddOuterAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OuterAccountId'])) {
            $model->outerAccountId = $map['OuterAccountId'];
        }
        if (isset($map['OuterAccountType'])) {
            $model->outerAccountType = $map['OuterAccountType'];
        }
        if (isset($map['OuterAccountName'])) {
            $model->outerAccountName = $map['OuterAccountName'];
        }
        if (isset($map['Avatar'])) {
            $model->avatar = $map['Avatar'];
        }
        if (isset($map['RealName'])) {
            $model->realName = $map['RealName'];
        }
        if (isset($map['OuterDepartmentId'])) {
            $model->outerDepartmentId = $map['OuterDepartmentId'];
        }
        if (isset($map['OuterGroupIds'])) {
            $model->outerGroupIds = $map['OuterGroupIds'];
        }
        if (isset($map['Ext'])) {
            $model->ext = $map['Ext'];
        }
        if (isset($map['OuterDepartmentType'])) {
            $model->outerDepartmentType = $map['OuterDepartmentType'];
        }
        if (isset($map['OuterGroupType'])) {
            $model->outerGroupType = $map['OuterGroupType'];
        }

        return $model;
    }
}
