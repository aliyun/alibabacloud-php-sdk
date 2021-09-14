<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedResourceAdvisorResponseBody\resourceAdvisors;

use AlibabaCloud\Tea\Model;

class resourceAdvisors extends Model
{
    /**
     * @var float
     */
    public $cpuUsageAfterAction;

    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $destinationDedicatedHostId;

    /**
     * @var string
     */
    public $sourceDedicatedInstanceId;

    /**
     * @var string
     */
    public $actionDescription;

    /**
     * @var string
     */
    public $sourceDedicatedInstanceRole;

    /**
     * @var string
     */
    public $sourceDedicatedHostId;

    /**
     * @var float
     */
    public $cpuUsageBeforeAction;
    protected $_name = [
        'cpuUsageAfterAction'         => 'CpuUsageAfterAction',
        'action'                      => 'Action',
        'destinationDedicatedHostId'  => 'DestinationDedicatedHostId',
        'sourceDedicatedInstanceId'   => 'SourceDedicatedInstanceId',
        'actionDescription'           => 'ActionDescription',
        'sourceDedicatedInstanceRole' => 'SourceDedicatedInstanceRole',
        'sourceDedicatedHostId'       => 'SourceDedicatedHostId',
        'cpuUsageBeforeAction'        => 'CpuUsageBeforeAction',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpuUsageAfterAction) {
            $res['CpuUsageAfterAction'] = $this->cpuUsageAfterAction;
        }
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->destinationDedicatedHostId) {
            $res['DestinationDedicatedHostId'] = $this->destinationDedicatedHostId;
        }
        if (null !== $this->sourceDedicatedInstanceId) {
            $res['SourceDedicatedInstanceId'] = $this->sourceDedicatedInstanceId;
        }
        if (null !== $this->actionDescription) {
            $res['ActionDescription'] = $this->actionDescription;
        }
        if (null !== $this->sourceDedicatedInstanceRole) {
            $res['SourceDedicatedInstanceRole'] = $this->sourceDedicatedInstanceRole;
        }
        if (null !== $this->sourceDedicatedHostId) {
            $res['SourceDedicatedHostId'] = $this->sourceDedicatedHostId;
        }
        if (null !== $this->cpuUsageBeforeAction) {
            $res['CpuUsageBeforeAction'] = $this->cpuUsageBeforeAction;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceAdvisors
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CpuUsageAfterAction'])) {
            $model->cpuUsageAfterAction = $map['CpuUsageAfterAction'];
        }
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['DestinationDedicatedHostId'])) {
            $model->destinationDedicatedHostId = $map['DestinationDedicatedHostId'];
        }
        if (isset($map['SourceDedicatedInstanceId'])) {
            $model->sourceDedicatedInstanceId = $map['SourceDedicatedInstanceId'];
        }
        if (isset($map['ActionDescription'])) {
            $model->actionDescription = $map['ActionDescription'];
        }
        if (isset($map['SourceDedicatedInstanceRole'])) {
            $model->sourceDedicatedInstanceRole = $map['SourceDedicatedInstanceRole'];
        }
        if (isset($map['SourceDedicatedHostId'])) {
            $model->sourceDedicatedHostId = $map['SourceDedicatedHostId'];
        }
        if (isset($map['CpuUsageBeforeAction'])) {
            $model->cpuUsageBeforeAction = $map['CpuUsageBeforeAction'];
        }

        return $model;
    }
}
