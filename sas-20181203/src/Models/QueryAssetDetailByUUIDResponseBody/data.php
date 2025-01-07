<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\QueryAssetDetailByUUIDResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the user.
     *
     * @example 1766185894104***
     *
     * @var int
     */
    public $aliUid;

    /**
     * @description The edition of Security Center that is authorized to protect the asset. Valid values:
     *
     *   **1**: Basic.
     *   **6**: Anti-virus.
     *   **5**: Advanced.
     *   **3**: Enterprise.
     *   **7**: Ultimate.
     *   **10**: Value-added Plan.
     *
     * @example 3
     *
     * @var int
     */
    public $authVersion;

    /**
     * @description The virtual network operator (VNO).
     *
     * @example 26842
     *
     * @var string
     */
    public $bid;

    /**
     * @description Indicates whether Security Center is authorized to protect the asset. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $bind;

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
     * @description The ID of the cluster.
     *
     * @example c8ca91e0907d94efaba7fb0827eb9****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The IP address of the elastic network interface (ENI).
     *
     * @example 116.162.XX.XX
     *
     * @var string
     */
    public $eip;

    /**
     * @description Indicates whether the asset is provided by Alibaba Cloud. Valid values:
     *
     *   **0**: yes.
     *   **1**: no.
     *
     * @example 0
     *
     * @var int
     */
    public $flag;

    /**
     * @description The time at which the asset was created.
     *
     * @example 2022-10-16 18:17:16
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time at which the asset was modified.
     *
     * @example 2022-11-21 10:40:01
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the group to which the server belongs.
     *
     * @example 12208928
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The ID of the asset.
     *
     * @example 443496
     *
     * @var int
     */
    public $id;

    /**
     * @description The public IP address.
     *
     * @example 172.16.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The private IP address.
     *
     * @example 10.42.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The instance ID of the server.
     *
     * @example c8ca91e0907d94efaba7fb0827eb9
     *
     * @var string
     */
    public $machineInstanceId;

    /**
     * @description The IP address of the server.
     *
     * @example 172.16.XX.XX
     *
     * @var string
     */
    public $machineIp;

    /**
     * @description The type of the IP address for the server. Valid values include the following values:
     *
     *   **ecs**: the IP address of the Elastic Compute Service (ECS) instance.
     *   **slb**: the IP address of the Server Load Balancer (SLB) instance.
     *
     * @example SLB
     *
     * @var string
     */
    public $machineIpType;

    /**
     * @description The name of the server.
     *
     * @example security
     *
     * @var string
     */
    public $machineName;

    /**
     * @description The region in which the server resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $machineRegion;

    /**
     * @description The instance type of the server. Valid values include the following values:
     *
     *   **ecs**
     *   **slb**
     *
     * @example ecs
     *
     * @var string
     */
    public $machineType;

    /**
     * @description Indicates whether the Security Center agent is online. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $online;

    /**
     * @description The operating system of the server.
     *
     * @example linux
     *
     * @var string
     */
    public $os;

    /**
     * @description The name of the operating system for the server.
     *
     * @example Debian  10.3 64
     *
     * @var string
     */
    public $osName;

    /**
     * @description The ID of the region in which the server resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The status of the server. Valid values include the following values:
     *
     *   **Running**
     *   **Waiting**
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description The UUID of the asset.
     *
     * @example 6690a46c-0edb-4663-a641-3629d1a9****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'aliUid'            => 'AliUid',
        'authVersion'       => 'AuthVersion',
        'bid'               => 'Bid',
        'bind'              => 'Bind',
        'clientStatus'      => 'ClientStatus',
        'clusterId'         => 'ClusterId',
        'eip'               => 'Eip',
        'flag'              => 'Flag',
        'gmtCreate'         => 'GmtCreate',
        'gmtModified'       => 'GmtModified',
        'groupId'           => 'GroupId',
        'id'                => 'Id',
        'internetIp'        => 'InternetIp',
        'intranetIp'        => 'IntranetIp',
        'machineInstanceId' => 'MachineInstanceId',
        'machineIp'         => 'MachineIp',
        'machineIpType'     => 'MachineIpType',
        'machineName'       => 'MachineName',
        'machineRegion'     => 'MachineRegion',
        'machineType'       => 'MachineType',
        'online'            => 'Online',
        'os'                => 'Os',
        'osName'            => 'OsName',
        'regionId'          => 'RegionId',
        'status'            => 'Status',
        'uuid'              => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->authVersion) {
            $res['AuthVersion'] = $this->authVersion;
        }
        if (null !== $this->bid) {
            $res['Bid'] = $this->bid;
        }
        if (null !== $this->bind) {
            $res['Bind'] = $this->bind;
        }
        if (null !== $this->clientStatus) {
            $res['ClientStatus'] = $this->clientStatus;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->eip) {
            $res['Eip'] = $this->eip;
        }
        if (null !== $this->flag) {
            $res['Flag'] = $this->flag;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->machineInstanceId) {
            $res['MachineInstanceId'] = $this->machineInstanceId;
        }
        if (null !== $this->machineIp) {
            $res['MachineIp'] = $this->machineIp;
        }
        if (null !== $this->machineIpType) {
            $res['MachineIpType'] = $this->machineIpType;
        }
        if (null !== $this->machineName) {
            $res['MachineName'] = $this->machineName;
        }
        if (null !== $this->machineRegion) {
            $res['MachineRegion'] = $this->machineRegion;
        }
        if (null !== $this->machineType) {
            $res['MachineType'] = $this->machineType;
        }
        if (null !== $this->online) {
            $res['Online'] = $this->online;
        }
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }
        if (null !== $this->osName) {
            $res['OsName'] = $this->osName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['AuthVersion'])) {
            $model->authVersion = $map['AuthVersion'];
        }
        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
        }
        if (isset($map['Bind'])) {
            $model->bind = $map['Bind'];
        }
        if (isset($map['ClientStatus'])) {
            $model->clientStatus = $map['ClientStatus'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Eip'])) {
            $model->eip = $map['Eip'];
        }
        if (isset($map['Flag'])) {
            $model->flag = $map['Flag'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['MachineInstanceId'])) {
            $model->machineInstanceId = $map['MachineInstanceId'];
        }
        if (isset($map['MachineIp'])) {
            $model->machineIp = $map['MachineIp'];
        }
        if (isset($map['MachineIpType'])) {
            $model->machineIpType = $map['MachineIpType'];
        }
        if (isset($map['MachineName'])) {
            $model->machineName = $map['MachineName'];
        }
        if (isset($map['MachineRegion'])) {
            $model->machineRegion = $map['MachineRegion'];
        }
        if (isset($map['MachineType'])) {
            $model->machineType = $map['MachineType'];
        }
        if (isset($map['Online'])) {
            $model->online = $map['Online'];
        }
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }
        if (isset($map['OsName'])) {
            $model->osName = $map['OsName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
