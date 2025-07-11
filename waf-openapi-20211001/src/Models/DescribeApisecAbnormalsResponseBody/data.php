<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecAbnormalsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The number of risk-related security events.
     *
     * @example 2
     *
     * @var int
     */
    public $abnormalEventNumber;

    /**
     * @description The ID of the risk.
     *
     * @example 7c1431f27ae7e9c8cc64095***68e
     *
     * @var string
     */
    public $abnormalId;

    /**
     * @description The details of the risk. The value is a string that consists of multiple parameters in the JSON format. Valid values:
     *
     * **rule**: risk-related rule
     * **data_type**: sensitive data type
     * **custom_rule_name**: custom rule name
     * **rule_name**: built-in rule name
     *
     * @example { "data_type": ["1005","1004"], "rule": { "parent": "RiskType_Permission", "code": "Risk_UnauthSensitive", "level": "high", "origin": "default", "name": "Risk_UnauthSensitive" } }
     *
     * @var string
     */
    public $abnormalInfo;

    /**
     * @description The level of the risk. Valid values:
     *
     * **high**
     * **medium**
     * **low**
     *
     * @example high
     *
     * @var string
     */
    public $abnormalLevel;

    /**
     * @description The type of the risk.
     *
     * >  You can call the [DescribeApisecRules](https://help.aliyun.com/document_detail/2859155.html) operation to query the supported types of risks.
     *
     * @example LackOfSpeedLimit
     *
     * @var string
     */
    public $abnormalTag;

    /**
     * @description The status of the risk.
     *
     * @example unresolved
     *
     * @var string
     */
    public $abnromalStatus;

    /**
     * @description The risk-related API.
     *
     * @example /api/login
     *
     * @var string
     */
    public $apiFormat;

    /**
     * @description The ID of the risk-related API.
     *
     * @example 09559c0d71ca2ffc996b81***836d8
     *
     * @var string
     */
    public $apiId;

    /**
     * @description The business purpose of the API.
     *
     * >  You can call the [DescribeApisecRules](https://help.aliyun.com/document_detail/2859155.html) operation to query the business purposes of APIs.
     *
     * @example SendMail
     *
     * @var string
     */
    public $apiTag;

    /**
     * @description The time at which the risk was first detected. The value is a UNIX timestamp displayed in UTC. Unit: seconds.
     *
     * @example 1684252800
     *
     * @var int
     */
    public $discoverTime;

    /**
     * @description The risk-related samples.
     *
     * @var string[]
     */
    public $examples;

    /**
     * @description The time at which the API was first detected. The value is a UNIX timestamp displayed in UTC. Unit: seconds.
     *
     * @example 1701138088
     *
     * @var int
     */
    public $firstTime;

    /**
     * @description Indicates whether the API is followed. Valid values:
     *
     *   **1**: yes
     *   **0**(default): no
     *
     * @example 0
     *
     * @var int
     */
    public $follow;

    /**
     * @description The time at which the risk was marked as ignored. The value is a UNIX timestamp displayed in UTC. Unit: seconds.
     *
     * @example 1684252800
     *
     * @var int
     */
    public $ignoreTime;

    /**
     * @description The time at which the API was last accessed. The value is a UNIX timestamp displayed in UTC. Unit: seconds.
     *
     * @example 1684252800
     *
     * @var int
     */
    public $lastestTime;

    /**
     * @description The time at which the risk was last detected. The value is a UNIX timestamp displayed in UTC. Unit: seconds.
     *
     * @example 1684252800
     *
     * @var int
     */
    public $latestDiscoverTime;

    /**
     * @description The domain name or IP address of the API.
     *
     * @example a.aliyun.com
     *
     * @var string
     */
    public $matchedHost;

    /**
     * @description The remarks.
     *
     * @example Business side notified
     *
     * @var string
     */
    public $note;

    /**
     * @description The source of the risk type. Valid values:
     *
     *   **custom**
     *   **default**
     *
     * @example custom
     *
     * @var string
     */
    public $origin;

    /**
     * @description The status of the risk. Valid values:
     *
     * **toBeConfirmed**
     * **confirmed**
     * **toBeFixed**
     * **fixed**
     * **ignored**
     *
     * @example Confirmed
     *
     * @var string
     */
    public $userStatus;
    protected $_name = [
        'abnormalEventNumber' => 'AbnormalEventNumber',
        'abnormalId' => 'AbnormalId',
        'abnormalInfo' => 'AbnormalInfo',
        'abnormalLevel' => 'AbnormalLevel',
        'abnormalTag' => 'AbnormalTag',
        'abnromalStatus' => 'AbnromalStatus',
        'apiFormat' => 'ApiFormat',
        'apiId' => 'ApiId',
        'apiTag' => 'ApiTag',
        'discoverTime' => 'DiscoverTime',
        'examples' => 'Examples',
        'firstTime' => 'FirstTime',
        'follow' => 'Follow',
        'ignoreTime' => 'IgnoreTime',
        'lastestTime' => 'LastestTime',
        'latestDiscoverTime' => 'LatestDiscoverTime',
        'matchedHost' => 'MatchedHost',
        'note' => 'Note',
        'origin' => 'Origin',
        'userStatus' => 'UserStatus',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->abnormalEventNumber) {
            $res['AbnormalEventNumber'] = $this->abnormalEventNumber;
        }
        if (null !== $this->abnormalId) {
            $res['AbnormalId'] = $this->abnormalId;
        }
        if (null !== $this->abnormalInfo) {
            $res['AbnormalInfo'] = $this->abnormalInfo;
        }
        if (null !== $this->abnormalLevel) {
            $res['AbnormalLevel'] = $this->abnormalLevel;
        }
        if (null !== $this->abnormalTag) {
            $res['AbnormalTag'] = $this->abnormalTag;
        }
        if (null !== $this->abnromalStatus) {
            $res['AbnromalStatus'] = $this->abnromalStatus;
        }
        if (null !== $this->apiFormat) {
            $res['ApiFormat'] = $this->apiFormat;
        }
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->apiTag) {
            $res['ApiTag'] = $this->apiTag;
        }
        if (null !== $this->discoverTime) {
            $res['DiscoverTime'] = $this->discoverTime;
        }
        if (null !== $this->examples) {
            $res['Examples'] = $this->examples;
        }
        if (null !== $this->firstTime) {
            $res['FirstTime'] = $this->firstTime;
        }
        if (null !== $this->follow) {
            $res['Follow'] = $this->follow;
        }
        if (null !== $this->ignoreTime) {
            $res['IgnoreTime'] = $this->ignoreTime;
        }
        if (null !== $this->lastestTime) {
            $res['LastestTime'] = $this->lastestTime;
        }
        if (null !== $this->latestDiscoverTime) {
            $res['LatestDiscoverTime'] = $this->latestDiscoverTime;
        }
        if (null !== $this->matchedHost) {
            $res['MatchedHost'] = $this->matchedHost;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }
        if (null !== $this->origin) {
            $res['Origin'] = $this->origin;
        }
        if (null !== $this->userStatus) {
            $res['UserStatus'] = $this->userStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbnormalEventNumber'])) {
            $model->abnormalEventNumber = $map['AbnormalEventNumber'];
        }
        if (isset($map['AbnormalId'])) {
            $model->abnormalId = $map['AbnormalId'];
        }
        if (isset($map['AbnormalInfo'])) {
            $model->abnormalInfo = $map['AbnormalInfo'];
        }
        if (isset($map['AbnormalLevel'])) {
            $model->abnormalLevel = $map['AbnormalLevel'];
        }
        if (isset($map['AbnormalTag'])) {
            $model->abnormalTag = $map['AbnormalTag'];
        }
        if (isset($map['AbnromalStatus'])) {
            $model->abnromalStatus = $map['AbnromalStatus'];
        }
        if (isset($map['ApiFormat'])) {
            $model->apiFormat = $map['ApiFormat'];
        }
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ApiTag'])) {
            $model->apiTag = $map['ApiTag'];
        }
        if (isset($map['DiscoverTime'])) {
            $model->discoverTime = $map['DiscoverTime'];
        }
        if (isset($map['Examples'])) {
            if (!empty($map['Examples'])) {
                $model->examples = $map['Examples'];
            }
        }
        if (isset($map['FirstTime'])) {
            $model->firstTime = $map['FirstTime'];
        }
        if (isset($map['Follow'])) {
            $model->follow = $map['Follow'];
        }
        if (isset($map['IgnoreTime'])) {
            $model->ignoreTime = $map['IgnoreTime'];
        }
        if (isset($map['LastestTime'])) {
            $model->lastestTime = $map['LastestTime'];
        }
        if (isset($map['LatestDiscoverTime'])) {
            $model->latestDiscoverTime = $map['LatestDiscoverTime'];
        }
        if (isset($map['MatchedHost'])) {
            $model->matchedHost = $map['MatchedHost'];
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }
        if (isset($map['Origin'])) {
            $model->origin = $map['Origin'];
        }
        if (isset($map['UserStatus'])) {
            $model->userStatus = $map['UserStatus'];
        }

        return $model;
    }
}
