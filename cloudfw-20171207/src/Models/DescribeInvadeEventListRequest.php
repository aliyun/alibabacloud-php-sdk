<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeInvadeEventListRequest extends Model
{
    /**
     * @var string
     */
    public $assetsIP;

    /**
     * @var string
     */
    public $assetsInstanceId;

    /**
     * @var string
     */
    public $assetsInstanceName;

    /**
     * @var string
     */
    public $currentPage;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $eventKey;

    /**
     * @var string
     */
    public $eventName;

    /**
     * @var string
     */
    public $eventUuid;

    /**
     * @var string
     */
    public $isIgnore;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $memberUid;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var int[]
     */
    public $processStatusList;

    /**
     * @var int[]
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $sourceIp;

    /**
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
