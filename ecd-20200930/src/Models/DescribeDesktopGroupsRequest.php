<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeDesktopGroupsRequest extends Model
{
    /**
     * @var string
     */
    public $desktopGroupId;

    /**
     * @var string
     */
    public $desktopGroupName;

    /**
     * @var string[]
     */
    public $endUserIds;

    /**
     * @var string[]
     */
    public $excludedEndUserIds;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var int
     */
    public $ownType;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var string
     */
    public $policyGroupId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'desktopGroupId'     => 'DesktopGroupId',
        'desktopGroupName'   => 'DesktopGroupName',
        'endUserIds'         => 'EndUserIds',
        'excludedEndUserIds' => 'ExcludedEndUserIds',
        'maxResults'         => 'MaxResults',
        'nextToken'          => 'NextToken',
        'officeSiteId'       => 'OfficeSiteId',
        'ownType'            => 'OwnType',
        'period'             => 'Period',
        'periodUnit'         => 'PeriodUnit',
        'policyGroupId'      => 'PolicyGroupId',
        'regionId'           => 'RegionId',
        'status'             => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktopGroupId) {
            $res['DesktopGroupId'] = $this->desktopGroupId;
        }
        if (null !== $this->desktopGroupName) {
            $res['DesktopGroupName'] = $this->desktopGroupName;
        }
        if (null !== $this->endUserIds) {
            $res['EndUserIds'] = $this->endUserIds;
        }
        if (null !== $this->excludedEndUserIds) {
            $res['ExcludedEndUserIds'] = $this->excludedEndUserIds;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->ownType) {
            $res['OwnType'] = $this->ownType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDesktopGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopGroupId'])) {
            $model->desktopGroupId = $map['DesktopGroupId'];
        }
        if (isset($map['DesktopGroupName'])) {
            $model->desktopGroupName = $map['DesktopGroupName'];
        }
        if (isset($map['EndUserIds'])) {
            if (!empty($map['EndUserIds'])) {
                $model->endUserIds = $map['EndUserIds'];
            }
        }
        if (isset($map['ExcludedEndUserIds'])) {
            if (!empty($map['ExcludedEndUserIds'])) {
                $model->excludedEndUserIds = $map['ExcludedEndUserIds'];
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['OwnType'])) {
            $model->ownType = $map['OwnType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
