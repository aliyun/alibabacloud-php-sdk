<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeClientEventsRequest extends Model
{
    /**
     * @description The cloud desktop ID. If you do not specify a value for this parameter, events of all cloud desktops in the specified region are queried.
     *
     * @example ecd-8fupvkhg0aayu****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @description The IP address of the cloud desktop. If you do not specify a value for this parameter, the events of all cloud desktops in the specified region are queried.
     *
     * @example 10.10.*.*
     *
     * @var string
     */
    public $desktopIp;

    /**
     * @description The cloud desktop name.
     *
     * @example test
     *
     * @var string
     */
    public $desktopName;

    /**
     * @description This parameter is not available to the public.
     *
     * @example cn-hangzhou+dir-bh77qa8nmjot4****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The end of the time range to query. Specify the time in the [ISO 8601](~~25696~~) standard in the YYYY-MM-DDThh:mm:ssZ format. The time must be in UTC.\
     * If you do not specify a value for this parameter, the current time is used.
     * @example 2020-11-31T06:32:31Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The information about the end user that connects to the cloud desktop from the Elastic Desktop Service (EDS) client. The information can be a Resource Access Management (RAM) user ID or an Active Directory (AD) username. If you do not specify a value for this parameter, the events of all end users in the specified region are queried.
     *
     * @example 28961708130834****
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The type of the events that you want to query. If you specify multiple values for the EventTypes parameter, the events of all specified types are returned. If you do not specify values for the EventTypes and EventType parameters, all events of end users in the specified region are returned.
     *
     * Valid values:
     *
     *   DESKTOP_STOP: End users stop the cloud desktop.
     *
     * <!-- -->
     *
     *   GET_LITE_CONNECTION_TICKET: End users obtain the credential for reconnecting to the cloud desktop upon disconnection.
     *
     * <!-- -->
     *
     *   DESKTOP_DISCONNECT: End users disconnect desktop sessions.
     *
     * <!-- -->
     *
     *   GET_CONNECTION_TICKET: End users request to connect to the cloud desktop.
     *
     * <!-- -->
     *
     *   CLIENT_LOGIN: End users log on to the cloud desktop.
     *
     * <!-- -->
     *
     *   DESKTOP_REBOOT: End users restart the cloud desktop.
     *
     * <!-- -->
     *
     *   DESKTOP_CONNECT: End users establish desktop sessions.
     *
     * <!-- -->
     *
     *   DESKTOP_START: End users start the cloud desktop.
     *
     * <!-- -->
     * @example DESKTOP_DISCONNECT
     *
     * @var string
     */
    public $eventType;

    /**
     * @description The array of event types that you want to query. You can specify multiple event types. The response contains all or specified types of events.
     *
     * @var string[]
     */
    public $eventTypes;

    /**
     * @description The number of entries per page.\
     * Default value: 100.
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You do not need to specify this parameter for the first request. You must specify the token that is obtained from the previous query as the value of NextToken.
     *
     * @example AAAAAV3MpHK1AP0pfERHZN5pu6nmB7qrRFJ8vmttjxPL****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the workspace to which the cloud desktop belongs. If you do not specify a value for this parameter, the events of all workspaces in the specified region are queried.
     *
     * @example cn-hangzhou+dir-bh77qa8nmjot4****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The workspace name.
     *
     * @example test
     *
     * @var string
     */
    public $officeSiteName;

    /**
     * @description The region ID. You can call the [DescribeRegions](~~196646~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The beginning of the time range to query. Specify the time in the [ISO 8601](~~25696~~) standard in the YYYY-MM-DDThh:mm:ssZ format. The time must be in UTC.\
     * If you do not specify a value for this parameter, all events that occurred before the point in time that you specify for `EndTime` are queried.
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
