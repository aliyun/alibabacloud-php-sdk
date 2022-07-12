<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\ListOfficeSiteOverviewResponseBody;

use AlibabaCloud\Tea\Model;

class officeSiteOverviewResults extends Model
{
    /**
     * @var int
     */
    public $hasExpiredEdsCount;

    /**
     * @var int
     */
    public $hasExpiredEdsCountForGroup;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $officeSiteName;

    /**
     * @var string
     */
    public $officeSiteStatus;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $runningEdsCount;

    /**
     * @var int
     */
    public $runningEdsCountForGroup;

    /**
     * @var int
     */
    public $totalEdsCount;

    /**
     * @var int
     */
    public $totalEdsCountForGroup;

    /**
     * @var string
     */
    public $vpcType;

    /**
     * @var int
     */
    public $willExpiredEdsCount;

    /**
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
