<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnInstancesResponseBody\EPNInstances;

use AlibabaCloud\Tea\Model;

class EPNInstance extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $EPNInstanceId;

    /**
     * @var string
     */
    public $EPNInstanceName;

    /**
     * @var string
     */
    public $EPNInstanceType;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $networkingModel;

    /**
     * @var string
     */
    public $startTime;

    /**
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
