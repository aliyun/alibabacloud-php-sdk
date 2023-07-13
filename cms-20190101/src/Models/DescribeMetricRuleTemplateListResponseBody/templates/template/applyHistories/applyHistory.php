<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateListResponseBody\templates\template\applyHistories;

use AlibabaCloud\Tea\Model;

class applyHistory extends Model
{
    /**
     * @example 1646055898000
     *
     * @var int
     */
    public $applyTime;

    /**
     * @description For more information about common request parameters, see [Common parameters](~~199331~~).
     *
     * @example 3607****
     *
     * @var int
     */
    public $groupId;

    /**
     * @example ECS_Group
     *
     * @var string
     */
    public $groupName;
    protected $_name = [
        'applyTime' => 'ApplyTime',
        'groupId'   => 'GroupId',
        'groupName' => 'GroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyTime) {
            $res['ApplyTime'] = $this->applyTime;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applyHistory
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplyTime'])) {
            $model->applyTime = $map['ApplyTime'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        return $model;
    }
}
