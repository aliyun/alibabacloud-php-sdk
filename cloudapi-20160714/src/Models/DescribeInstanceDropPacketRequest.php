<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceDropPacketRequest extends Model
{
    /**
     * @description The end time. The time follows the ISO 8601 standard and UTC time is used. Format: YYYY-MM-DDThh:mm:ssZ
     *
     * This parameter is required.
     * @example 2022-12-16T02:04:36Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the instance.
     *
     * This parameter is required.
     * @example apigateway-cn-v641b9dxc00p
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The statistical metric. Valid values:
     *
     *   Maximum
     *   Minimum
     *   Average
     *
     * This parameter is required.
     * @example Maximum
     *
     * @var string
     */
    public $sbcName;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The start time. The time follows the ISO 8601 standard and UTC time is used. Format: YYYY-MM-DDThh:mm:ssZ
     *
     * This parameter is required.
     * @example 2022-09-06T04:00:36Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'       => 'EndTime',
        'instanceId'    => 'InstanceId',
        'sbcName'       => 'SbcName',
        'securityToken' => 'SecurityToken',
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
        if (null !== $this->sbcName) {
            $res['SbcName'] = $this->sbcName;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceDropPacketRequest
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
        if (isset($map['SbcName'])) {
            $model->sbcName = $map['SbcName'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
