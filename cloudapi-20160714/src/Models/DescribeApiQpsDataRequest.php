<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DescribeApiQpsDataRequest extends Model
{
    /**
     * @description The ID of the API group.
     *
     * @example d6f679aeb3be4b91b3688e887ca1fe16
     *
     * @var string
     */
    public $apiId;

    /**
     * @description The environment. Valid values:
     *
     *   **RELEASE**
     *   **PRE**: the pre-release environment
     *   **TEST**
     *
     * @example 2016-07-23T09:28:48Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The start time in UTC. Format: YYYY-MM-DDThh:mm:ssZ
     *
     * @example 63be9002440b4778a61122f14c2b2bbb
     *
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The ID of the request.
     *
     * @example RELEASE
     *
     * @var string
     */
    public $stageName;

    /**
     * @description The end time in UTC. Format: YYYY-MM-DDThh:mm:ssZ
     *
     * @example 2016-07-23T08:28:48Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'apiId'         => 'ApiId',
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
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
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
     * @return DescribeApiQpsDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
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
