<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateListResponseBody\templates\template\applyHistories;

use AlibabaCloud\Tea\Model;

class applyHistory extends Model
{
    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var int
     */
    public $applyTime;
    protected $_name = [
        'groupId'   => 'GroupId',
        'groupName' => 'GroupName',
        'applyTime' => 'ApplyTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->applyTime) {
            $res['ApplyTime'] = $this->applyTime;
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
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['ApplyTime'])) {
            $model->applyTime = $map['ApplyTime'];
        }

        return $model;
    }
}
