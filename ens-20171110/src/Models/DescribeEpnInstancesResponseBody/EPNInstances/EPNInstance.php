<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnInstancesResponseBody\EPNInstances;

use AlibabaCloud\Tea\Model;

class EPNInstance extends Model
{
    /**
     * @description The time when the instance was created. The time is displayed in UTC.
     *
     * @example 2019-11-01T06:08:46Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The ID of the EPN instance.
     *
     * @example epn****
     *
     * @var string
     */
    public $EPNInstanceId;

    /**
     * @description The name of the EPN instance.
     *
     * @example ens_test_epn
     *
     * @var string
     */
    public $EPNInstanceName;

    /**
     * @description Set the value to EdgeToEdge.
     *
     * @example EdgeToEdge
     *
     * @var string
     */
    public $EPNInstanceType;

    /**
     * @description The end of the time range during which the data was queried. The time is displayed in UTC.
     *
     * @example 2019-11-01T06:08:46Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The inbound bandwidth. Unit: Mbit/s.
     *
     * @example 40
     *
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @description The time when the instance was last modified. The time is displayed in UTC.
     *
     * @example 2019-11-01T06:08:46Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @description The networking mode. Valid values:
     *
     *   SpeedUp: intelligent acceleration network (Internet)
     *   Connection: internal network
     *   SpeedUpAndConnection: intelligent acceleration network and internal network
     *
     * @example SpeedUp
     *
     * @var string
     */
    public $networkingModel;

    /**
     * @description The beginning of the time range during which the data was queried. The time is displayed in UTC.
     *
     * @example 2019-11-01T06:08:46Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the instance. Valid values:
     *
     *   Running
     *   Excuting
     *   Stopped
     *
     * @example Running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'creationTime'            => 'CreationTime',
        'EPNInstanceId'           => 'EPNInstanceId',
        'EPNInstanceName'         => 'EPNInstanceName',
        'EPNInstanceType'         => 'EPNInstanceType',
        'endTime'                 => 'EndTime',
        'internetMaxBandwidthOut' => 'InternetMaxBandwidthOut',
        'modifyTime'              => 'ModifyTime',
        'networkingModel'         => 'NetworkingModel',
        'startTime'               => 'StartTime',
        'status'                  => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->EPNInstanceId) {
            $res['EPNInstanceId'] = $this->EPNInstanceId;
        }
        if (null !== $this->EPNInstanceName) {
            $res['EPNInstanceName'] = $this->EPNInstanceName;
        }
        if (null !== $this->EPNInstanceType) {
            $res['EPNInstanceType'] = $this->EPNInstanceType;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->internetMaxBandwidthOut) {
            $res['InternetMaxBandwidthOut'] = $this->internetMaxBandwidthOut;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->networkingModel) {
            $res['NetworkingModel'] = $this->networkingModel;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EPNInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['EPNInstanceId'])) {
            $model->EPNInstanceId = $map['EPNInstanceId'];
        }
        if (isset($map['EPNInstanceName'])) {
            $model->EPNInstanceName = $map['EPNInstanceName'];
        }
        if (isset($map['EPNInstanceType'])) {
            $model->EPNInstanceType = $map['EPNInstanceType'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InternetMaxBandwidthOut'])) {
            $model->internetMaxBandwidthOut = $map['InternetMaxBandwidthOut'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['NetworkingModel'])) {
            $model->networkingModel = $map['NetworkingModel'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
