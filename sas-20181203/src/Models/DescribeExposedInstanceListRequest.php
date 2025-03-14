<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeExposedInstanceListRequest extends Model
{
    /**
     * @description The type of the asset. Valid values:
     *
     *   **0**: an Elastic Compute Service (ECS) instance.
     *   **3**: an ApsaraDB RDS instance.
     *   **4**: an ApsaraDB for MongoDB instance.
     *   **5**: an ApsaraDB for Redis instance.
     *
     * @example 0
     *
     * @var string
     */
    public $assetType;

    /**
     * @description Specifies whether the asset has Cloud Security Posture Management (CSPM) risks. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $cspmStatus;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The server component that is exposed on the Internet.
     *
     * @example openssl
     *
     * @var string
     */
    public $exposureComponent;

    /**
     * @description The public IP address of the server or the public endpoint of the database.
     *
     * @example 116.12.XX.XX
     *
     * @var string
     */
    public $exposureIp;

    /**
     * @description The port that is exposed on the Internet.
     *
     * @example 22
     *
     * @var string
     */
    public $exposurePort;

    /**
     * @description The ID of the server group.
     *
     * > You can call the [DescribeAllGroups](~~DescribeAllGroups~~) operation to query the IDs of server groups.
     *
     * @example 9535356
     *
     * @var int
     */
    public $groupId;

    /**
     * @description Specifies whether the asset has weak password risks. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example Unhealthy
     *
     * @var bool
     */
    public $healthStatus;

    /**
     * @description The instance ID of the asset.
     *
     * @example i-bp1g6wxdwps7s9dz****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the asset.
     *
     * @example abc_centos7.2_005
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The number of entries to return on each page. Default value: 20. If you leave this parameter empty, 20 entries are returned on each page.
     *
     * >  We recommend that you do not leave this parameter empty.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The Alibaba Cloud account ID of the member in the resource directory.
     *
     * >  You can call the [DescribeMonitorAccounts](~~DescribeMonitorAccounts~~) operation to obtain the ID.
     *
     * @example 16670360956*****
     *
     * @var int
     */
    public $resourceDirectoryAccountId;

    /**
     * @description Specifies whether the asset has vulnerabilities. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $vulStatus;
    protected $_name = [
        'assetType' => 'AssetType',
        'cspmStatus' => 'CspmStatus',
        'currentPage' => 'CurrentPage',
        'exposureComponent' => 'ExposureComponent',
        'exposureIp' => 'ExposureIp',
        'exposurePort' => 'ExposurePort',
        'groupId' => 'GroupId',
        'healthStatus' => 'HealthStatus',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'pageSize' => 'PageSize',
        'resourceDirectoryAccountId' => 'ResourceDirectoryAccountId',
        'vulStatus' => 'VulStatus',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribeExposedInstanceListRequest
     */
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
