<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupNotifyPolicyListResponseBody\notifyPolicyList;

use AlibabaCloud\Tea\Model;

class notifyPolicy extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'endTime'   => 'EndTime',
        'type'      => 'Type',
        'startTime' => 'StartTime',
        'groupId'   => 'GroupId',
        'id'        => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return notifyPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
