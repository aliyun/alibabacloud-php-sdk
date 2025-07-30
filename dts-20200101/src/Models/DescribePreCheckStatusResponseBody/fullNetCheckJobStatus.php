<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckStatusResponseBody;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckStatusResponseBody\fullNetCheckJobStatus\jobProgress;
use AlibabaCloud\Tea\Model;

class fullNetCheckJobStatus extends Model
{
    /**
     * @description Task code, **01** represents pre-check.
     *
     * @example 01
     *
     * @var string
     */
    public $code;

    /**
     * @description ID of the region to which the target network segment belongs.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $destRegion;

    /**
     * @description Destination network segment.
     *
     * @example 100.104.XX.XXX/XX
     *
     * @var string
     */
    public $destRegionCidr;

    /**
     * @description The access method of the target instance, with return values as follows: - **ALIYUN**: Access method is **cloud instance**. - **OTHER**: Access method is **public IP**. - **ECS**: Access method is **ECS self-built database**. - **EXPRESS**: Access method is **Express Connect / VPN Gateway / Smart Gateway**. - **CEN**: Access method is **Cloud Enterprise Network (CEN)**. - **DG**: Access method is **Database Gateway (DG)**.
     *
     * @example CEN
     *
     * @var string
     */
    public $destinationEndpointType;

    /**
     * @description Number of pre-check failed items
     *
     * @example 0
     *
     * @var int
     */
    public $errorItem;

    /**
     * @description The region ID of the instance\\"s running node.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $hostRegion;

    /**
     * @description Task ID.
     *
     * @example l3m1213ye7l****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description Task name.
     *
     * @example dts.step.fullnetcheck
     *
     * @var string
     */
    public $jobName;

    /**
     * @description A list of specific items for the task and their execution progress.
     *
     * @var jobProgress[]
     */
    public $jobProgress;

    /**
     * @description The access method of the source instance, with return values as follows: - **ALIYUN**: Access method is **cloud instance**. - **OTHER**: Access method is **public IP**. - **ECS**: Access method is **ECS self-built database**. - **EXPRESS**: Access method is **dedicated line/VPN gateway/smart gateway**. - **CEN**: Access method is **Cloud Enterprise Network CEN**. - **DG**: Access method is **Database Gateway DG**.
     *
     * @example CEN
     *
     * @var string
     */
    public $sourceEndpointType;

    /**
     * @description ID of the region to which the source network segment belongs.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $srcRegion;

    /**
     * @description Source network segment.
     *
     * @example 100.104.XX.XXX/XX
     *
     * @var string
     */
    public $srcRegionCidr;

    /**
     * @description Check result, the return value is: - **Failed**: Failure. - **Success**: Completed.
     *
     * @example Success
     *
     * @var string
     */
    public $state;

    /**
     * @description Total number of items in the project.
     *
     * @example 11
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'code' => 'Code',
        'destRegion' => 'DestRegion',
        'destRegionCidr' => 'DestRegionCidr',
        'destinationEndpointType' => 'DestinationEndpointType',
        'errorItem' => 'ErrorItem',
        'hostRegion' => 'HostRegion',
        'jobId' => 'JobId',
        'jobName' => 'JobName',
        'jobProgress' => 'JobProgress',
        'sourceEndpointType' => 'SourceEndpointType',
        'srcRegion' => 'SrcRegion',
        'srcRegionCidr' => 'SrcRegionCidr',
        'state' => 'State',
        'total' => 'Total',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->destRegion) {
            $res['DestRegion'] = $this->destRegion;
        }
        if (null !== $this->destRegionCidr) {
            $res['DestRegionCidr'] = $this->destRegionCidr;
        }
        if (null !== $this->destinationEndpointType) {
            $res['DestinationEndpointType'] = $this->destinationEndpointType;
        }
        if (null !== $this->errorItem) {
            $res['ErrorItem'] = $this->errorItem;
        }
        if (null !== $this->hostRegion) {
            $res['HostRegion'] = $this->hostRegion;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->jobProgress) {
            $res['JobProgress'] = [];
            if (null !== $this->jobProgress && \is_array($this->jobProgress)) {
                $n = 0;
                foreach ($this->jobProgress as $item) {
                    $res['JobProgress'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sourceEndpointType) {
            $res['SourceEndpointType'] = $this->sourceEndpointType;
        }
        if (null !== $this->srcRegion) {
            $res['SrcRegion'] = $this->srcRegion;
        }
        if (null !== $this->srcRegionCidr) {
            $res['SrcRegionCidr'] = $this->srcRegionCidr;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fullNetCheckJobStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DestRegion'])) {
            $model->destRegion = $map['DestRegion'];
        }
        if (isset($map['DestRegionCidr'])) {
            $model->destRegionCidr = $map['DestRegionCidr'];
        }
        if (isset($map['DestinationEndpointType'])) {
            $model->destinationEndpointType = $map['DestinationEndpointType'];
        }
        if (isset($map['ErrorItem'])) {
            $model->errorItem = $map['ErrorItem'];
        }
        if (isset($map['HostRegion'])) {
            $model->hostRegion = $map['HostRegion'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['JobProgress'])) {
            if (!empty($map['JobProgress'])) {
                $model->jobProgress = [];
                $n = 0;
                foreach ($map['JobProgress'] as $item) {
                    $model->jobProgress[$n++] = null !== $item ? jobProgress::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SourceEndpointType'])) {
            $model->sourceEndpointType = $map['SourceEndpointType'];
        }
        if (isset($map['SrcRegion'])) {
            $model->srcRegion = $map['SrcRegion'];
        }
        if (isset($map['SrcRegionCidr'])) {
            $model->srcRegionCidr = $map['SrcRegionCidr'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
