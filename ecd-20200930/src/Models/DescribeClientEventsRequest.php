<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeClientEventsRequest extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account with which the event is associated.
     *
     * @example ecd-8fupvkhg0aayu****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @description The account type of the workspace. Valid values:
     *
     *   SIMPLE: convenience account
     *   AD_CONNECTOR: enterprise AD account
     *
     * @example 10.10.*.*
     *
     * @var string
     */
    public $desktopIp;

    /**
     * @description The types of event.
     *
     * @example test
     *
     * @var string
     */
    public $desktopName;

    /**
     * @description The ID of the desktop group.
     *
     * @example The operation that you want to perform. Set the value to **DescribeClientEvents**.
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The ID of the region where the cloud desktop resides.
     *
     * @example 2020-11-31T06:32:31Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the directory to which the cloud desktop belongs.
     *
     * @example 28961708130834****
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The ID of the workspace to which the cloud desktop belongs. If you do not specify a value for this parameter, events of all workspaces in the specified region are queried.
     *
     * @example DESKTOP_DISCONNECT
     *
     * @var string
     */
    public $eventType;

    /**
     * @description Details about the events.
     *
     * @var string[]
     */
    public $eventTypes;

    /**
     * @description The status of the event. This parameter is returned if you set the EventType parameter to DESKTOP_DISCONNECT or GET_CONNECTION_TICKET. Valid values:
     *
     *   200\. The value indicates that the request is successful.
     *   An error message. The value indicates that the request failed. Example: FailedToGetConnectionTicket.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The IP address of the client.
     *
     * @example AAAAAV3MpHK1AP0pfERHZN5pu6nmB7qrRFJ8vmttjxPL****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the workspace to which the cloud desktop belongs.
     *
     * @example cn-hangzhou+dir-bh77qa8nmjot4****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The OS that the client runs.
     *
     * @example test
     *
     * @var string
     */
    public $officeSiteName;

    /**
     * @description The number of bytes that are received.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The IP address of the cloud desktop.
     *
     * @example 2020-11-30T06:32:31Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'desktopId'      => 'DesktopId',
        'desktopIp'      => 'DesktopIp',
        'desktopName'    => 'DesktopName',
        'directoryId'    => 'DirectoryId',
        'endTime'        => 'EndTime',
        'endUserId'      => 'EndUserId',
        'eventType'      => 'EventType',
        'eventTypes'     => 'EventTypes',
        'maxResults'     => 'MaxResults',
        'nextToken'      => 'NextToken',
        'officeSiteId'   => 'OfficeSiteId',
        'officeSiteName' => 'OfficeSiteName',
        'regionId'       => 'RegionId',
        'startTime'      => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->desktopIp) {
            $res['DesktopIp'] = $this->desktopIp;
        }
        if (null !== $this->desktopName) {
            $res['DesktopName'] = $this->desktopName;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->eventTypes) {
            $res['EventTypes'] = $this->eventTypes;
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
        if (null !== $this->officeSiteName) {
            $res['OfficeSiteName'] = $this->officeSiteName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClientEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }
        if (isset($map['DesktopIp'])) {
            $model->desktopIp = $map['DesktopIp'];
        }
        if (isset($map['DesktopName'])) {
            $model->desktopName = $map['DesktopName'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['EventTypes'])) {
            if (!empty($map['EventTypes'])) {
                $model->eventTypes = $map['EventTypes'];
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
        if (isset($map['OfficeSiteName'])) {
            $model->officeSiteName = $map['OfficeSiteName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
