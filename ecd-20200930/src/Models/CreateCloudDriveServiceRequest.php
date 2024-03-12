<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateCloudDriveServiceRequest extends Model
{
    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @description The business type.
     *
     * @example 3
     *
     * @var int
     */
    public $bizType;

    /**
     * @var string
     */
    public $cdsChargeType;

    /**
     * @example cen-g4ba1mkji8nj6****
     *
     * @var string
     */
    public $cenId;

    /**
     * @example test.local
     *
     * @var string
     */
    public $domainName;

    /**
     * @var string[]
     */
    public $endUserId;

    /**
     * @example 536870912000
     *
     * @var int
     */
    public $maxSize;

    /**
     * @description The name of the cloud disk that you want to create in Cloud Drive Service.
     *
     * @example wuying-pds
     *
     * @var string
     */
    public $name;

    /**
     * @example cn-hangzhou+dir-400695****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @example SIMPLE
     *
     * @var string
     */
    public $officeSiteType;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The solution ID.
     *
     * @example co-0esnf8kb8zpfbqmvt
     *
     * @var string
     */
    public $solutionId;

    /**
     * @var int
     */
    public $userCount;

    /**
     * @example 1024000
     *
     * @var int
     */
    public $userMaxSize;
    protected $_name = [
        'autoPay'        => 'AutoPay',
        'autoRenew'      => 'AutoRenew',
        'bizType'        => 'BizType',
        'cdsChargeType'  => 'CdsChargeType',
        'cenId'          => 'CenId',
        'domainName'     => 'DomainName',
        'endUserId'      => 'EndUserId',
        'maxSize'        => 'MaxSize',
        'name'           => 'Name',
        'officeSiteId'   => 'OfficeSiteId',
        'officeSiteType' => 'OfficeSiteType',
        'period'         => 'Period',
        'periodUnit'     => 'PeriodUnit',
        'regionId'       => 'RegionId',
        'solutionId'     => 'SolutionId',
        'userCount'      => 'UserCount',
        'userMaxSize'    => 'UserMaxSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->cdsChargeType) {
            $res['CdsChargeType'] = $this->cdsChargeType;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->maxSize) {
            $res['MaxSize'] = $this->maxSize;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->officeSiteType) {
            $res['OfficeSiteType'] = $this->officeSiteType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->solutionId) {
            $res['SolutionId'] = $this->solutionId;
        }
        if (null !== $this->userCount) {
            $res['UserCount'] = $this->userCount;
        }
        if (null !== $this->userMaxSize) {
            $res['UserMaxSize'] = $this->userMaxSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCloudDriveServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['CdsChargeType'])) {
            $model->cdsChargeType = $map['CdsChargeType'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EndUserId'])) {
            if (!empty($map['EndUserId'])) {
                $model->endUserId = $map['EndUserId'];
            }
        }
        if (isset($map['MaxSize'])) {
            $model->maxSize = $map['MaxSize'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['OfficeSiteType'])) {
            $model->officeSiteType = $map['OfficeSiteType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SolutionId'])) {
            $model->solutionId = $map['SolutionId'];
        }
        if (isset($map['UserCount'])) {
            $model->userCount = $map['UserCount'];
        }
        if (isset($map['UserMaxSize'])) {
            $model->userMaxSize = $map['UserMaxSize'];
        }

        return $model;
    }
}
