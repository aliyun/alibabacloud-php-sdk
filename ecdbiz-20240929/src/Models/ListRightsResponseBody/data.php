<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EcdBiz\V20240929\Models\ListRightsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EcdBiz\V20240929\Models\ListRightsResponseBody\data\valuePackageInfos;

class data extends Model
{
    /**
     * @var int
     */
    public $addDataDiskSize;

    /**
     * @var int
     */
    public $addRootDiskSize;

    /**
     * @var bool
     */
    public $aiDesktop;

    /**
     * @var string
     */
    public $businessSceneCode;

    /**
     * @var string
     */
    public $calculatingCode;

    /**
     * @var int
     */
    public $dataDiskSize;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $hibernate;

    /**
     * @var string
     */
    public $monthlyCredit;

    /**
     * @var int
     */
    public $overseas;

    /**
     * @var string
     */
    public $rightsActiveFailureCause;

    /**
     * @var string
     */
    public $rightsActiveStatus;

    /**
     * @var string
     */
    public $rightsActiveTime;

    /**
     * @var string
     */
    public $rightsAssignedUser;

    /**
     * @var string
     */
    public $rightsExpireTime;

    /**
     * @var string
     */
    public $rightsGpuSpec;

    /**
     * @var string
     */
    public $rightsId;

    /**
     * @var string
     */
    public $rightsInventorySpec;

    /**
     * @var string
     */
    public $rightsPeriod;

    /**
     * @var string
     */
    public $rightsResourceArea;

    /**
     * @var string
     */
    public $rightsResourceExpireTime;

    /**
     * @var string
     */
    public $rightsResourceId;

    /**
     * @var string
     */
    public $rightsResourceRegion;

    /**
     * @var string
     */
    public $rightsResourceStatus;

    /**
     * @var string
     */
    public $rightsResourceType;

    /**
     * @var string
     */
    public $rightsSourceName;

    /**
     * @var string
     */
    public $rightsSpec;

    /**
     * @var int
     */
    public $systemDiskSize;

    /**
     * @var valuePackageInfos[]
     */
    public $valuePackageInfos;
    protected $_name = [
        'addDataDiskSize' => 'AddDataDiskSize',
        'addRootDiskSize' => 'AddRootDiskSize',
        'aiDesktop' => 'AiDesktop',
        'businessSceneCode' => 'BusinessSceneCode',
        'calculatingCode' => 'CalculatingCode',
        'dataDiskSize' => 'DataDiskSize',
        'gmtCreate' => 'GmtCreate',
        'hibernate' => 'Hibernate',
        'monthlyCredit' => 'MonthlyCredit',
        'overseas' => 'Overseas',
        'rightsActiveFailureCause' => 'RightsActiveFailureCause',
        'rightsActiveStatus' => 'RightsActiveStatus',
        'rightsActiveTime' => 'RightsActiveTime',
        'rightsAssignedUser' => 'RightsAssignedUser',
        'rightsExpireTime' => 'RightsExpireTime',
        'rightsGpuSpec' => 'RightsGpuSpec',
        'rightsId' => 'RightsId',
        'rightsInventorySpec' => 'RightsInventorySpec',
        'rightsPeriod' => 'RightsPeriod',
        'rightsResourceArea' => 'RightsResourceArea',
        'rightsResourceExpireTime' => 'RightsResourceExpireTime',
        'rightsResourceId' => 'RightsResourceId',
        'rightsResourceRegion' => 'RightsResourceRegion',
        'rightsResourceStatus' => 'RightsResourceStatus',
        'rightsResourceType' => 'RightsResourceType',
        'rightsSourceName' => 'RightsSourceName',
        'rightsSpec' => 'RightsSpec',
        'systemDiskSize' => 'SystemDiskSize',
        'valuePackageInfos' => 'ValuePackageInfos',
    ];

