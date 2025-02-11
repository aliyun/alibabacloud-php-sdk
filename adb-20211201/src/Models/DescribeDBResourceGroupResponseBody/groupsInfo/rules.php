<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBResourceGroupResponseBody\groupsInfo;

use AlibabaCloud\Dara\Model;

class rules extends Model
{
    /**
     * @var string
     */
    public $groupName;
    /**
     * @var string
     */
    public $queryTime;
    /**
     * @var string
     */
    public $targetGroupName;
    protected $_name = [
        'groupName'       => 'GroupName',
        'queryTime'       => 'QueryTime',
        'targetGroupName' => 'TargetGroupName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->queryTime) {
            $res['QueryTime'] = $this->queryTime;
        }

        if (null !== $this->targetGroupName) {
            $res['TargetGroupName'] = $this->targetGroupName;
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
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['QueryTime'])) {
            $model->queryTime = $map['QueryTime'];
        }

        if (isset($map['TargetGroupName'])) {
            $model->targetGroupName = $map['TargetGroupName'];
        }

        return $model;
    }
}
