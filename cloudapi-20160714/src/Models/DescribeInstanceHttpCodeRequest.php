<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceHttpCodeRequest extends Model
{
    /**
     * @description The end time. The time follows the ISO 8601 standard and UTC time is used. Format: YYYY-MM-DDThh:mm:ssZ
     *
     * @example 2022-07-21T06:05:52Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the instance.
     *
     * @example apigateway-cn-m7r227yy2004
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The environment in which the API is requested. Valid values:
     *
     *   **RELEASE**: the production environment
     *   **PRE**: the pre-release environment
     *   **TEST**: the test environment
     *
     * @example RELEASE
     *
     * @var string
     */
    public $stageName;

    /**
     * @description The start time. The time follows the ISO 8601 standard and UTC time is used. Format: YYYY-MM-DDThh:mm:ssZ
     *
     * @example 2022-04-14T02:12:10Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'       => 'EndTime',
        'instanceId'    => 'InstanceId',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
     * @return DescribeInstanceHttpCodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