    public function validate()
    {
        if (\is_array($this->valuePackageInfos)) {
            Model::validateArray($this->valuePackageInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addDataDiskSize) {
            $res['AddDataDiskSize'] = $this->addDataDiskSize;
        }

        if (null !== $this->addRootDiskSize) {
            $res['AddRootDiskSize'] = $this->addRootDiskSize;
        }

        if (null !== $this->aiDesktop) {
            $res['AiDesktop'] = $this->aiDesktop;
        }

        if (null !== $this->businessSceneCode) {
            $res['BusinessSceneCode'] = $this->businessSceneCode;
        }

        if (null !== $this->calculatingCode) {
            $res['CalculatingCode'] = $this->calculatingCode;
        }

        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->hibernate) {
            $res['Hibernate'] = $this->hibernate;
        }

        if (null !== $this->monthlyCredit) {
            $res['MonthlyCredit'] = $this->monthlyCredit;
        }

        if (null !== $this->overseas) {
            $res['Overseas'] = $this->overseas;
        }

        if (null !== $this->rightsActiveFailureCause) {
            $res['RightsActiveFailureCause'] = $this->rightsActiveFailureCause;
        }

        if (null !== $this->rightsActiveStatus) {
            $res['RightsActiveStatus'] = $this->rightsActiveStatus;
        }

        if (null !== $this->rightsActiveTime) {
            $res['RightsActiveTime'] = $this->rightsActiveTime;
        }

        if (null !== $this->rightsAssignedUser) {
            $res['RightsAssignedUser'] = $this->rightsAssignedUser;
        }

        if (null !== $this->rightsExpireTime) {
            $res['RightsExpireTime'] = $this->rightsExpireTime;
        }

        if (null !== $this->rightsGpuSpec) {
            $res['RightsGpuSpec'] = $this->rightsGpuSpec;
        }

        if (null !== $this->rightsId) {
            $res['RightsId'] = $this->rightsId;
        }

        if (null !== $this->rightsInventorySpec) {
            $res['RightsInventorySpec'] = $this->rightsInventorySpec;
        }

        if (null !== $this->rightsPeriod) {
            $res['RightsPeriod'] = $this->rightsPeriod;
        }

        if (null !== $this->rightsResourceArea) {
            $res['RightsResourceArea'] = $this->rightsResourceArea;
        }

        if (null !== $this->rightsResourceExpireTime) {
            $res['RightsResourceExpireTime'] = $this->rightsResourceExpireTime;
        }

        if (null !== $this->rightsResourceId) {
            $res['RightsResourceId'] = $this->rightsResourceId;
        }

        if (null !== $this->rightsResourceRegion) {
            $res['RightsResourceRegion'] = $this->rightsResourceRegion;
        }

        if (null !== $this->rightsResourceStatus) {
            $res['RightsResourceStatus'] = $this->rightsResourceStatus;
        }

        if (null !== $this->rightsResourceType) {
            $res['RightsResourceType'] = $this->rightsResourceType;
        }

        if (null !== $this->rightsSourceName) {
            $res['RightsSourceName'] = $this->rightsSourceName;
        }

        if (null !== $this->rightsSpec) {
            $res['RightsSpec'] = $this->rightsSpec;
        }

        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }

        if (null !== $this->valuePackageInfos) {
            if (\is_array($this->valuePackageInfos)) {
                $res['ValuePackageInfos'] = [];
                $n1 = 0;
                foreach ($this->valuePackageInfos as $item1) {
                    $res['ValuePackageInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AddDataDiskSize'])) {
            $model->addDataDiskSize = $map['AddDataDiskSize'];
        }

        if (isset($map['AddRootDiskSize'])) {
            $model->addRootDiskSize = $map['AddRootDiskSize'];
        }

        if (isset($map['AiDesktop'])) {
            $model->aiDesktop = $map['AiDesktop'];
        }

        if (isset($map['BusinessSceneCode'])) {
            $model->businessSceneCode = $map['BusinessSceneCode'];
        }

        if (isset($map['CalculatingCode'])) {
            $model->calculatingCode = $map['CalculatingCode'];
        }

        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['Hibernate'])) {
            $model->hibernate = $map['Hibernate'];
        }

        if (isset($map['MonthlyCredit'])) {
            $model->monthlyCredit = $map['MonthlyCredit'];
        }

        if (isset($map['Overseas'])) {
            $model->overseas = $map['Overseas'];
        }

        if (isset($map['RightsActiveFailureCause'])) {
            $model->rightsActiveFailureCause = $map['RightsActiveFailureCause'];
        }

        if (isset($map['RightsActiveStatus'])) {
            $model->rightsActiveStatus = $map['RightsActiveStatus'];
        }

        if (isset($map['RightsActiveTime'])) {
            $model->rightsActiveTime = $map['RightsActiveTime'];
        }

        if (isset($map['RightsAssignedUser'])) {
            $model->rightsAssignedUser = $map['RightsAssignedUser'];
        }

        if (isset($map['RightsExpireTime'])) {
            $model->rightsExpireTime = $map['RightsExpireTime'];
        }

        if (isset($map['RightsGpuSpec'])) {
            $model->rightsGpuSpec = $map['RightsGpuSpec'];
        }

        if (isset($map['RightsId'])) {
            $model->rightsId = $map['RightsId'];
        }

        if (isset($map['RightsInventorySpec'])) {
            $model->rightsInventorySpec = $map['RightsInventorySpec'];
        }

        if (isset($map['RightsPeriod'])) {
            $model->rightsPeriod = $map['RightsPeriod'];
        }

        if (isset($map['RightsResourceArea'])) {
            $model->rightsResourceArea = $map['RightsResourceArea'];
        }

        if (isset($map['RightsResourceExpireTime'])) {
            $model->rightsResourceExpireTime = $map['RightsResourceExpireTime'];
        }

        if (isset($map['RightsResourceId'])) {
            $model->rightsResourceId = $map['RightsResourceId'];
        }

        if (isset($map['RightsResourceRegion'])) {
            $model->rightsResourceRegion = $map['RightsResourceRegion'];
        }

        if (isset($map['RightsResourceStatus'])) {
            $model->rightsResourceStatus = $map['RightsResourceStatus'];
        }

        if (isset($map['RightsResourceType'])) {
            $model->rightsResourceType = $map['RightsResourceType'];
        }

        if (isset($map['RightsSourceName'])) {
            $model->rightsSourceName = $map['RightsSourceName'];
        }

        if (isset($map['RightsSpec'])) {
            $model->rightsSpec = $map['RightsSpec'];
        }

        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }

        if (isset($map['ValuePackageInfos'])) {
            if (!empty($map['ValuePackageInfos'])) {
                $model->valuePackageInfos = [];
                $n1 = 0;
                foreach ($map['ValuePackageInfos'] as $item1) {
                    $model->valuePackageInfos[$n1] = valuePackageInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
