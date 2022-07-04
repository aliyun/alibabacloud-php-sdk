<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceIpAddressRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $ddosRegionId;

    /**
     * @var string
     */
    public $ddosStatus;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceIp;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'currentPage'  => 'CurrentPage',
        'ddosRegionId' => 'DdosRegionId',
        'ddosStatus'   => 'DdosStatus',
        'instanceId'   => 'InstanceId',
        'instanceIp'   => 'InstanceIp',
        'instanceName' => 'InstanceName',
        'instanceType' => 'InstanceType',
        'pageSize'     => 'PageSize',
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
        if (null !== $this->ddosRegionId) {
            $res['DdosRegionId'] = $this->ddosRegionId;
        }
        if (null !== $this->ddosStatus) {
            $res['DdosStatus'] = $this->ddosStatus;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceIp) {
            $res['InstanceIp'] = $this->instanceIp;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceIpAddressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['DdosRegionId'])) {
            $model->ddosRegionId = $map['DdosRegionId'];
        }
        if (isset($map['DdosStatus'])) {
            $model->ddosStatus = $map['DdosStatus'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceIp'])) {
            $model->instanceIp = $map['InstanceIp'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
