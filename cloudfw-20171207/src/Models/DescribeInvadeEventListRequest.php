<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeInvadeEventListRequest extends Model
{
    /**
     * @description The IP address of the affected asset.
     *
     * @example 10.0.XX.XX
     *
     * @var string
     */
    public $assetsIP;

    /**
     * @description The ID of the instance.
     *
     * @example ins_1321_asedb_****
     *
     * @var string
     */
    public $assetsInstanceId;

    /**
     * @description The name of the instance.
     *
     * @example ECS_test
     *
     * @var string
     */
    public $assetsInstanceName;

    /**
     * @description The number of the page to return.
     *
     * Default value: 1.
     * @example 1
     *
     * @var string
     */
    public $currentPage;

    /**
     * @description The end of the time range to query. The value is a UNIX timestamp. Unit: seconds. If you do not specify this parameter, the query ends at the current time.
     *
     * @example 1656837360
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the breach awareness event.
     *
     * @example 69d189e2-ec17-4676-a2fe-02969234****
     *
     * @var string
     */
    public $eventKey;

    /**
     * @description The name of the breach awareness event.
     *
     * @example event_test
     *
     * @var string
     */
    public $eventName;

    /**
     * @description The UUID of the breach awareness event.
     *
     * @example fadd-dfdd-****
     *
     * @var string
     */
    public $eventUuid;

    /**
     * @description Specifies whether the breach awareness event is ignored. Valid values:
     *
     *   **true**: The breach awareness event is ignored.
     *   **false**: The breach awareness event is not ignored.
     *
     * @example true
     *
     * @var string
     */
    public $isIgnore;

    /**
     * @description The language of the content within the response. Valid values:
     *
     *   **zh**: Chinese (default)
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The ID of the member.
     *
     * @example 135809047715****
     *
     * @var int
     */
    public $memberUid;

    /**
     * @description The number of entries to return on each page.
     *
     * Default value: 6. Maximum value: 10.
     * @example 1
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The handling status of breach awareness events.
     *
     * @var int[]
     */
    public $processStatusList;

    /**
     * @description The risk levels.
     *
     * @var int[]
     */
    public $riskLevel;

    /**
     * @description The source IP address of the request.
     *
     * @example 192.0.XX.XX
     *
     * @deprecated
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The beginning of the time range to query. The value is a UNIX timestamp. Unit: seconds. If you do not specify this parameter, the query starts from 30 days before the current time.
     *
     * @example 1656750960
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'assetsIP'           => 'AssetsIP',
        'assetsInstanceId'   => 'AssetsInstanceId',
        'assetsInstanceName' => 'AssetsInstanceName',
        'currentPage'        => 'CurrentPage',
        'endTime'            => 'EndTime',
        'eventKey'           => 'EventKey',
        'eventName'          => 'EventName',
        'eventUuid'          => 'EventUuid',
        'isIgnore'           => 'IsIgnore',
        'lang'               => 'Lang',
        'memberUid'          => 'MemberUid',
        'pageSize'           => 'PageSize',
        'processStatusList'  => 'ProcessStatusList',
        'riskLevel'          => 'RiskLevel',
        'sourceIp'           => 'SourceIp',
        'startTime'          => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assetsIP) {
            $res['AssetsIP'] = $this->assetsIP;
        }
        if (null !== $this->assetsInstanceId) {
            $res['AssetsInstanceId'] = $this->assetsInstanceId;
        }
        if (null !== $this->assetsInstanceName) {
            $res['AssetsInstanceName'] = $this->assetsInstanceName;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->eventKey) {
            $res['EventKey'] = $this->eventKey;
        }
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->eventUuid) {
            $res['EventUuid'] = $this->eventUuid;
        }
        if (null !== $this->isIgnore) {
            $res['IsIgnore'] = $this->isIgnore;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->processStatusList) {
            $res['ProcessStatusList'] = $this->processStatusList;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInvadeEventListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssetsIP'])) {
            $model->assetsIP = $map['AssetsIP'];
        }
        if (isset($map['AssetsInstanceId'])) {
            $model->assetsInstanceId = $map['AssetsInstanceId'];
        }
        if (isset($map['AssetsInstanceName'])) {
            $model->assetsInstanceName = $map['AssetsInstanceName'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EventKey'])) {
            $model->eventKey = $map['EventKey'];
        }
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['EventUuid'])) {
            $model->eventUuid = $map['EventUuid'];
        }
        if (isset($map['IsIgnore'])) {
            $model->isIgnore = $map['IsIgnore'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProcessStatusList'])) {
            if (!empty($map['ProcessStatusList'])) {
                $model->processStatusList = $map['ProcessStatusList'];
            }
        }
        if (isset($map['RiskLevel'])) {
            if (!empty($map['RiskLevel'])) {
                $model->riskLevel = $map['RiskLevel'];
            }
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
