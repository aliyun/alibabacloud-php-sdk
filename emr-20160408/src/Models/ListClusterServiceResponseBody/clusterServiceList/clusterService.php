<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceResponseBody\clusterServiceList;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceResponseBody\clusterServiceList\clusterService\serviceActionList;
use AlibabaCloud\Tea\Model;

class clusterService extends Model
{
    /**
     * @var int
     */
    public $abnormalNum;

    /**
     * @var bool
     */
    public $clientType;

    /**
     * @var string
     */
    public $healthStatus;

    /**
     * @var bool
     */
    public $installStatus;

    /**
     * @var string
     */
    public $needRestartInfo;

    /**
     * @var int
     */
    public $needRestartNum;

    /**
     * @var string
     */
    public $notStartInfo;

    /**
     * @var serviceActionList
     */
    public $serviceActionList;

    /**
     * @var string
     */
    public $serviceDisplayName;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $serviceStatus;

    /**
     * @var string
     */
    public $serviceVersion;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $stoppedNum;
    protected $_name = [
        'abnormalNum'        => 'AbnormalNum',
        'clientType'         => 'ClientType',
        'healthStatus'       => 'HealthStatus',
        'installStatus'      => 'InstallStatus',
        'needRestartInfo'    => 'NeedRestartInfo',
        'needRestartNum'     => 'NeedRestartNum',
        'notStartInfo'       => 'NotStartInfo',
        'serviceActionList'  => 'ServiceActionList',
        'serviceDisplayName' => 'ServiceDisplayName',
        'serviceName'        => 'ServiceName',
        'serviceStatus'      => 'ServiceStatus',
        'serviceVersion'     => 'ServiceVersion',
        'state'              => 'State',
        'stoppedNum'         => 'StoppedNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->abnormalNum) {
            $res['AbnormalNum'] = $this->abnormalNum;
        }
        if (null !== $this->clientType) {
            $res['ClientType'] = $this->clientType;
        }
        if (null !== $this->healthStatus) {
            $res['HealthStatus'] = $this->healthStatus;
        }
        if (null !== $this->installStatus) {
            $res['InstallStatus'] = $this->installStatus;
        }
        if (null !== $this->needRestartInfo) {
            $res['NeedRestartInfo'] = $this->needRestartInfo;
        }
        if (null !== $this->needRestartNum) {
            $res['NeedRestartNum'] = $this->needRestartNum;
        }
        if (null !== $this->notStartInfo) {
            $res['NotStartInfo'] = $this->notStartInfo;
        }
        if (null !== $this->serviceActionList) {
            $res['ServiceActionList'] = null !== $this->serviceActionList ? $this->serviceActionList->toMap() : null;
        }
        if (null !== $this->serviceDisplayName) {
            $res['ServiceDisplayName'] = $this->serviceDisplayName;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->serviceStatus) {
            $res['ServiceStatus'] = $this->serviceStatus;
        }
        if (null !== $this->serviceVersion) {
            $res['ServiceVersion'] = $this->serviceVersion;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->stoppedNum) {
            $res['StoppedNum'] = $this->stoppedNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterService
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbnormalNum'])) {
            $model->abnormalNum = $map['AbnormalNum'];
        }
        if (isset($map['ClientType'])) {
            $model->clientType = $map['ClientType'];
        }
        if (isset($map['HealthStatus'])) {
            $model->healthStatus = $map['HealthStatus'];
        }
        if (isset($map['InstallStatus'])) {
            $model->installStatus = $map['InstallStatus'];
        }
        if (isset($map['NeedRestartInfo'])) {
            $model->needRestartInfo = $map['NeedRestartInfo'];
        }
        if (isset($map['NeedRestartNum'])) {
            $model->needRestartNum = $map['NeedRestartNum'];
        }
        if (isset($map['NotStartInfo'])) {
            $model->notStartInfo = $map['NotStartInfo'];
        }
        if (isset($map['ServiceActionList'])) {
            $model->serviceActionList = serviceActionList::fromMap($map['ServiceActionList']);
        }
        if (isset($map['ServiceDisplayName'])) {
            $model->serviceDisplayName = $map['ServiceDisplayName'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['ServiceStatus'])) {
            $model->serviceStatus = $map['ServiceStatus'];
        }
        if (isset($map['ServiceVersion'])) {
            $model->serviceVersion = $map['ServiceVersion'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['StoppedNum'])) {
            $model->stoppedNum = $map['StoppedNum'];
        }

        return $model;
    }
}
