<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\ListOfficeSiteOverviewResponseBody;

use AlibabaCloud\Tea\Model;

class officeSiteOverviewResults extends Model
{
    /**
     * @description The number of expired cloud desktops in the workspace.
     *
     * @example 0
     *
     * @var int
     */
    public $hasExpiredEdsCount;

    /**
     * @description The number of expired cloud desktops in the desktop group.
     *
     * @example 0
     *
     * @var int
     */
    public $hasExpiredEdsCountForGroup;

    /**
     * @description The ID of the workspace.
     *
     * @example cn-hangzhou+dir-363353****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The name of the workspace.
     *
     * @example test
     *
     * @var string
     */
    public $officeSiteName;

    /**
     * @description The status of the workspace.
     *
     * @example REGISTERED
     *
     * @var string
     */
    public $officeSiteStatus;

    /**
     * @description The region ID of the workspace.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The number of running cloud desktops in the workspace.
     *
     * @example 1
     *
     * @var int
     */
    public $runningEdsCount;

    /**
     * @description The number of running cloud desktops in the desktop group.
     *
     * @example 1
     *
     * @var int
     */
    public $runningEdsCountForGroup;

    /**
     * @description The total number of cloud desktops in the workspace.
     *
     * @example 1
     *
     * @var int
     */
    public $totalEdsCount;

    /**
     * @description The total number of cloud desktops in the desktop group.
     *
     * @example 1
     *
     * @var int
     */
    public $totalEdsCountForGroup;

    /**
     * @description The virtual private cloud (VPC) type of the workspace.
     *
     * @example standard
     *
     * @var string
     */
    public $vpcType;

    /**
     * @description The number of cloud desktops that are about to expire in the workspace.
     *
     * @example 0
     *
     * @var int
     */
    public $willExpiredEdsCount;

    /**
     * @description The number of cloud desktops that are about to expire in the desktop group.
     *
     * @example 0
     *
     * @var int
     */
    public $willExpiredEdsCountForGroup;
    protected $_name = [
        'hasExpiredEdsCount'          => 'HasExpiredEdsCount',
        'hasExpiredEdsCountForGroup'  => 'HasExpiredEdsCountForGroup',
        'officeSiteId'                => 'OfficeSiteId',
        'officeSiteName'              => 'OfficeSiteName',
        'officeSiteStatus'            => 'OfficeSiteStatus',
        'regionId'                    => 'RegionId',
        'runningEdsCount'             => 'RunningEdsCount',
        'runningEdsCountForGroup'     => 'RunningEdsCountForGroup',
        'totalEdsCount'               => 'TotalEdsCount',
        'totalEdsCountForGroup'       => 'TotalEdsCountForGroup',
        'vpcType'                     => 'VpcType',
        'willExpiredEdsCount'         => 'WillExpiredEdsCount',
        'willExpiredEdsCountForGroup' => 'WillExpiredEdsCountForGroup',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hasExpiredEdsCount) {
            $res['HasExpiredEdsCount'] = $this->hasExpiredEdsCount;
        }
        if (null !== $this->hasExpiredEdsCountForGroup) {
            $res['HasExpiredEdsCountForGroup'] = $this->hasExpiredEdsCountForGroup;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->officeSiteName) {
            $res['OfficeSiteName'] = $this->officeSiteName;
        }
        if (null !== $this->officeSiteStatus) {
            $res['OfficeSiteStatus'] = $this->officeSiteStatus;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->runningEdsCount) {
            $res['RunningEdsCount'] = $this->runningEdsCount;
        }
        if (null !== $this->runningEdsCountForGroup) {
            $res['RunningEdsCountForGroup'] = $this->runningEdsCountForGroup;
        }
        if (null !== $this->totalEdsCount) {
            $res['TotalEdsCount'] = $this->totalEdsCount;
        }
        if (null !== $this->totalEdsCountForGroup) {
            $res['TotalEdsCountForGroup'] = $this->totalEdsCountForGroup;
        }
        if (null !== $this->vpcType) {
            $res['VpcType'] = $this->vpcType;
        }
        if (null !== $this->willExpiredEdsCount) {
            $res['WillExpiredEdsCount'] = $this->willExpiredEdsCount;
        }
        if (null !== $this->willExpiredEdsCountForGroup) {
            $res['WillExpiredEdsCountForGroup'] = $this->willExpiredEdsCountForGroup;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return officeSiteOverviewResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HasExpiredEdsCount'])) {
            $model->hasExpiredEdsCount = $map['HasExpiredEdsCount'];
        }
        if (isset($map['HasExpiredEdsCountForGroup'])) {
            $model->hasExpiredEdsCountForGroup = $map['HasExpiredEdsCountForGroup'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['OfficeSiteName'])) {
            $model->officeSiteName = $map['OfficeSiteName'];
        }
        if (isset($map['OfficeSiteStatus'])) {
            $model->officeSiteStatus = $map['OfficeSiteStatus'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RunningEdsCount'])) {
            $model->runningEdsCount = $map['RunningEdsCount'];
        }
        if (isset($map['RunningEdsCountForGroup'])) {
            $model->runningEdsCountForGroup = $map['RunningEdsCountForGroup'];
        }
        if (isset($map['TotalEdsCount'])) {
            $model->totalEdsCount = $map['TotalEdsCount'];
        }
        if (isset($map['TotalEdsCountForGroup'])) {
            $model->totalEdsCountForGroup = $map['TotalEdsCountForGroup'];
        }
        if (isset($map['VpcType'])) {
            $model->vpcType = $map['VpcType'];
        }
        if (isset($map['WillExpiredEdsCount'])) {
            $model->willExpiredEdsCount = $map['WillExpiredEdsCount'];
        }
        if (isset($map['WillExpiredEdsCountForGroup'])) {
            $model->willExpiredEdsCountForGroup = $map['WillExpiredEdsCountForGroup'];
        }

        return $model;
    }
}
