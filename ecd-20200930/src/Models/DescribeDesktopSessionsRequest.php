<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeDesktopSessionsRequest extends Model
{
    /**
     * @description Specifies whether to turn on the switch to check session status of cloud computers.
     *
     * @example true
     *
     * @var bool
     */
    public $checkOsSession;

    /**
     * @description The IDs of the cloud computers. You can specify the IDs of 1 to 100 cloud computers.
     *
     * @var string[]
     */
    public $desktopId;

    /**
     * @description The name of the cloud computer.
     *
     * @example DemoComputer
     *
     * @var string
     */
    public $desktopName;

    /**
     * @description The end of the time range to query.
     *
     * @example 2023-02-13T02:51:43Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the end user.
     *
     * @example testUser
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The ID the end user. It is the same as EndUserId. Either one of these two parameters is required.
     *
     * @example alice
     *
     * @var string
     */
    public $endUserIdFilter;

    /**
     * @description The ID of the office network.
     *
     * @example cn-hangzhou+dir-363353****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID. You can call the [DescribeRegions](~~DescribeRegions~~) operation to query the regions supported by Elastic Desktop Service (EDS).
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The state of the session.
     *
     * Valid values:
     *
     *   Connected
     *   Disconnected
     *
     * @example Connected
     *
     * @var string
     */
    public $sessionStatus;

    /**
     * @description The start of the time range to query.
     *
     * @example 2023-01-28T02:31:43Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The billing method of cloud computers.
     *
     * Valid values:
     *
     *   duration: hourly plan (available for users in the whitelist)
     *   postPaid: pay-as-you-go
     *   monthPackage: monthly subscription (the 120-hour/250-hour computing plan)
     *   prePaid: monthly subscription (the Unlimited computing plan)
     *
     * @example monthPackage
     *
     * @var string
     */
    public $subPayType;
    protected $_name = [
        'checkOsSession' => 'CheckOsSession',
        'desktopId' => 'DesktopId',
        'desktopName' => 'DesktopName',
        'endTime' => 'EndTime',
        'endUserId' => 'EndUserId',
        'endUserIdFilter' => 'EndUserIdFilter',
        'officeSiteId' => 'OfficeSiteId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'sessionStatus' => 'SessionStatus',
        'startTime' => 'StartTime',
        'subPayType' => 'SubPayType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkOsSession) {
            $res['CheckOsSession'] = $this->checkOsSession;
        }
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->desktopName) {
            $res['DesktopName'] = $this->desktopName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->endUserIdFilter) {
            $res['EndUserIdFilter'] = $this->endUserIdFilter;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sessionStatus) {
            $res['SessionStatus'] = $this->sessionStatus;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->subPayType) {
            $res['SubPayType'] = $this->subPayType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDesktopSessionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckOsSession'])) {
            $model->checkOsSession = $map['CheckOsSession'];
        }
        if (isset($map['DesktopId'])) {
            if (!empty($map['DesktopId'])) {
                $model->desktopId = $map['DesktopId'];
            }
        }
        if (isset($map['DesktopName'])) {
            $model->desktopName = $map['DesktopName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['EndUserIdFilter'])) {
            $model->endUserIdFilter = $map['EndUserIdFilter'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SessionStatus'])) {
            $model->sessionStatus = $map['SessionStatus'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['SubPayType'])) {
            $model->subPayType = $map['SubPayType'];
        }

        return $model;
    }
}
