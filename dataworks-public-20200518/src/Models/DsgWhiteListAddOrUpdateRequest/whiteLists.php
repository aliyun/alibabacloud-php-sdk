<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgWhiteListAddOrUpdateRequest;

use AlibabaCloud\Tea\Model;

class whiteLists extends Model
{
    /**
     * @example null
     *
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $id;

    /**
     * @description This parameter is required.
     *
     * @example 123
     *
     * @var int
     */
    public $ruleId;

    /**
     * @description This parameter is required.
     *
     * @example 2024-04-10 00:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @description This parameter is required.
     *
     * @var int[]
     */
    public $userGroupIds;
    protected $_name = [
        'endTime'      => 'EndTime',
        'id'           => 'Id',
        'ruleId'       => 'RuleId',
        'startTime'    => 'StartTime',
        'userGroupIds' => 'UserGroupIds',
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->userGroupIds) {
            $res['UserGroupIds'] = $this->userGroupIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return whiteLists
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['UserGroupIds'])) {
            if (!empty($map['UserGroupIds'])) {
                $model->userGroupIds = $map['UserGroupIds'];
            }
        }

        return $model;
    }
}
