<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ExportClientEventsRequest extends Model
{
    /**
     * @description The cloud computer ID.
     *
     * @example ecd-gx2x1dhsmucyy****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @description The cloud computer name.
     *
     * @example testName
     *
     * @var string
     */
    public $desktopName;

    /**
     * @description The end of the time range to query. Specify the time in the [ISO 8601](https://help.aliyun.com/document_detail/25696.html) standard in the YYYY-MM-DDThh:mm:ssZ format. The time must be in UTC.
     *
     * If you do not specify a value for this parameter, the current time is used.
     *
     * @example 2022-03-23T07:11:01Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the endpoint user.
     *
     * @example user01
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The type of the event that you want to query. If you provide multiple values for EventTypes, the response will include events of all the specified types. If you provide no values for EventTypes and EventType, the response will include all events in the designated region.
     *
     * Valid values:
     *
     *   DESKTOP_STOP: the shutdown event.
     *   GET_LITE_CONNECTION_TICKET: the event of retrieving the connection ticket.
     *   DESKTOP_DISCONNECT: the session disconnection event.
     *   CLIENT_LOGIN: the user logon event.
     *   GET_CONNECTION_TICKET: the connection credential retrieval event.
     *   DESKTOP_REBOOT: the restart event.
     *   DESKTOP_CONNECT: the session establishment event.
     *   DESKTOP_START: the start event.
     *
     * @example CLIENT_LOGIN
     *
     * @var string
     */
    public $eventType;

    /**
     * @description The types of the events that you want to query. You can include multiple event types, and the response will return events matching the specified types or all events if none are specified.
     *
     * @var string[]
     */
    public $eventTypes;

    /**
     * @description The language displayed on the frontend page. The backend uses this setting to define the language of exported files.
     *
     * Valid values:
     *
     *   zh-CN: Simplified Chinese.
     *   en-GB: British English.
     *
     * @example zh-CN
     *
     * @var string
     */
    public $langType;

    /**
     * @description The number of entries to return on each page.
     *
     *   Maximum value: 5000.
     *   Default value: 5000.
     *
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The office network ID.
     *
     * @example cn-hangzhou+dir-363353****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The office network name.
     *
     * @example test
     *
     * @var string
     */
    public $officeSiteName;

    /**
     * @description The region ID. You can call the [DescribeRegions](~~DescribeRegions~~) operation to query the list of regions where Elastic Desktop Service (EDS) Enterprise is available.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The beginning of the time range to query. Specify the time in the [ISO 8601](https://help.aliyun.com/document_detail/25696.html) standard in the YYYY-MM-DDThh:mm:ssZ format. The time must be in UTC.
     *
     * If you do not specify a value for this parameter, all events that occurred before the point in time that you specify for `EndTime` are queried.
     *
     * @example 2022-03-23T04:10:21Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'desktopId' => 'DesktopId',
        'desktopName' => 'DesktopName',
        'endTime' => 'EndTime',
        'endUserId' => 'EndUserId',
        'eventType' => 'EventType',
        'eventTypes' => 'EventTypes',
        'langType' => 'LangType',
        'maxResults' => 'MaxResults',
        'officeSiteId' => 'OfficeSiteId',
        'officeSiteName' => 'OfficeSiteName',
        'regionId' => 'RegionId',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->eventTypes) {
            $res['EventTypes'] = $this->eventTypes;
        }
        if (null !== $this->langType) {
            $res['LangType'] = $this->langType;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
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
     * @return ExportClientEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
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
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['EventTypes'])) {
            if (!empty($map['EventTypes'])) {
                $model->eventTypes = $map['EventTypes'];
            }
        }
        if (isset($map['LangType'])) {
            $model->langType = $map['LangType'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
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
