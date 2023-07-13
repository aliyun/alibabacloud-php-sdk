<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupNotifyPolicyListResponseBody\notifyPolicyList;

use AlibabaCloud\Tea\Model;

class notifyPolicy extends Model
{
    /**
     * @description The ID of the policy.
     *
     * @example 1551761781273
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 6780****
     *
     * @var string
     */
    public $groupId;

    /**
     * @example 123****
     *
     * @var string
     */
    public $id;

    /**
     * @description The ID of the request.
     *
     * @example 1551761781273
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The ID of the application group.
     *
     * @example PauseNotify
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'endTime'   => 'EndTime',
        'groupId'   => 'GroupId',
        'id'        => 'Id',
        'startTime' => 'StartTime',
        'type'      => 'Type',
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
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
