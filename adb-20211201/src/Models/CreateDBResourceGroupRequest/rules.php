<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\CreateDBResourceGroupRequest;

use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @description The name of the resource group.
     *
     *   The name can be up to 255 characters in length.
     *   The name must start with a letter or digit.
     *   The name can contain letters, digits, hyphens (_), and underscores (_).
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The execution duration of the query. Unit: milliseconds.
     *
     * @var string
     */
    public $queryTime;

    /**
     * @description The name of the destination resource group.
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return rules
     */
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
