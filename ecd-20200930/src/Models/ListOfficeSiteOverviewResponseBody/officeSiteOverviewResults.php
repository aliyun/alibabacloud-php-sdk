<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\ListOfficeSiteOverviewResponseBody;

use AlibabaCloud\Tea\Model;

class officeSiteOverviewResults extends Model
{
    /**
     * @var string
     */
    public $officeSiteStatus;

    /**
     * @var int
     */
    public $totalEdsCount;

    /**
     * @var int
     */
    public $willExpiredEdsCount;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var int
     */
    public $runningEdsCount;

    /**
     * @var string
     */
    public $officeSiteName;

    /**
     * @var int
     */
    public $hasExpiredEdsCount;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'officeSiteStatus'    => 'OfficeSiteStatus',
        'totalEdsCount'       => 'TotalEdsCount',
        'willExpiredEdsCount' => 'WillExpiredEdsCount',
        'officeSiteId'        => 'OfficeSiteId',
        'runningEdsCount'     => 'RunningEdsCount',
        'officeSiteName'      => 'OfficeSiteName',
        'hasExpiredEdsCount'  => 'HasExpiredEdsCount',
        'regionId'            => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->officeSiteStatus) {
            $res['OfficeSiteStatus'] = $this->officeSiteStatus;
        }
        if (null !== $this->totalEdsCount) {
            $res['TotalEdsCount'] = $this->totalEdsCount;
        }
        if (null !== $this->willExpiredEdsCount) {
            $res['WillExpiredEdsCount'] = $this->willExpiredEdsCount;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->runningEdsCount) {
            $res['RunningEdsCount'] = $this->runningEdsCount;
        }
        if (null !== $this->officeSiteName) {
            $res['OfficeSiteName'] = $this->officeSiteName;
        }
        if (null !== $this->hasExpiredEdsCount) {
            $res['HasExpiredEdsCount'] = $this->hasExpiredEdsCount;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['OfficeSiteStatus'])) {
            $model->officeSiteStatus = $map['OfficeSiteStatus'];
        }
        if (isset($map['TotalEdsCount'])) {
            $model->totalEdsCount = $map['TotalEdsCount'];
        }
        if (isset($map['WillExpiredEdsCount'])) {
            $model->willExpiredEdsCount = $map['WillExpiredEdsCount'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['RunningEdsCount'])) {
            $model->runningEdsCount = $map['RunningEdsCount'];
        }
        if (isset($map['OfficeSiteName'])) {
            $model->officeSiteName = $map['OfficeSiteName'];
        }
        if (isset($map['HasExpiredEdsCount'])) {
            $model->hasExpiredEdsCount = $map['HasExpiredEdsCount'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
