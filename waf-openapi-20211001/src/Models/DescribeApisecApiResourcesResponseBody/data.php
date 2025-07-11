<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecApiResourcesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The number of API-related risks.
     *
     * @example 2
     *
     * @var int
     */
    public $abnormalNum;

    /**
     * @description The total number of calls to this API in the previous 30 days.
     *
     * @example 10
     *
     * @var int
     */
    public $allCnt;

    /**
     * @description The API.
     *
     * @example /v1/etl/finddatabyvid
     *
     * @var string
     */
    public $apiFormat;

    /**
     * @description The ID of the API.
     *
     * @example 867ade***24ee6e205b8da82b8f84
     *
     * @var string
     */
    public $apiId;

    /**
     * @description The API-related information. The value of this parameter is a JSON string that contains multiple parameters. The value includes the following parameters:
     *
     * **param_num**: the number of API parameters
     * **request_method**: the request method
     * **protocol**: the request protocol
     * **api_url**: the request URL
     * **poc_payload**: the request
     * **request**: the sample request
     * **response**: the sample response
     * **param**: the request parameters
     *
     * @var string
     */
    public $apiInfo;

    /**
     * @description The request method of the API. Valid values:
     *
     * **GET**
     * **POST**
     * **HEAD**
     * **PUT**
     * **DELETE**
     * **CONNECT**
     * **PATCH**
     * **OPTIONS**
     *
     * @example POST
     *
     * @var string
     */
    public $apiMethod;

    /**
     * @description The API-related sensitive information. The value of this parameter is a JSON string that contains multiple parameters. The value includes the following parameters:
     *
     * **request_sensitive_list**: the sensitive data type in the request
     * **response_sensitive_list**: the sensitive data type in the response
     * **sensitive_list**: sensitive data types
     * **sensitive_level**: sensitivity level
     *
     * @example {
     * "sensitive_list": ["1003","1005"],
     * "sensitive_level": "L2",
     * "request_sensitive_list": ["1003"],
     * "response_sensitive_list": ["1005"]
     * }
     *
     * @var string
     */
    public $apiSensitive;

    /**
     * @description The sensitive data type in the request.
     *
     * @example ["1002","1005"]
     *
     * @var string
     */
    public $apiSensitiveRequest;

    /**
     * @description The sensitive data type in the response.
     *
     * @example ["1002","1005"]
     *
     * @var string
     */
    public $apiSensitiveResponse;

    /**
     * @description The API status. Valid values:
     *
     *   **NewbornInterface**: The API is newly added.
     *   **OfflineInterface**: The API is inactive.
     *   **normal**: The API is normal.
     *
     * @example NewbornInterface
     *
     * @var string
     */
    public $apiStatus;

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
     * @description The service object. Valid values:
     *
     *   **PublicAPI**: public services
     *   **ThirdpartAPI**: cooperation with third-party partners
     *   **InternalAPI**: internal office
     *
     * @example PublicAPI
     *
     * @var string
     */
    public $apiType;

    /**
     * @description Indicates whether authentication is required. Valid values:
     *
     * **0**: Authentication is required.
     * **1**: Authentication is not required.
     *
     * @example 1
     *
     * @var string
     */
    public $authFlag;

    /**
     * @description The number of bot-initiated requests in the previous 30 days.
     *
     * @example 2
     *
     * @var int
     */
    public $botCnt;

    /**
     * @description The number of the cross-border requests in the previous 30 days.
     *
     * @example 2
     *
     * @var int
     */
    public $crossBorderCnt;

    /**
     * @description The number of API-related security events.
     *
     * @example 2
     *
     * @var int
     */
    public $eventNum;

    /**
     * @description The sample APIs.
     *
     * @var string[]
     */
    public $examples;

    /**
     * @description The time when the API asset was first detected. This value is a UNIX timestamp in UTC. Unit: seconds.
     *
     * @example 1683388800
     *
     * @var int
     */
    public $farthestTs;

    /**
     * @description Specifies whether to follow the API. Valid values:
     *
     *   **1**: follows the API.
     *   **0**: does not follow the API.
     *
     * @example 1
     *
     * @var int
     */
    public $follow;

    /**
     * @description The time at which the API was last accessed. The value is a UNIX timestamp displayed in UTC. Unit: seconds.
     *
     * @example 1683388800
     *
     * @var int
     */
    public $lastestTs;

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
     * @example Password changed
     *
     * @var string
     */
    public $note;

    /**
     * @description The list of protection objects corresponding to this asset.
     *
     * @var string[]
     */
    public $resources;
    protected $_name = [
        'abnormalNum' => 'AbnormalNum',
        'allCnt' => 'AllCnt',
        'apiFormat' => 'ApiFormat',
        'apiId' => 'ApiId',
        'apiInfo' => 'ApiInfo',
        'apiMethod' => 'ApiMethod',
        'apiSensitive' => 'ApiSensitive',
        'apiSensitiveRequest' => 'ApiSensitiveRequest',
        'apiSensitiveResponse' => 'ApiSensitiveResponse',
        'apiStatus' => 'ApiStatus',
        'apiTag' => 'ApiTag',
        'apiType' => 'ApiType',
        'authFlag' => 'AuthFlag',
        'botCnt' => 'BotCnt',
        'crossBorderCnt' => 'CrossBorderCnt',
        'eventNum' => 'EventNum',
        'examples' => 'Examples',
        'farthestTs' => 'FarthestTs',
        'follow' => 'Follow',
        'lastestTs' => 'LastestTs',
        'matchedHost' => 'MatchedHost',
        'note' => 'Note',
        'resources' => 'Resources',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->abnormalNum) {
            $res['AbnormalNum'] = $this->abnormalNum;
        }
        if (null !== $this->allCnt) {
            $res['AllCnt'] = $this->allCnt;
        }
        if (null !== $this->apiFormat) {
            $res['ApiFormat'] = $this->apiFormat;
        }
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->apiInfo) {
            $res['ApiInfo'] = $this->apiInfo;
        }
        if (null !== $this->apiMethod) {
            $res['ApiMethod'] = $this->apiMethod;
        }
        if (null !== $this->apiSensitive) {
            $res['ApiSensitive'] = $this->apiSensitive;
        }
        if (null !== $this->apiSensitiveRequest) {
            $res['ApiSensitiveRequest'] = $this->apiSensitiveRequest;
        }
        if (null !== $this->apiSensitiveResponse) {
            $res['ApiSensitiveResponse'] = $this->apiSensitiveResponse;
        }
        if (null !== $this->apiStatus) {
            $res['ApiStatus'] = $this->apiStatus;
        }
        if (null !== $this->apiTag) {
            $res['ApiTag'] = $this->apiTag;
        }
        if (null !== $this->apiType) {
            $res['ApiType'] = $this->apiType;
        }
        if (null !== $this->authFlag) {
            $res['AuthFlag'] = $this->authFlag;
        }
        if (null !== $this->botCnt) {
            $res['BotCnt'] = $this->botCnt;
        }
        if (null !== $this->crossBorderCnt) {
            $res['CrossBorderCnt'] = $this->crossBorderCnt;
        }
        if (null !== $this->eventNum) {
            $res['EventNum'] = $this->eventNum;
        }
        if (null !== $this->examples) {
            $res['Examples'] = $this->examples;
        }
        if (null !== $this->farthestTs) {
            $res['FarthestTs'] = $this->farthestTs;
        }
        if (null !== $this->follow) {
            $res['Follow'] = $this->follow;
        }
        if (null !== $this->lastestTs) {
            $res['LastestTs'] = $this->lastestTs;
        }
        if (null !== $this->matchedHost) {
            $res['MatchedHost'] = $this->matchedHost;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }
        if (null !== $this->resources) {
            $res['Resources'] = $this->resources;
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
        if (isset($map['AbnormalNum'])) {
            $model->abnormalNum = $map['AbnormalNum'];
        }
        if (isset($map['AllCnt'])) {
            $model->allCnt = $map['AllCnt'];
        }
        if (isset($map['ApiFormat'])) {
            $model->apiFormat = $map['ApiFormat'];
        }
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ApiInfo'])) {
            $model->apiInfo = $map['ApiInfo'];
        }
        if (isset($map['ApiMethod'])) {
            $model->apiMethod = $map['ApiMethod'];
        }
        if (isset($map['ApiSensitive'])) {
            $model->apiSensitive = $map['ApiSensitive'];
        }
        if (isset($map['ApiSensitiveRequest'])) {
            $model->apiSensitiveRequest = $map['ApiSensitiveRequest'];
        }
        if (isset($map['ApiSensitiveResponse'])) {
            $model->apiSensitiveResponse = $map['ApiSensitiveResponse'];
        }
        if (isset($map['ApiStatus'])) {
            $model->apiStatus = $map['ApiStatus'];
        }
        if (isset($map['ApiTag'])) {
            $model->apiTag = $map['ApiTag'];
        }
        if (isset($map['ApiType'])) {
            $model->apiType = $map['ApiType'];
        }
        if (isset($map['AuthFlag'])) {
            $model->authFlag = $map['AuthFlag'];
        }
        if (isset($map['BotCnt'])) {
            $model->botCnt = $map['BotCnt'];
        }
        if (isset($map['CrossBorderCnt'])) {
            $model->crossBorderCnt = $map['CrossBorderCnt'];
        }
        if (isset($map['EventNum'])) {
            $model->eventNum = $map['EventNum'];
        }
        if (isset($map['Examples'])) {
            if (!empty($map['Examples'])) {
                $model->examples = $map['Examples'];
            }
        }
        if (isset($map['FarthestTs'])) {
            $model->farthestTs = $map['FarthestTs'];
        }
        if (isset($map['Follow'])) {
            $model->follow = $map['Follow'];
        }
        if (isset($map['LastestTs'])) {
            $model->lastestTs = $map['LastestTs'];
        }
        if (isset($map['MatchedHost'])) {
            $model->matchedHost = $map['MatchedHost'];
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }
        if (isset($map['Resources'])) {
            if (!empty($map['Resources'])) {
                $model->resources = $map['Resources'];
            }
        }

        return $model;
    }
}
