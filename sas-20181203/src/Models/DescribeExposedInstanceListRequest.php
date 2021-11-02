<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeExposedInstanceListRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $exposureComponent;

    /**
     * @var string
     */
    public $exposureIp;

    /**
     * @var string
     */
    public $exposurePort;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var bool
     */
    public $healthStatus;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var bool
     */
    public $vulStatus;
    protected $_name = [
        'currentPage'       => 'CurrentPage',
        'exposureComponent' => 'ExposureComponent',
        'exposureIp'        => 'ExposureIp',
        'exposurePort'      => 'ExposurePort',
        'groupId'           => 'GroupId',
        'healthStatus'      => 'HealthStatus',
        'instanceId'        => 'InstanceId',
        'instanceName'      => 'InstanceName',
        'pageSize'          => 'PageSize',
        'vulStatus'         => 'VulStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->exposureComponent) {
            $res['ExposureComponent'] = $this->exposureComponent;
        }
        if (null !== $this->exposureIp) {
            $res['ExposureIp'] = $this->exposureIp;
        }
        if (null !== $this->exposurePort) {
            $res['ExposurePort'] = $this->exposurePort;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->healthStatus) {
            $res['HealthStatus'] = $this->healthStatus;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->vulStatus) {
            $res['VulStatus'] = $this->vulStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeExposedInstanceListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['ExposureComponent'])) {
            $model->exposureComponent = $map['ExposureComponent'];
        }
        if (isset($map['ExposureIp'])) {
            $model->exposureIp = $map['ExposureIp'];
        }
        if (isset($map['ExposurePort'])) {
            $model->exposurePort = $map['ExposurePort'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['HealthStatus'])) {
            $model->healthStatus = $map['HealthStatus'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['VulStatus'])) {
            $model->vulStatus = $map['VulStatus'];
        }

        return $model;
    }
}
