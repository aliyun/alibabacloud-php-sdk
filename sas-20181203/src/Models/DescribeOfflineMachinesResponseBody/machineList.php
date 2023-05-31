<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeOfflineMachinesResponseBody;

use AlibabaCloud\Tea\Model;

class machineList extends Model
{
    /**
     * @description The ID of the server.
     *
     * @example sas-bdrvxb4b****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the server.
     *
     * @example sql-test-001
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The public IP address of the server.
     *
     * @example 120.79.XX.XX
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
     * @description The region in which the server resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $machineRegion;

    /**
     * @description The operating system of the server. Valid values:
     *
     *   **linux**
     *   **windows**
     *   **windows-2003**
     *
     * @example linux
     *
     * @var string
     */
    public $os;

    /**
     * @description The ID of the region in which the server resides.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The UUID of the server.
     *
     * @example 6d5b361f-958d-48a8-a9d2-d6e82c1****
     *
     * @var string
     */
    public $uuid;

    /**
     * @description The source of the server. Valid values:
     *
     *   **0**: an asset provided by Alibaba Cloud.
     *   **1**: a third-party cloud server
     *   **2**: a server in a data center
     *   **3**, **4**, **5**, and **7**: other cloud asset
     *   **8**: a lightweight asset
     *
     * @example 0
     *
     * @var int
     */
    public $vendor;

    /**
     * @description The name of the service provider (SP) for the server.
     *
     * Valid values:
     *
     *   **ALIYUN**: Alibaba Cloud
     *   **OUT**: a third-party service provider
     *   **IDC**: a data center
     *   **TENCENT**: Tencent Cloud
     *   **HUAWEICLOUD**: Huawei Cloud
     *   **Microsoft**: Microsoft
     *   **AWS**: Amazon Web Services (AWS)
     *   **TRIPARTITE**: a lightweight server
     *
     * @example ALIYUN
     *
     * @var string
     */
    public $vendorName;
    protected $_name = [
        'instanceId'    => 'InstanceId',
        'instanceName'  => 'InstanceName',
        'internetIp'    => 'InternetIp',
        'intranetIp'    => 'IntranetIp',
        'machineRegion' => 'MachineRegion',
        'os'            => 'Os',
        'regionId'      => 'RegionId',
        'uuid'          => 'Uuid',
        'vendor'        => 'Vendor',
        'vendorName'    => 'VendorName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->machineRegion) {
            $res['MachineRegion'] = $this->machineRegion;
        }
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }
        if (null !== $this->vendorName) {
            $res['VendorName'] = $this->vendorName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return machineList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['MachineRegion'])) {
            $model->machineRegion = $map['MachineRegion'];
        }
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }
        if (isset($map['VendorName'])) {
            $model->vendorName = $map['VendorName'];
        }

        return $model;
    }
}
