<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWarningMachinesResponseBody;

use AlibabaCloud\Tea\Model;

class warningMachines extends Model
{
    /**
     * @description The edition of Security Center that is authorized to protect the asset. Valid values:
     *
     *   **1**: Basic edition
     *   **6**: Anti-virus edition
     *   **5**: Advanced edition
     *   **3**: Enterprise edition
     *   **7**: Ultimate edition
     *   **10**: Value-added Plan edition
     *
     * @example 7
     *
     * @var int
     */
    public $authVersion;

    /**
     * @description Indicates whether Security Center is authorized to protect the asset. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $bind;

    /**
     * @description The ID of the container.
     *
     * @example 48a6d9a92435a13ad573372c3f3c63b7e04d106458141df9f92155709d******
     *
     * @var string
     */
    public $containerId;

    /**
     * @description The name of container.
     *
     * @example redis
     *
     * @var string
     */
    public $containerName;

    /**
     * @description The number of **high-risk** items on the server.
     *
     * @example 10
     *
     * @var int
     */
    public $highWarningCount;

    /**
     * @description The ID of the server.
     *
     * @example i-m5ee8b9nr3h30mhb****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the server.
     *
     * @example oracle-win-00****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The public IP address of the server.
     *
     * @example 1.2.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The private IP address of the server.
     *
     * @example 1.2.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The number of **low-risk** items on the server.
     *
     * @example 3
     *
     * @var int
     */
    public $lowWarningCount;

    /**
     * @description The number of **medium-risk** items on the server.
     *
     * @example 2
     *
     * @var int
     */
    public $mediumWarningCount;

    /**
     * @description The number of the check items that passed the baseline check on the server.
     *
     * @example 10
     *
     * @var int
     */
    public $passCount;

    /**
     * @description Indicates whether a port on the server is accessible over the Internet. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $portOpen;

    /**
     * @description The ID of the region in which the server is deployed.
     *
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The verification status of the risk item after the risk item is fixed. Valid values:
     *
     *   **1**: complete
     *   **2**: verifying
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The UUID of the server on which the baseline check is performed.
     *
     * @example 9888955c-0076-49da-bd9c-34f5492b****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'authVersion'        => 'AuthVersion',
        'bind'               => 'Bind',
        'containerId'        => 'ContainerId',
        'containerName'      => 'ContainerName',
        'highWarningCount'   => 'HighWarningCount',
        'instanceId'         => 'InstanceId',
        'instanceName'       => 'InstanceName',
        'internetIp'         => 'InternetIp',
        'intranetIp'         => 'IntranetIp',
        'lowWarningCount'    => 'LowWarningCount',
        'mediumWarningCount' => 'MediumWarningCount',
        'passCount'          => 'PassCount',
        'portOpen'           => 'PortOpen',
        'regionId'           => 'RegionId',
        'status'             => 'Status',
        'uuid'               => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authVersion) {
            $res['AuthVersion'] = $this->authVersion;
        }
        if (null !== $this->bind) {
            $res['Bind'] = $this->bind;
        }
        if (null !== $this->containerId) {
            $res['ContainerId'] = $this->containerId;
        }
        if (null !== $this->containerName) {
            $res['ContainerName'] = $this->containerName;
        }
        if (null !== $this->highWarningCount) {
            $res['HighWarningCount'] = $this->highWarningCount;
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
        if (null !== $this->lowWarningCount) {
            $res['LowWarningCount'] = $this->lowWarningCount;
        }
        if (null !== $this->mediumWarningCount) {
            $res['MediumWarningCount'] = $this->mediumWarningCount;
        }
        if (null !== $this->passCount) {
            $res['PassCount'] = $this->passCount;
        }
        if (null !== $this->portOpen) {
            $res['PortOpen'] = $this->portOpen;
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
     * @return warningMachines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthVersion'])) {
            $model->authVersion = $map['AuthVersion'];
        }
        if (isset($map['Bind'])) {
            $model->bind = $map['Bind'];
        }
        if (isset($map['ContainerId'])) {
            $model->containerId = $map['ContainerId'];
        }
        if (isset($map['ContainerName'])) {
            $model->containerName = $map['ContainerName'];
        }
        if (isset($map['HighWarningCount'])) {
            $model->highWarningCount = $map['HighWarningCount'];
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
        if (isset($map['LowWarningCount'])) {
            $model->lowWarningCount = $map['LowWarningCount'];
        }
        if (isset($map['MediumWarningCount'])) {
            $model->mediumWarningCount = $map['MediumWarningCount'];
        }
        if (isset($map['PassCount'])) {
            $model->passCount = $map['PassCount'];
        }
        if (isset($map['PortOpen'])) {
            $model->portOpen = $map['PortOpen'];
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
