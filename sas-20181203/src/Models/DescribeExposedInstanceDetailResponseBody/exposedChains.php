<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedInstanceDetailResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedInstanceDetailResponseBody\exposedChains\allVulList;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedInstanceDetailResponseBody\exposedChains\realVulList;
use AlibabaCloud\Tea\Model;

class exposedChains extends Model
{
    /**
     * @var allVulList[]
     */
    public $allVulList;

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
     * @var string
     */
    public $exposureType;

    /**
     * @var string
     */
    public $exposureTypeId;

    /**
     * @var string
     */
    public $groupNo;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var realVulList[]
     */
    public $realVulList;

    /**
     * @var string
     */
    public $regionId;

    /**
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
