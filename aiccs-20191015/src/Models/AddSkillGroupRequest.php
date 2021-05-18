<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class AddSkillGroupRequest extends Model
{
    /**
     * @var string
     */
    public $outerGroupId;

    /**
     * @var string
     */
    public $outerGroupName;

    /**
     * @var string
     */
    public $outerGroupType;

    /**
     * @var string
     */
    public $outerDepartmentId;

    /**
     * @var string
     */
    public $outerDepartmentType;
    protected $_name = [
        'outerGroupId'        => 'OuterGroupId',
        'outerGroupName'      => 'OuterGroupName',
        'outerGroupType'      => 'OuterGroupType',
        'outerDepartmentId'   => 'OuterDepartmentId',
        'outerDepartmentType' => 'OuterDepartmentType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outerGroupId) {
            $res['OuterGroupId'] = $this->outerGroupId;
        }
        if (null !== $this->outerGroupName) {
            $res['OuterGroupName'] = $this->outerGroupName;
        }
        if (null !== $this->outerGroupType) {
            $res['OuterGroupType'] = $this->outerGroupType;
        }
        if (null !== $this->outerDepartmentId) {
            $res['OuterDepartmentId'] = $this->outerDepartmentId;
        }
        if (null !== $this->outerDepartmentType) {
            $res['OuterDepartmentType'] = $this->outerDepartmentType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddSkillGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OuterGroupId'])) {
            $model->outerGroupId = $map['OuterGroupId'];
        }
        if (isset($map['OuterGroupName'])) {
            $model->outerGroupName = $map['OuterGroupName'];
        }
        if (isset($map['OuterGroupType'])) {
            $model->outerGroupType = $map['OuterGroupType'];
        }
        if (isset($map['OuterDepartmentId'])) {
            $model->outerDepartmentId = $map['OuterDepartmentId'];
        }
        if (isset($map['OuterDepartmentType'])) {
            $model->outerDepartmentType = $map['OuterDepartmentType'];
        }

        return $model;
    }
}
