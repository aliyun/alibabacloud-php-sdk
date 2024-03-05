<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CustomerService\V20231228\Models\GetEnterpriseSupportPlanDetailResponseBody\data;

use AlibabaCloud\Tea\Model;

class dingGroups extends Model
{
    /**
     * @var string
     */
    public $mainDingDepartmentId;

    /**
     * @var string
     */
    public $mainDingGroupId;

    /**
     * @var string
     */
    public $mainDingGroupName;

    /**
     * @var string
     */
    public $subDingDepartmentId;

    /**
     * @var string
     */
    public $subDingGroupId;

    /**
     * @var string
     */
    public $subDingGroupName;
    protected $_name = [
        'mainDingDepartmentId' => 'mainDingDepartmentId',
        'mainDingGroupId'      => 'mainDingGroupId',
        'mainDingGroupName'    => 'mainDingGroupName',
        'subDingDepartmentId'  => 'subDingDepartmentId',
        'subDingGroupId'       => 'subDingGroupId',
        'subDingGroupName'     => 'subDingGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mainDingDepartmentId) {
            $res['mainDingDepartmentId'] = $this->mainDingDepartmentId;
        }
        if (null !== $this->mainDingGroupId) {
            $res['mainDingGroupId'] = $this->mainDingGroupId;
        }
        if (null !== $this->mainDingGroupName) {
            $res['mainDingGroupName'] = $this->mainDingGroupName;
        }
        if (null !== $this->subDingDepartmentId) {
            $res['subDingDepartmentId'] = $this->subDingDepartmentId;
        }
        if (null !== $this->subDingGroupId) {
            $res['subDingGroupId'] = $this->subDingGroupId;
        }
        if (null !== $this->subDingGroupName) {
            $res['subDingGroupName'] = $this->subDingGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dingGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['mainDingDepartmentId'])) {
            $model->mainDingDepartmentId = $map['mainDingDepartmentId'];
        }
        if (isset($map['mainDingGroupId'])) {
            $model->mainDingGroupId = $map['mainDingGroupId'];
        }
        if (isset($map['mainDingGroupName'])) {
            $model->mainDingGroupName = $map['mainDingGroupName'];
        }
        if (isset($map['subDingDepartmentId'])) {
            $model->subDingDepartmentId = $map['subDingDepartmentId'];
        }
        if (isset($map['subDingGroupId'])) {
            $model->subDingGroupId = $map['subDingGroupId'];
        }
        if (isset($map['subDingGroupName'])) {
            $model->subDingGroupName = $map['subDingGroupName'];
        }

        return $model;
    }
}
