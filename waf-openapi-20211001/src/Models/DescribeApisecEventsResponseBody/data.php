<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecEventsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The number of attacks.
     * >Notice: The parameter has been deprecated, please use the Attackips parameter.
     *
     * @example 10
     *
     * @var int
     */
    public $allCnt;

    /**
     * @description The API.
     *
     * @example /apisec/v1/register.php
     *
     * @var string
     */
    public $apiFormat;

    /**
     * @description The ID of the API that is associated with the security event.
     *
     * @example 2ecc1cf67b91853bc55545052ccf06a8
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
     * @description The client that is attacked.
     *
     * @example Chrome
     *
     * @var string
     */
    public $attackClient;

    /**
     * @description The information about the number of attacks. The value of this parameter is a JSON string that contains multiple parameters. Key indicates the timestamp in seconds, and Value indicates the number of attacks.
     *
     * @example {\\"1717498320\\":500,\\"1717498380\\":529,\\"1717498440\\":20,\\"1717498260\\":518,\\"1717498200\\":481,\\"1717498140\\":52}
     *
     * @var string
     */
    public $attackCntInfo;

    /**
     * @description The source IP address of the attack.
     *
     * @example 104.234.140.33
     *
     * @var string
     */
    public $attackIp;

    /**
     * @description The information about the attack source IP address. The value of this parameter is a JSON string that contains multiple parameters. The value includes the following parameters:
     *
     *   **ip**: the IP address
     *   **country_id**: the country ID
     *   **region_id**: the region ID
     *   **cnt**: the number of attacks
     *
     * @example [{\\"ip\\":\\"72.*.*.119\\",\\"country_id\\":\\"US\\",\\"region_id\\":\\"\\",\\"cnt\\":\\"2100\\"}]
     *
     * @var string
     */
    public $attackIpInfo;

    /**
     * @description The source IP addresses of the attacks.
     *
     * @var string[]
     */
    public $attackIps;

    /**
     * @description The end of the time range to query. This value is a UNIX timestamp in UTC. Unit: seconds.
     *
     * @example 1683703260
     *
     * @var int
     */
    public $endTs;

    /**
     * @description The ID of the event.
     *
     * @example c82cb276847e9c96f9597d9f4b0cdcff
     *
     * @var string
     */
    public $eventId;

    /**
     * @description The details of the event. The value of this parameter is a JSON string that contains multiple parameters. The value includes the following parameters:
     *
     *   **ip_info**: the information about the attack source IP address. This parameter corresponds to the **AttackIpInfo** response parameter.
     *   **rule_id**: the ID of the rule corresponding to the event.
     *   **rule_tag**: the information about the rule corresponding to the event.
     *
     * @example {}
     *
     * @var string
     */
    public $eventInfo;

    /**
     * @description The severity level of the event. Valid values:
     *
     *   **high**
     *   **medium**
     *   **low**
     *
     * @example medium
     *
     * @var string
     */
    public $eventLevel;

    /**
     * @description The type of the event.
     *
     * >  You can call the [DescribeApisecRules](https://help.aliyun.com/document_detail/2859155.html) operation to query the supported event types.
     *
     * @example ObtainSensitiveUnauthorized
     *
     * @var string
     */
    public $eventTag;

    /**
     * @description Indicates whether the API is followed. Valid values:
     *
     *   **1**: The API is followed.
     *   **0**: The API is not followed.
     *
     * @example 0
     *
     * @var int
     */
    public $follow;

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
     * @example Notified
     *
     * @var string
     */
    public $note;

    /**
     * @description The source of the event type. Valid values:
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
     * @description The country to which the attack source IP address belongs.
     *
     * @example US
     *
     * @var string
     */
    public $remoteCountry;

    /**
     * @description The region to which the attack source IP address belongs.
     *
     * @example 110000
     *
     * @var string
     */
    public $remoteRegion;

    /**
     * @description The sample API request. The value of this parameter is a JSON string that contains multiple parameters.
     *
     * @example {}
     *
     * @var string
     */
    public $requestData;

    /**
     * @description The sample API response. The value of this parameter is a JSON string that contains multiple parameters.
     *
     * @example {}
     *
     * @var string
     */
    public $responseData;

    /**
     * @description The beginning of the time range to query. This value is a UNIX timestamp in UTC. Unit: seconds.
     *
     * @example 1683648000
     *
     * @var int
     */
    public $startTs;

    /**
     * @description The event status. Valid values:
     *
     *   **toBeConfirmed**
     *   **confirmed**
     *   **ignored**
     *
     * @example Ignore
     *
     * @var string
     */
    public $userStatus;
    protected $_name = [
        'allCnt' => 'AllCnt',
        'apiFormat' => 'ApiFormat',
        'apiId' => 'ApiId',
        'apiTag' => 'ApiTag',
        'attackClient' => 'AttackClient',
        'attackCntInfo' => 'AttackCntInfo',
        'attackIp' => 'AttackIp',
        'attackIpInfo' => 'AttackIpInfo',
        'attackIps' => 'AttackIps',
        'endTs' => 'EndTs',
        'eventId' => 'EventId',
        'eventInfo' => 'EventInfo',
        'eventLevel' => 'EventLevel',
        'eventTag' => 'EventTag',
        'follow' => 'Follow',
        'matchedHost' => 'MatchedHost',
        'note' => 'Note',
        'origin' => 'Origin',
        'remoteCountry' => 'RemoteCountry',
        'remoteRegion' => 'RemoteRegion',
        'requestData' => 'RequestData',
        'responseData' => 'ResponseData',
        'startTs' => 'StartTs',
        'userStatus' => 'UserStatus',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->allCnt) {
            $res['AllCnt'] = $this->allCnt;
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
        if (null !== $this->attackClient) {
            $res['AttackClient'] = $this->attackClient;
        }
        if (null !== $this->attackCntInfo) {
            $res['AttackCntInfo'] = $this->attackCntInfo;
        }
        if (null !== $this->attackIp) {
            $res['AttackIp'] = $this->attackIp;
        }
        if (null !== $this->attackIpInfo) {
            $res['AttackIpInfo'] = $this->attackIpInfo;
        }
        if (null !== $this->attackIps) {
            $res['AttackIps'] = $this->attackIps;
        }
        if (null !== $this->endTs) {
            $res['EndTs'] = $this->endTs;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->eventInfo) {
            $res['EventInfo'] = $this->eventInfo;
        }
        if (null !== $this->eventLevel) {
            $res['EventLevel'] = $this->eventLevel;
        }
        if (null !== $this->eventTag) {
            $res['EventTag'] = $this->eventTag;
        }
        if (null !== $this->follow) {
            $res['Follow'] = $this->follow;
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
        if (null !== $this->remoteCountry) {
            $res['RemoteCountry'] = $this->remoteCountry;
        }
        if (null !== $this->remoteRegion) {
            $res['RemoteRegion'] = $this->remoteRegion;
        }
        if (null !== $this->requestData) {
            $res['RequestData'] = $this->requestData;
        }
        if (null !== $this->responseData) {
            $res['ResponseData'] = $this->responseData;
        }
        if (null !== $this->startTs) {
            $res['StartTs'] = $this->startTs;
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
        if (isset($map['AllCnt'])) {
            $model->allCnt = $map['AllCnt'];
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
        if (isset($map['AttackClient'])) {
            $model->attackClient = $map['AttackClient'];
        }
        if (isset($map['AttackCntInfo'])) {
            $model->attackCntInfo = $map['AttackCntInfo'];
        }
        if (isset($map['AttackIp'])) {
            $model->attackIp = $map['AttackIp'];
        }
        if (isset($map['AttackIpInfo'])) {
            $model->attackIpInfo = $map['AttackIpInfo'];
        }
        if (isset($map['AttackIps'])) {
            if (!empty($map['AttackIps'])) {
                $model->attackIps = $map['AttackIps'];
            }
        }
        if (isset($map['EndTs'])) {
            $model->endTs = $map['EndTs'];
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['EventInfo'])) {
            $model->eventInfo = $map['EventInfo'];
        }
        if (isset($map['EventLevel'])) {
            $model->eventLevel = $map['EventLevel'];
        }
        if (isset($map['EventTag'])) {
            $model->eventTag = $map['EventTag'];
        }
        if (isset($map['Follow'])) {
            $model->follow = $map['Follow'];
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
        if (isset($map['RemoteCountry'])) {
            $model->remoteCountry = $map['RemoteCountry'];
        }
        if (isset($map['RemoteRegion'])) {
            $model->remoteRegion = $map['RemoteRegion'];
        }
        if (isset($map['RequestData'])) {
            $model->requestData = $map['RequestData'];
        }
        if (isset($map['ResponseData'])) {
            $model->responseData = $map['ResponseData'];
        }
        if (isset($map['StartTs'])) {
            $model->startTs = $map['StartTs'];
        }
        if (isset($map['UserStatus'])) {
            $model->userStatus = $map['UserStatus'];
        }

        return $model;
    }
}
