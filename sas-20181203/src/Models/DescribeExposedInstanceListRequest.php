<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeExposedInstanceListRequest extends Model
{
    /**
     * @var string
     */
    public $assetType;
    /**
     * @var bool
     */
    public $cspmStatus;
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
     * @var int
     */
    public $resourceDirectoryAccountId;
    /**
     * @var bool
     */
    public $vulStatus;
    protected $_name = [
        'assetType'                  => 'AssetType',
        'cspmStatus'                 => 'CspmStatus',
        'currentPage'                => 'CurrentPage',
        'exposureComponent'          => 'ExposureComponent',
        'exposureIp'                 => 'ExposureIp',
        'exposurePort'               => 'ExposurePort',
        'groupId'                    => 'GroupId',
        'healthStatus'               => 'HealthStatus',
        'instanceId'                 => 'InstanceId',
        'instanceName'               => 'InstanceName',
        'pageSize'                   => 'PageSize',
        'resourceDirectoryAccountId' => 'ResourceDirectoryAccountId',
        'vulStatus'                  => 'VulStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }

        if (null !== $this->cspmStatus) {
            $res['CspmStatus'] = $this->cspmStatus;
        }

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

        if (null !== $this->resourceDirectoryAccountId) {
            $res['ResourceDirectoryAccountId'] = $this->resourceDirectoryAccountId;
        }

        if (null !== $this->vulStatus) {
            $res['VulStatus'] = $this->vulStatus;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }

        if (isset($map['CspmStatus'])) {
            $model->cspmStatus = $map['CspmStatus'];
        }

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

        if (isset($map['ResourceDirectoryAccountId'])) {
            $model->resourceDirectoryAccountId = $map['ResourceDirectoryAccountId'];
        }

        if (isset($map['VulStatus'])) {
            $model->vulStatus = $map['VulStatus'];
        }

        return $model;
    }
}
