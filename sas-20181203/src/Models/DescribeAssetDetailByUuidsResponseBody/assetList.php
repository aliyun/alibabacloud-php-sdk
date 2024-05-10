<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAssetDetailByUuidsResponseBody;

use AlibabaCloud\Tea\Model;

class assetList extends Model
{
    /**
     * @description The type of the asset.
     *
     * The value is fixed as **0**, which indicates ECS instances.
     * @example 0
     *
     * @var string
     */
    public $assetType;

    /**
     * @description The status of the Security Center agent. Valid values:
     *
     *   **online**
     *   **offline**
     *
     * @example online
     *
     * @var string
     */
    public $clientStatus;

    /**
     * @description The type of the asset by source. Valid values:
     *
     *   **0**: The asset is provided by Alibaba Cloud.
     *   **1**: The asset is not provided by Alibaba Cloud.
     *   **2**: The asset resides in a data center.
     *   **3**, **4**, **5**, and **7**: other cloud asset.
     *   **8**: light-weight assets.
     *
     * @example 0
     *
     * @var int
     */
    public $flag;

    /**
     * @description The ID of the ECS instance.
     *
     * @example i-rj9gda4wolo0zixi****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the ECS instance.
     *
     * @example TestInstanceName
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The public IP address of the ECS instance.
     *
     * @example 10.10.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The private IP address of the ECS instance.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The IP address of the ECS instance.
     *
     * >  If the ECS instance has a public IP address, the value of this parameter is the public IP address of the ECS instance. If the ECS instance does not have a public IP address, the value of this parameter is the private IP address of the ECS instance.
     * @example 10.10.XX.XX
     *
     * @var string
     */
    public $ip;

    /**
     * @description The operating system of the ECS instance.
     *
     * @example Linux
     *
     * @var string
     */
    public $os;

    /**
     * @description The name of the operating system run by the ECS instance.
     *
     * @example CentOS 7.6 64-bit
     *
     * @var string
     */
    public $osName;

    /**
     * @description The region in which the ECS instance resides.
     *
     * @example cn-guangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The region in which the ECS instance resides.
     *
     * >  For more information about the mapping between region IDs and region names, see [Regions and zones](https://help.aliyun.com/document_detail/40654.html).
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the region in which the ECS instance resides.
     *
     * @example cn-shenzhen
     *
     * @var string
     */
    public $regionName;

    /**
     * @description The UUID of the ECS instance.
     *
     * @example 2a98f149-0256-414c-a29a-a69f8a75****
     *
     * @var string
     */
    public $uuid;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * @example 13231-331331
     *
     * @var string
     */
    public $vpcInstanceId;
    protected $_name = [
        'assetType'     => 'AssetType',
        'clientStatus'  => 'ClientStatus',
        'flag'          => 'Flag',
        'instanceId'    => 'InstanceId',
        'instanceName'  => 'InstanceName',
        'internetIp'    => 'InternetIp',
        'intranetIp'    => 'IntranetIp',
        'ip'            => 'Ip',
        'os'            => 'Os',
        'osName'        => 'OsName',
        'region'        => 'Region',
        'regionId'      => 'RegionId',
        'regionName'    => 'RegionName',
        'uuid'          => 'Uuid',
        'vpcInstanceId' => 'VpcInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }
        if (null !== $this->clientStatus) {
            $res['ClientStatus'] = $this->clientStatus;
        }
        if (null !== $this->flag) {
            $res['Flag'] = $this->flag;
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
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }
        if (null !== $this->osName) {
            $res['OsName'] = $this->osName;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->vpcInstanceId) {
            $res['VpcInstanceId'] = $this->vpcInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return assetList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }
        if (isset($map['ClientStatus'])) {
            $model->clientStatus = $map['ClientStatus'];
        }
        if (isset($map['Flag'])) {
            $model->flag = $map['Flag'];
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
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }
        if (isset($map['OsName'])) {
            $model->osName = $map['OsName'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['VpcInstanceId'])) {
            $model->vpcInstanceId = $map['VpcInstanceId'];
        }

        return $model;
    }
}
