<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedInstanceDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedInstanceDetailResponseBody\exposedChains\allVulList;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedInstanceDetailResponseBody\exposedChains\cspmRiskList;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedInstanceDetailResponseBody\exposedChains\realVulList;

class exposedChains extends Model
{
    /**
     * @var allVulList[]
     */
    public $allVulList;

    /**
     * @var cspmRiskList[]
     */
    public $cspmRiskList;

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
        'allVulList' => 'AllVulList',
        'cspmRiskList' => 'CspmRiskList',
        'exposureComponent' => 'ExposureComponent',
        'exposureIp' => 'ExposureIp',
        'exposurePort' => 'ExposurePort',
        'exposureType' => 'ExposureType',
        'exposureTypeId' => 'ExposureTypeId',
        'groupNo' => 'GroupNo',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'internetIp' => 'InternetIp',
        'intranetIp' => 'IntranetIp',
        'realVulList' => 'RealVulList',
        'regionId' => 'RegionId',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        if (\is_array($this->allVulList)) {
            Model::validateArray($this->allVulList);
        }
        if (\is_array($this->cspmRiskList)) {
            Model::validateArray($this->cspmRiskList);
        }
        if (\is_array($this->realVulList)) {
            Model::validateArray($this->realVulList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allVulList) {
            if (\is_array($this->allVulList)) {
                $res['AllVulList'] = [];
                $n1 = 0;
                foreach ($this->allVulList as $item1) {
                    $res['AllVulList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->cspmRiskList) {
            if (\is_array($this->cspmRiskList)) {
                $res['CspmRiskList'] = [];
                $n1 = 0;
                foreach ($this->cspmRiskList as $item1) {
                    $res['CspmRiskList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->realVulList)) {
                $res['RealVulList'] = [];
                $n1 = 0;
                foreach ($this->realVulList as $item1) {
                    $res['RealVulList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllVulList'])) {
            if (!empty($map['AllVulList'])) {
                $model->allVulList = [];
                $n1 = 0;
                foreach ($map['AllVulList'] as $item1) {
                    $model->allVulList[$n1] = allVulList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CspmRiskList'])) {
            if (!empty($map['CspmRiskList'])) {
                $model->cspmRiskList = [];
                $n1 = 0;
                foreach ($map['CspmRiskList'] as $item1) {
                    $model->cspmRiskList[$n1] = cspmRiskList::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['RealVulList'] as $item1) {
                    $model->realVulList[$n1] = realVulList::fromMap($item1);
                    ++$n1;
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
