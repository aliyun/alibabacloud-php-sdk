<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedInstanceDetailResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedInstanceDetailResponseBody\exposedChains\allVulList;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedInstanceDetailResponseBody\exposedChains\realVulList;
use AlibabaCloud\Tea\Model;

class exposedChains extends Model
{
    /**
     * @description The details of all vulnerabilities on the server.
     *
     * @var allVulList[]
     */
    public $allVulList;

    /**
     * @description The server component that is exposed on the Internet.
     *
     * @example openssl,openssh
     *
     * @var string
     */
    public $exposureComponent;

    /**
     * @description The IP address that is exposed.
     *
     * @example 47.99.XX.XX
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
     * @description The resource from which the server is exposed. Valid values:
     *
     *   **INTERNET_IP**: the public IP address of an Elastic Compute Service (ECS) instance
     *   **SLB**: the public IP address of a Server Load Balancer (SLB) instance
     *   **EIP**: an elastic IP address (EIP)
     *   **DNAT**: the NAT gateway that connects to the Internet by using the DNAT feature
     *
     * @example INTERNET_IP
     *
     * @var string
     */
    public $exposureType;

    /**
     * @description The ID of the instance to which the resource belongs. The valid values of this parameter vary based on the ExposureType parameter.
     *
     *   If the value of the ExposureType parameter is **INTERNET_IP**, this parameter is empty.
     *   If the value of the ExposureType parameter is **SLB**, the value of this parameter is the ID of the SLB instance.
     *   If the value of the ExposureType parameter is **EIP**, the value of this parameter is the ID of the EIP.
     *   If the value of the ExposureType parameter is **DNAT**, the value of this parameter is the ID of the NAT gateway.
     *
     * @example eip-bp1bkgowzam49rld3****
     *
     * @var string
     */
    public $exposureTypeId;

    /**
     * @description The server group to which the server belongs.
     *
     * @example sg-bp1iw5enua6gf5i2xr7z
     *
     * @var string
     */
    public $groupNo;

    /**
     * @description The instance ID of the server.
     *
     * @example i-bp116qem8npvchqc****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the server.
     *
     * @example worker-k8s-for-cs-c929ee2a145214f89a8b248005be5****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The public IP address of the server.
     *
     * @example 47.99.XX.XX
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
     * @description The information about the vulnerabilities that are exposed on the Internet and can be exploited by attackers.
     *
     * @var realVulList[]
     */
    public $realVulList;

    /**
     * @description The region in which the server resides.
     *
     * > For more information about the mapping between region IDs and region names, see [Regions and zones](~~40654~~).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The UUID of the server.
     *
     * @example 4f9ce097-4a7d-48fe-baef-6960e5b6****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'allVulList'        => 'AllVulList',
        'exposureComponent' => 'ExposureComponent',
        'exposureIp'        => 'ExposureIp',
        'exposurePort'      => 'ExposurePort',
        'exposureType'      => 'ExposureType',
        'exposureTypeId'    => 'ExposureTypeId',
        'groupNo'           => 'GroupNo',
        'instanceId'        => 'InstanceId',
        'instanceName'      => 'InstanceName',
        'internetIp'        => 'InternetIp',
        'intranetIp'        => 'IntranetIp',
        'realVulList'       => 'RealVulList',
        'regionId'          => 'RegionId',
        'uuid'              => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allVulList) {
            $res['AllVulList'] = [];
            if (null !== $this->allVulList && \is_array($this->allVulList)) {
                $n = 0;
                foreach ($this->allVulList as $item) {
                    $res['AllVulList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->groupNo) {
            $res['GroupNo'] = $this->groupNo;
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
        if (null !== $this->realVulList) {
            $res['RealVulList'] = [];
            if (null !== $this->realVulList && \is_array($this->realVulList)) {
                $n = 0;
                foreach ($this->realVulList as $item) {
                    $res['RealVulList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return exposedChains
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllVulList'])) {
            if (!empty($map['AllVulList'])) {
                $model->allVulList = [];
                $n                 = 0;
                foreach ($map['AllVulList'] as $item) {
                    $model->allVulList[$n++] = null !== $item ? allVulList::fromMap($item) : $item;
                }
            }
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
        if (isset($map['GroupNo'])) {
            $model->groupNo = $map['GroupNo'];
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
        if (isset($map['RealVulList'])) {
            if (!empty($map['RealVulList'])) {
                $model->realVulList = [];
                $n                  = 0;
                foreach ($map['RealVulList'] as $item) {
                    $model->realVulList[$n++] = null !== $item ? realVulList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
