<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DescribeGroupTrafficRequest extends Model
{
    /**
     * @description The end time for the query. The time follows the ISO 8601 standard and UTC time is used. Format: YYYY-MM-DDThh:mm:ssZ.
     *
     * @example 2023-06-16T02:16:53Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the API group.
     *
     * @example 16df9d11caa04900bcafe23b38a81600
     *
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The environment to which the APIs in the API group are published. Valid values:
     *
     *   **RELEASE**: the production environment
     *   **PRE**: the staging environment
     *   **TEST**: the test environment
     *
     * @example RELEASE
     *
     * @var string
     */
    public $stageName;

    /**
     * @description The start time for the query. The time follows the ISO 8601 standard and UTC time is used. Format: YYYY-MM-DDThh:mm:ssZ.
     *
     * @example 2023-01-29T01:27:43Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'       => 'EndTime',
        'groupId'       => 'GroupId',
        'securityToken' => 'SecurityToken',
        'stageName'     => 'StageName',
        'startTime'     => 'StartTime',
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
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGroupTrafficRequest
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
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
