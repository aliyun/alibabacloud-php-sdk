<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedInstanceListResponseBody;

use AlibabaCloud\Tea\Model;

class exposedInstances extends Model
{
    /**
     * @description The number of high-severity vulnerabilities that are exposed on the Internet and can be exploited by attackers.
     *
     * @example 0
     *
     * @var int
     */
    public $asapVulCount;

    /**
     * @description The type of the asset. Valid values:
     *
     *   **0**: an ECS instance.
     *   **1**: a SLB instance.
     *   **2**: a NAT gateway.
     *   **3**: an ApsaraDB RDS instance.
     *   **4**: an ApsaraDB for MongoDB instance.
     *   **5**: an ApsaraDB for Redis instance.
     *   **6**: a container image.
     *   **7**: a container.
     *
     * @example 0
     *
     * @var int
     */
    public $assetType;

    /**
     * @description The JSON string that specifies the information about a database asset, which contains the following fields.
     *
     *   assetSubType: the asset subtype.
     *   assetSubTypeName: the name of the asset subtype.
     *   assetType: the type of the asset.
     *   assetTypeName: the name of the asset type.
     *   vendor: the service provider of the asset.
     *
     * @example {assetSubTypeName":"INSTANCE","assetType":3,"assetTypeName":"RDS","vendor":0}
     *
     * @var string
     */
    public $cloudAssetInfo;

    /**
     * @description The number of CSPM risks.
     *
     * @example 0
     *
     * @var int
     */
    public $cspmAlarmCount;

    /**
     * @description The number of weak password risks.
     *
     * @example 0
     *
     * @var int
     */
    public $exploitHealthCount;

    /**
     * @description The server component that is exposed on the Internet.
     *
     * @example openssl,openssh
     *
     * @var string
     */
    public $exposureComponent;

    /**
     * @description The public IP address that is exposed on the Internet.
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
     * @description The resource from which the asset is exposed. Valid values:
     *
     *   **INTERNET_IP**: the public IP address of an ECS instance.
     *   **SLB**: the public IP address of a Server Load Balancer (SLB) instance.
     *   **EIP**: an elastic IP address (EIP).
     *   **DNAT**: the NAT gateway that connects to the Internet by using the Destination Network Address Translation (DNAT) feature.
     *   **DB_CONNECTION**: the public endpoint of a database.
     *
     * @example INTERNET_IP
     *
     * @var string
     */
    public $exposureType;

    /**
     * @description The ID of the instance to which the resource belongs. The valid values of this parameter vary based on the value of the ExposureType parameter.
     *
     *   If the value of the ExposureType parameter is **INTERNET_IP**, this parameter is empty.
     *   If the value of the ExposureType parameter is **SLB**, the value of this parameter is the ID of the SLB instance.
     *   If the value of the ExposureType parameter is **EIP**, the value of this parameter is the ID of the EIP.
     *   If the value of the ExposureType parameter is **DNAT**, the value of this parameter is the ID of the NAT gateway.
     *   If the value of the ExposureType parameter is **DB_CONNECTION**, the value of this parameter is the ID of the database.
     *
     * @example i-ew11313a****
     *
     * @var string
     */
    public $exposureTypeId;

    /**
     * @description The ID of the server group.
     *
     * @example 9469268
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The name of the server group.
     *
     * @example testGroup
     *
     * @var string
     */
    public $groupName;

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
     * @description The public IP address of the server.
     *
     * @example 116.12.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The private IP address of the server.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The number of medium-severity vulnerabilities that are exposed on the Internet and can be exploited by attackers.
     *
     * @example 0
     *
     * @var int
     */
    public $laterVulCount;

    /**
     * @description The number of low-severity vulnerabilities that are exposed on the Internet and can be exploited by attackers.
     *
     * @example 0
     *
     * @var int
     */
    public $nntfVulCount;

    /**
     * @description The ID of the region in which the asset resides.
     *
     * >  For more information about the mapping between region IDs and region names, see [Regions and zones](https://help.aliyun.com/document_detail/40654.html).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The total number of vulnerabilities that are exposed on the Internet and can be exploited by attackers.
     *
     * @example 0
     *
     * @var int
     */
    public $totalVulCount;

    /**
     * @description The UUID of the server or the instance ID of the cloud service.
     *
     * @example dd803d9e-a337-4add-9c5b-7d503e08****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'asapVulCount' => 'AsapVulCount',
        'assetType' => 'AssetType',
        'cloudAssetInfo' => 'CloudAssetInfo',
        'cspmAlarmCount' => 'CspmAlarmCount',
        'exploitHealthCount' => 'ExploitHealthCount',
        'exposureComponent' => 'ExposureComponent',
        'exposureIp' => 'ExposureIp',
        'exposurePort' => 'ExposurePort',
        'exposureType' => 'ExposureType',
        'exposureTypeId' => 'ExposureTypeId',
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'internetIp' => 'InternetIp',
        'intranetIp' => 'IntranetIp',
        'laterVulCount' => 'LaterVulCount',
        'nntfVulCount' => 'NntfVulCount',
        'regionId' => 'RegionId',
        'totalVulCount' => 'TotalVulCount',
        'uuid' => 'Uuid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->asapVulCount) {
            $res['AsapVulCount'] = $this->asapVulCount;
        }
        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }
        if (null !== $this->cloudAssetInfo) {
            $res['CloudAssetInfo'] = $this->cloudAssetInfo;
        }
        if (null !== $this->cspmAlarmCount) {
            $res['CspmAlarmCount'] = $this->cspmAlarmCount;
        }
        if (null !== $this->exploitHealthCount) {
            $res['ExploitHealthCount'] = $this->exploitHealthCount;
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
        if (null !== $this->exposureType) {
            $res['ExposureType'] = $this->exposureType;
        }
        if (null !== $this->exposureTypeId) {
            $res['ExposureTypeId'] = $this->exposureTypeId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->laterVulCount) {
            $res['LaterVulCount'] = $this->laterVulCount;
        }
        if (null !== $this->nntfVulCount) {
            $res['NntfVulCount'] = $this->nntfVulCount;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->totalVulCount) {
            $res['TotalVulCount'] = $this->totalVulCount;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return exposedInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsapVulCount'])) {
            $model->asapVulCount = $map['AsapVulCount'];
        }
        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }
        if (isset($map['CloudAssetInfo'])) {
            $model->cloudAssetInfo = $map['CloudAssetInfo'];
        }
        if (isset($map['CspmAlarmCount'])) {
            $model->cspmAlarmCount = $map['CspmAlarmCount'];
        }
        if (isset($map['ExploitHealthCount'])) {
            $model->exploitHealthCount = $map['ExploitHealthCount'];
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
        if (isset($map['ExposureType'])) {
            $model->exposureType = $map['ExposureType'];
        }
        if (isset($map['ExposureTypeId'])) {
            $model->exposureTypeId = $map['ExposureTypeId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['LaterVulCount'])) {
            $model->laterVulCount = $map['LaterVulCount'];
        }
        if (isset($map['NntfVulCount'])) {
            $model->nntfVulCount = $map['NntfVulCount'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TotalVulCount'])) {
            $model->totalVulCount = $map['TotalVulCount'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
