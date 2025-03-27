<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListSessionPackagesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListSessionPackagesResponseBody\data\instanceObject;

class data extends Model
{
    /**
     * @var int
     */
    public $availableHours;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var int
     */
    public $deleteStatus;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var instanceObject
     */
    public $instanceObject;

    /**
     * @var int
     */
    public $maxHours;

    /**
     * @var int
     */
    public $maxSessions;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $sessionPackageId;

    /**
     * @var string
     */
    public $sessionPackageName;

    /**
     * @var string
     */
    public $sessionPackageTypeId;

    /**
     * @var string
     */
    public $sessionSpec;

    /**
     * @var int
     */
    public $sessionUsageRate;

    /**
     * @var int
     */
    public $state;

    /**
     * @var int
     */
    public $userIdentification;
    protected $_name = [
        'availableHours' => 'AvailableHours',
        'chargeType' => 'ChargeType',
        'deleteStatus' => 'DeleteStatus',
        'gmtCreate' => 'GmtCreate',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'instanceObject' => 'InstanceObject',
        'maxHours' => 'MaxHours',
        'maxSessions' => 'MaxSessions',
        'projectId' => 'ProjectId',
        'projectName' => 'ProjectName',
        'region' => 'Region',
        'sessionPackageId' => 'SessionPackageId',
        'sessionPackageName' => 'SessionPackageName',
        'sessionPackageTypeId' => 'SessionPackageTypeId',
        'sessionSpec' => 'SessionSpec',
        'sessionUsageRate' => 'SessionUsageRate',
        'state' => 'State',
        'userIdentification' => 'UserIdentification',
    ];

    public function validate()
    {
        if (null !== $this->instanceObject) {
            $this->instanceObject->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableHours) {
            $res['AvailableHours'] = $this->availableHours;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->deleteStatus) {
            $res['DeleteStatus'] = $this->deleteStatus;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }

        if (null !== $this->instanceObject) {
            $res['InstanceObject'] = null !== $this->instanceObject ? $this->instanceObject->toArray($noStream) : $this->instanceObject;
        }

        if (null !== $this->maxHours) {
            $res['MaxHours'] = $this->maxHours;
        }

        if (null !== $this->maxSessions) {
            $res['MaxSessions'] = $this->maxSessions;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->sessionPackageId) {
            $res['SessionPackageId'] = $this->sessionPackageId;
        }

        if (null !== $this->sessionPackageName) {
            $res['SessionPackageName'] = $this->sessionPackageName;
        }

        if (null !== $this->sessionPackageTypeId) {
            $res['SessionPackageTypeId'] = $this->sessionPackageTypeId;
        }

        if (null !== $this->sessionSpec) {
            $res['SessionSpec'] = $this->sessionSpec;
        }

        if (null !== $this->sessionUsageRate) {
            $res['SessionUsageRate'] = $this->sessionUsageRate;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->userIdentification) {
            $res['UserIdentification'] = $this->userIdentification;
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
        if (isset($map['AvailableHours'])) {
            $model->availableHours = $map['AvailableHours'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['DeleteStatus'])) {
            $model->deleteStatus = $map['DeleteStatus'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }

        if (isset($map['InstanceObject'])) {
            $model->instanceObject = instanceObject::fromMap($map['InstanceObject']);
        }

        if (isset($map['MaxHours'])) {
            $model->maxHours = $map['MaxHours'];
        }

        if (isset($map['MaxSessions'])) {
            $model->maxSessions = $map['MaxSessions'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['SessionPackageId'])) {
            $model->sessionPackageId = $map['SessionPackageId'];
        }

        if (isset($map['SessionPackageName'])) {
            $model->sessionPackageName = $map['SessionPackageName'];
        }

        if (isset($map['SessionPackageTypeId'])) {
            $model->sessionPackageTypeId = $map['SessionPackageTypeId'];
        }

        if (isset($map['SessionSpec'])) {
            $model->sessionSpec = $map['SessionSpec'];
        }

        if (isset($map['SessionUsageRate'])) {
            $model->sessionUsageRate = $map['SessionUsageRate'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['UserIdentification'])) {
            $model->userIdentification = $map['UserIdentification'];
        }

        return $model;
    }
}
