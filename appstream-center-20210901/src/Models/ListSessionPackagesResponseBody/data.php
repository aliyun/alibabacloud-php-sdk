<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListSessionPackagesResponseBody;

use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListSessionPackagesResponseBody\data\instanceObject;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 500
     *
     * @var int
     */
    public $availableHours;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @example 0
     *
     * @var int
     */
    public $deleteStatus;

    /**
     * @example 1701170196000
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 1701170203000
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var instanceObject
     */
    public $instanceObject;

    /**
     * @example 1000
     *
     * @var int
     */
    public $maxHours;

    /**
     * @example 100
     *
     * @var int
     */
    public $maxSessions;

    /**
     * @example p-xxxxxxxxxxxx
     *
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @example tp-xxxxxxxxx
     *
     * @var string
     */
    public $sessionPackageId;

    /**
     * @var string
     */
    public $sessionPackageName;

    /**
     * @example 0
     *
     * @var string
     */
    public $sessionPackageTypeId;

    /**
     * @example appstreaming.general.entry
     *
     * @var string
     */
    public $sessionSpec;

    /**
     * @example 60
     *
     * @var int
     */
    public $sessionUsageRate;

    /**
     * @example 4
     *
     * @var int
     */
    public $state;

    /**
     * @example 156xxxxxxxxxx
     *
     * @var int
     */
    public $userIdentification;
    protected $_name = [
        'availableHours'       => 'AvailableHours',
        'chargeType'           => 'ChargeType',
        'deleteStatus'         => 'DeleteStatus',
        'gmtCreate'            => 'GmtCreate',
        'gmtModifiedTime'      => 'GmtModifiedTime',
        'instanceObject'       => 'InstanceObject',
        'maxHours'             => 'MaxHours',
        'maxSessions'          => 'MaxSessions',
        'projectId'            => 'ProjectId',
        'projectName'          => 'ProjectName',
        'region'               => 'Region',
        'sessionPackageId'     => 'SessionPackageId',
        'sessionPackageName'   => 'SessionPackageName',
        'sessionPackageTypeId' => 'SessionPackageTypeId',
        'sessionSpec'          => 'SessionSpec',
        'sessionUsageRate'     => 'SessionUsageRate',
        'state'                => 'State',
        'userIdentification'   => 'UserIdentification',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['InstanceObject'] = null !== $this->instanceObject ? $this->instanceObject->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return data
     */
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
