<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedInstanceListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedInstanceListResponseBody\exposedInstances\exposureComponentList;

class exposedInstances extends Model
{
    /**
     * @var int
     */
    public $asapVulCount;

    /**
     * @var int
     */
    public $assetType;

    /**
     * @var string
     */
    public $cloudAssetInfo;

    /**
     * @var int
     */
    public $cspmAlarmCount;

    /**
     * @var int
     */
    public $exploitHealthCount;

    /**
     * @var string
     */
    public $exposureComponent;

    /**
     * @var exposureComponentList[]
     */
    public $exposureComponentList;

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
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

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
     * @var int
     */
    public $laterVulCount;

    /**
     * @var int
     */
    public $nntfVulCount;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $totalVulCount;

    /**
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
        'exposureComponentList' => 'ExposureComponentList',
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

    public function validate()
    {
        if (\is_array($this->exposureComponentList)) {
            Model::validateArray($this->exposureComponentList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->exposureComponentList) {
            if (\is_array($this->exposureComponentList)) {
                $res['ExposureComponentList'] = [];
                $n1 = 0;
                foreach ($this->exposureComponentList as $item1) {
                    $res['ExposureComponentList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['ExposureComponentList'])) {
            if (!empty($map['ExposureComponentList'])) {
                $model->exposureComponentList = [];
                $n1 = 0;
                foreach ($map['ExposureComponentList'] as $item1) {
                    $model->exposureComponentList[$n1] = exposureComponentList::fromMap($item1);
                    ++$n1;
                }
            }
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
