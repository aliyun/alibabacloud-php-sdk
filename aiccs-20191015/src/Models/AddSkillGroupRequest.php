<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

class AddSkillGroupRequest extends Model
{
    /**
     * @var string
     */
    public $outerDepartmentId;
    /**
     * @var string
     */
    public $outerDepartmentType;
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
    protected $_name = [
        'outerDepartmentId'   => 'OuterDepartmentId',
        'outerDepartmentType' => 'OuterDepartmentType',
        'outerGroupId'        => 'OuterGroupId',
        'outerGroupName'      => 'OuterGroupName',
        'outerGroupType'      => 'OuterGroupType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->outerDepartmentId) {
            $res['OuterDepartmentId'] = $this->outerDepartmentId;
        }

        if (null !== $this->outerDepartmentType) {
            $res['OuterDepartmentType'] = $this->outerDepartmentType;
        }

        if (null !== $this->outerGroupId) {
            $res['OuterGroupId'] = $this->outerGroupId;
        }

        if (null !== $this->outerGroupName) {
            $res['OuterGroupName'] = $this->outerGroupName;
        }

        if (null !== $this->outerGroupType) {
            $res['OuterGroupType'] = $this->outerGroupType;
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
        if (isset($map['OuterDepartmentId'])) {
            $model->outerDepartmentId = $map['OuterDepartmentId'];
        }

        if (isset($map['OuterDepartmentType'])) {
            $model->outerDepartmentType = $map['OuterDepartmentType'];
        }

        if (isset($map['OuterGroupId'])) {
            $model->outerGroupId = $map['OuterGroupId'];
        }

        if (isset($map['OuterGroupName'])) {
            $model->outerGroupName = $map['OuterGroupName'];
        }

        if (isset($map['OuterGroupType'])) {
            $model->outerGroupType = $map['OuterGroupType'];
        }

        return $model;
    }
}
