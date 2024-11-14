<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecSuggestionsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The API.
     *
     * @example /apisec/v1/saveinfo
     *
     * @var string
     */
    public $apiFormat;

    /**
     * @description The domain name or IP address of the API.
     *
     * @example a.aliyun.com
     *
     * @var string
     */
    public $matchedHost;

    /**
     * @description The rule ID of the protection suggestion.
     *
     * @example 15060a1f8fed40130b7c4a7bf8d8733b
     *
     * @var string
     */
    public $suggestId;

    /**
     * @description The rule content of the protection suggestion. The value is a string that consists of multiple parameters in the JSON format. Valid values:
     *
     *   **event_tags**: event type
     *   **black_iplist**: IP address blacklist
     *   **ip_baseline**: IP address
     *   **freq_baseline**: throttling frequency
     *   **client_id_baseline**: client information
     *   **country_baseline**: country information
     *   **province_baseline**: province information
     *   **sensitive_type**: sensitive information
     *
     * @example {
     * }
     * @var string
     */
    public $suggestRule;

    /**
     * @description The rule type of the protection suggestion. Valid values:
     *
     *   **BotRule**: bot management rules
     *   **BlackIPRule**: IP address blacklist rules
     *   **WhiteIPRule**: IP address whitelist rules
     *   **RateLimitRule**: throttling rules
     *   **ClientRule**: client rules
     *   **GeoRule**: region-related rules
     *   **SensitiveRule**: sensitive information rules
     *   **UnauthRule**: authentication rules
     *
     * @example WhiteIPRule
     *
     * @var string
     */
    public $suggestType;
    protected $_name = [
        'apiFormat'   => 'ApiFormat',
        'matchedHost' => 'MatchedHost',
        'suggestId'   => 'SuggestId',
        'suggestRule' => 'SuggestRule',
        'suggestType' => 'SuggestType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiFormat) {
            $res['ApiFormat'] = $this->apiFormat;
        }
        if (null !== $this->matchedHost) {
            $res['MatchedHost'] = $this->matchedHost;
        }
        if (null !== $this->suggestId) {
            $res['SuggestId'] = $this->suggestId;
        }
        if (null !== $this->suggestRule) {
            $res['SuggestRule'] = $this->suggestRule;
        }
        if (null !== $this->suggestType) {
            $res['SuggestType'] = $this->suggestType;
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
        if (isset($map['ApiFormat'])) {
            $model->apiFormat = $map['ApiFormat'];
        }
        if (isset($map['MatchedHost'])) {
            $model->matchedHost = $map['MatchedHost'];
        }
        if (isset($map['SuggestId'])) {
            $model->suggestId = $map['SuggestId'];
        }
        if (isset($map['SuggestRule'])) {
            $model->suggestRule = $map['SuggestRule'];
        }
        if (isset($map['SuggestType'])) {
            $model->suggestType = $map['SuggestType'];
        }

        return $model;
    }
}
